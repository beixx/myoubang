Function.prototype.bind = function(o) {
    var _f = this;
    return function() {
        return _f.apply(o, arguments);
    };
};

$.fn.outer = function() {
    return $('<div></div>').append(this.eq(0).clone()).html(); 
};

jQuery.extend(
 {
     evalJSON: function(strJson) {
         return eval("(" + strJson + ")");
     },
     toJSON: function(object) {
         var type = typeof object;
         if ('object' == type) {
             if (Array == object.constructor)
                 type = 'array';
             else if (RegExp == object.constructor)
                 type = 'regexp';
             else
                 type = 'object';
         }
         switch (type) {
             case 'undefined':
             case 'unknown':
                 return;
                 break;
             case 'function':
             case 'boolean':
             case 'regexp':
                 return object.toString();
                 break;
             case 'number':
                 return isFinite(object) ? object.toString() : 'null';
                 break;
             case 'string':
                 return '"' + object.replace(/(\\|\")/g, "\\$1").replace(/\n|\r|\t/g,
       function() {
           var a = arguments[0];
           return (a == '\n') ? '\\n' :
                       (a == '\r') ? '\\r' :
                       (a == '\t') ? '\\t' : ""
       }) + '"';
                 break;
             case 'object':
                 if (object === null) return 'null';
                 var results = [];
                 for (var property in object) {
                     if (object[property] != null) {
                         var value = jQuery.toJSON(object[property]);
                         if (value !== undefined) {
                             results.push(jQuery.toJSON(property) + ':' + value);
                         }
                     } else {
                         results.push(property + ':null');
                     }
                 }
                 return '{' + results.join(',') + '}';
                 break;
             case 'array':
                 var results = [];
                 for (var i = 0; i < object.length; i++) {
                     var value = jQuery.toJSON(object[i]);
                     if (value !== undefined) results.push(value);
                 }
                 return '[' + results.join(',') + ']';
                 break;
         }
     }
 });


$.fieldValue = function(el, successful) {
    var n = el.name, t = el.type, tag = el.tagName.toLowerCase();
    if (typeof successful == 'undefined') successful = true;

    if (successful && (!n || el.disabled || t == 'reset' || t == 'button' ||
        (t == 'checkbox' || t == 'radio') && !el.checked ||
        (t == 'submit' || t == 'image') && el.form && el.form.clk != el ||
        tag == 'select' && el.selectedIndex == -1))
        return null;

    if (tag == 'select') {
        var index = el.selectedIndex;
        if (index < 0) return null;
        var a = [], ops = el.options;
        var one = (t == 'select-one');
        var max = (one ? index + 1 : ops.length);
        for (var i = (one ? index : 0); i < max; i++) {
            var op = ops[i];
            if (op.selected) {
                var v = op.value;
                if (!v)
                    v = (op.attributes && op.attributes['value'] && !(op.attributes['value'].specified)) ? op.text : op.value;
                if (one) return v;
                a.push(v);
            }
        }
        return a;
    }
    return el.value;
};

$.fn.setFieldValue = function(sValue) {
    return this.each(function() {
        var t = this.type, tag = this.tagName.toLowerCase(), eEl = this;
        switch (t) {
            case 'hidden':
            case 'text':
            case 'file':
            case 'password':
            case 'textarea':
                this.value = sValue;
                break;
            case 'checkbox':
                var oReg = new RegExp('(^|,) + eEl.value + (,|$)', 'g');
                eEl.checked = oReg.test(sValue);
                break;
            case 'radio':
                if (eEl.value == sValue)
                    eEl.checked = true;
                break;
            case 'select-one':
                for (var j = 0; j < eEl.options.length; j++) {
                    if (eEl.options[j].value == sValue) {
                        eEl.options[j].selected = true;
                        break;
                    }
                }
                break;
        }
    });
};

$.fn.clearForm = function() {
    return this.each(function() {
        $('input,select,textarea', this).clearFields();
    });
};


$.fn.clearFields = $.fn.clearInputs = function() {
    return this.each(function() {
        var t = this.type, tag = this.tagName.toLowerCase();
        if (t == 'text' || t == 'password' || tag == 'textarea')
            this.value = '';
        else if (t == 'checkbox' || t == 'radio')
            this.checked = false;
        else if (tag == 'select')
            this.selectedIndex = -1;
    });
};


$.fn.resetForm = function() {
    return this.each(function() {
        if (typeof this.reset == 'function' || (typeof this.reset == 'object' && !this.reset.nodeType))
            this.reset();
    });
};


$.fn.enable = function(b) {
    if (b == undefined) b = true;
    return this.each(function() {
        this.disabled = !b;
    });
};

$.fn.selected = function(select) {
    if (select == undefined) select = true;
    return this.each(function() {
        var t = this.type;
        if (t == 'checkbox' || t == 'radio')
            this.checked = select;
        else if (this.tagName.toLowerCase() == 'option') {
            var $sel = $(this).parent('select');
            if (select && $sel[0] && $sel[0].type == 'select-one') {
                $sel.find('option').selected(false);
            }
            this.selected = select;
        }
    });
};




////////////////////
//加载提示
//Created By : immater
////////////////////
function Tip(info) {
    this.tipInfo = info;


    this._divTip = document.getElementById('tip16');
    if (!this.tipInfo) this.tipInfo = '正在处理中...';
    if (typeof Tip._isInit == 'undefined') {
        Tip.prototype._init = function() {
            if (!this._divTip) {

                var eTip = document.createElement('div');
                eTip.setAttribute('id', 'tip16');
                eTip.style.position = 'fixed';
                if (! +[1, ] && !window.XMLHttpRequest) {//ie6
                    eTip.style["position"] = 'absolute';
                }
                eTip.style.zIndex = '10';
                eTip.style.display = 'none';
                eTip.style.border = 'solid 0px #D1D1D1';
                eTip.style.backgroundColor = '#4B981D';
                eTip.style.padding = '5px 15px';
                eTip.style.top = '10px';
                eTip.style.right = '10px'; 
                try {
                    document.body.appendChild(eTip);
                } catch (e) { }

                this._divTip = eTip;

            }
        };

        Tip._isInit = true;
    }
    this._init();
    if (typeof Tip._isShow == 'undefined') {
        Tip.prototype.show = function() {
 
            this._divTip.style.display = 'none';
        };
        Tip._isShow = true;
    }
    if (typeof Tip._isHide == 'undefined') {
        Tip.prototype.hide = function() {
            this._divTip.style.display = 'none';
        };
        Tip._isHide = true;
    }
}
$(function() {
    $('.g-search, .g-form').keypress(function(event) {
        if (event.keyCode == 13) {
            $(this).find('input[name=submit]').click()
        }
    })
})