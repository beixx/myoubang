/**
 * 
 * @authors 王昱森
 * @date    2015-08-14 11:31:56
 * @version 1.0.3
 */
var Meter = (function () {

    var options = {

        styles: {
            sAngle: 0.93,
            eAngle: 2.07,
            area: {
                radius: 30,
                colors: { 
                    '0': '#1266BC', 
                    '0.15': '#67C6F2', 
                    '0.27': '#45F5E6',
                    '0.75': '#FFDE00',
                    '0.93': '#F5694B',
                    '1': '#FF0202'
                },
                lineWidth: 1,
                scaleLength: 9,
                scaleWidth: 0.2,
                lineColor: '#fff'
            },
            range: {
                color: '#F4674B',
                width: 2,
                arrow: {
                    height: 15,
                    radius: 4
                } 
            },
            value: {
                margin: -40,
                color: '#F4674B',
                font: 'bold 48px Microsoft YaHei'
            },
            title: {
                margin: -5,
                color: '#F4674B',
                font: 'bold 14px Microsoft YaHei'
            },
            subTitle: {
                margin: 25,
                color: '#999',
                font: '12px Microsoft YaHei'
            },
            label: {
                radius: 28,
                color: '#aaa',
                background: '#f5f5f5',
                font: '12px Microsoft YaHei'
            },
            inner: {
                radius: 97,
                color: '#999',
                dashedWidth: 3
            }
        }
    };

    var element, 
        context, 
        styles,
        sAngle,
        eAngle,
        areaStyle,
        rangeStyle,
        valueStyle,
        titleStyle,
        subTitleStyle,
        labelStyle,
        innerStyle;

    var extend = function(obj1, obj2){
        for(var k in obj2) {
            if(obj1.hasOwnProperty(k) && typeof obj1[k] == 'object') {
                extend(obj1[k], obj2[k]);
            } else {
                obj1[k] = obj2[k];
            }
        }
    }

    var calcLocation = function(r, end){

        return {
            x: options.centerPoint.x + r * Math.cos(Math.PI * end),
            y: options.centerPoint.y + r * Math.sin(Math.PI * end)
        };
    }

    var calcValueRange = function(value){
        var data = options.data.area,
            index = data.length - 1;

        for (var i = index; i >= 0; i--) {
            if(value >= data[i].min && value < data[i].max){
                index = i;
            }
        };
        var r = (eAngle - sAngle)/data.length,
            s = r * index + sAngle,
            e = r * (index + 1) + sAngle,
            o = data[index];

        return {
            range: (value - o.min)/(o.max - o.min) * (e - s) + s,
            index: index
        };
    }

    var drawCircle = function(opts, flag) {
        var x = opts.x || options.centerPoint.x,
            y = opts.y || options.centerPoint.y,
            s = opts.start || 0,
            e = opts.end || 2;

        context.beginPath();
        context.moveTo(x, y);

        switch(flag){
            case 1: 
                context.setLineDash && context.setLineDash([innerStyle.dashedWidth]);
            case 2:
                context.arc(x, y, opts.r, Math.PI*s, Math.PI*e);
                context.closePath();
                context.strokeStyle = opts.style;
                context.stroke();
                break;
            default:
                context.arc(x, y, opts.r, Math.PI*s, Math.PI*e);
                context.closePath();
                context.fillStyle = opts.style;
                context.fill();
                break;
        }      
    }

    var drawArea = function(){
        var grad  = context.createLinearGradient(0, 0, options.radius*2, 0);
        for(var k in areaStyle.colors) {
            grad.addColorStop(k, areaStyle.colors[k]);
        }

        drawCircle({
            r: options.radius,
            start: sAngle,
            end: eAngle,
            style: grad
        });

        drawCircle({
            r: options.radius - areaStyle.radius,
            style: '#fff'
        });
    }

    var drawValueRange = function(valueRange){

        var r = options.radius - areaStyle.radius;

        drawCircle({
            r: r,
            start: sAngle,
            end: valueRange.range,
            style: labelStyle.background
        });

        drawCircle({
            r: r - labelStyle.radius,
            start: sAngle,
            end: valueRange.range,
            style: rangeStyle.color
        });

        drawCircle({
            r: r - labelStyle.radius - rangeStyle.width,
            style: '#fff'
        });
    }

    var fillText = function(opts){
        context.font = opts.font; 
        context.fillStyle = opts.color;
        context.textAlign = opts.align || 'center';
        context.textBaseline = opts.vertical || 'middle';  
        context.moveTo(opts.x, opts.y);  
        context.fillText(opts.text, opts.x, opts.y); 
    }

    var drawInnerContent = function(valueRange, value){
        drawCircle({
            r: innerStyle.radius,
            start: sAngle,
            end: eAngle,
            style: innerStyle.color
        }, 1);

        drawCircle({
            r: innerStyle.radius - 1,
            style: '#fff'
        });

        var data = options.data;
        
        fillText({
            font: valueStyle.font,
            color: valueStyle.color,
            text: value,
            x: options.radius,
            y: options.radius + valueStyle.margin
        });

        fillText({
            font: titleStyle.font,
            color: titleStyle.color,
            text: data.title.replace('{t}', data.area[valueRange.index].text).replace('{v}', value),
            x: options.radius,
            y: options.radius + titleStyle.margin
        });

        fillText({
            font: subTitleStyle.font,
            color: subTitleStyle.color,
            text: data.subTitle,
            x: options.radius,
            y: options.radius + subTitleStyle.margin
        });
    }

    var drawArrow = function(valueRange){
        var r = options.radius - areaStyle.radius - labelStyle.radius,
            loc = calcLocation(r, valueRange.range),
            x = loc.x - 1, 
            y = loc.y + 0.5;

        drawCircle({
            x: x,
            y: y,
            r: rangeStyle.arrow.radius,
            style: rangeStyle.color
        });
        
        var a = calcLocation(r - rangeStyle.arrow.height, valueRange.range),
            b = calcLocation(r, valueRange.range - 0.01),
            c = calcLocation(r, valueRange.range + 0.01);

        context.beginPath();
        context.moveTo(a.x - 1, a.y + 0.5);
        context.lineTo(b.x - 1, b.y + 0.5);
        context.lineTo(c.x - 1, c.y + 0.5);
        context.closePath();
        context.fillStyle = rangeStyle.color;
        context.fill();

        drawCircle({
            x: x,
            y: y,
            r: rangeStyle.arrow.radius - rangeStyle.width,
            style: '#fff'
        });
    }

    var drawLine = function(line) {
        context.beginPath();
        context.moveTo(line.start.x, line.start.y);
        context.lineTo(line.end.x, line.end.y);
        context.closePath();
        context.strokeStyle = line.style;
        context.lineWidth = line.width || 1;
        context.stroke();
    }

    var drawTickMarks = function(){
        var scaleLength = areaStyle.scaleLength,
            data = options.data.area,
            len = scaleLength * data.length,
            range = (eAngle - sAngle)/len;

        for(var j = 1; j < len; j++){
            drawLine({
                start: calcLocation(options.radius, sAngle + range * j),
                end: calcLocation(options.radius - areaStyle.radius, sAngle + range * j),
                style: areaStyle.lineColor,
                width: j % scaleLength == 0 ? areaStyle.lineWidth: areaStyle.scaleWidth
            });
        }

        var lblArr = [];
        for(var i = 0; i < data.length; i++){
            var o = data[i];
            // 如果不需兼容IE9以下则不用join
            if(lblArr.join('').indexOf(o.min) == -1) {
                lblArr.push(o.min);
            }
            lblArr.push(o.text);
            lblArr.push(o.max);

        }
        
        var lblLen = lblArr.length - 1,
            lblRange = (eAngle - sAngle)/lblLen,
            lblOpt = labelStyle,
            lblR = options.radius - areaStyle.radius - lblOpt.radius/2;

        for(var k = 0; k <= lblLen; k++){
            var loc = calcLocation(lblR, sAngle + lblRange * k);
            lblOpt.x = loc.x;
            lblOpt.y = loc.y;
            lblOpt.text = lblArr[k];
            fillText(lblOpt);
        }
        
    }

    var drawing = function(w, h) {
        var value = options.data.value,
            valueTemp = options.data.area[0].min;

        var timer = setInterval(function(){
            context.clearRect(0, 0, w, h);
            context.fillStyle = "#fff";
            context.fillRect(0, 0, w, h);

            valueTemp = valueTemp + 10 > value ? value: valueTemp + 10;
            var valueRange = calcValueRange(valueTemp);

            drawArea();
            drawValueRange(valueRange);
            drawInnerContent(valueRange, valueTemp);
            drawArrow(valueRange);
            drawTickMarks();

            if(valueTemp === value) {
                clearInterval(timer);
            }
        }, 10);
    }

    var exports = {};

    exports.setOptions = function(opts){
        extend(options, opts);

        styles = options.styles;
        sAngle = styles.sAngle;
        eAngle = styles.eAngle;
        areaStyle = styles.area;
        rangeStyle = styles.range;
        valueStyle = styles.value;
        titleStyle = styles.title;
        subTitleStyle = styles.subTitle;
        labelStyle = styles.label;
        innerStyle = styles.inner;

        element = typeof options.element == 'string' ? document.getElementById(options.element) : options.element;
        context = element.getContext('2d');
        return exports;
    };

    exports.init = function(){
        drawing(element.offsetWidth, element.offsetHeight);
        return exports;
    }

    return exports;
})();

/**
 * 
 * @authors 王昱森
 * @date    2015-08-14 11:31:44
 * @version 1.0.3
 */

var Radar = (function(){

    var options = {

        styles: {
            offset: {
                top: 15,
                left: 0
            },
            border: {
                width: 2,
                color: '#2EC8CA'
            },
            splitLine: {
                color: '#ccc'
            },
            title: {
                font: 'bold 52px Microsoft YaHei',
                color: '#F56948'
            },
            valueRange: {
                border: {
                    width: 4,
                    color: '#FF0101'
                },
                background: '#F56948',
                arrow: 2
            },
            inner: {
                radius: 70,
                background: '#fff'
            },
            label: {
                image: '',
                font: '16px Microsoft YaHei',
                color: '#666'
            }
        }
    };

    var element,
        styles,
        borderStyle,
        splitLineStyle,
        titleStyle,
        valueRangeStyle,
        innerStyle,
        labelStyle;
    
    var extend = function(obj1, obj2){
        for(var k in obj2) {
            if(obj1.hasOwnProperty(k) && typeof obj1[k] == 'object') {
                extend(obj1[k], obj2[k]);
            } else {
                obj1[k] = obj2[k];
            }
        }
    }

    var calcLocation = function(cp, r, end){

        return {
            x: cp[0] + r * Math.cos(Math.PI * end),
            y: cp[1] + r * Math.sin(Math.PI * end)
        };
    }

    var drawLine = function(line) {
        var lines = line.lines;
        context.beginPath();
        context.moveTo(lines[0].x, lines[0].y);

        for(var i = 1; i < lines.length; i++){
            context.lineTo(lines[i].x, lines[i].y);
        }
        
        context.closePath();

        if(line.style) {
            context.strokeStyle = line.style;
            context.lineWidth = line.width || 1;
            context.stroke();
        }

        if(line.fill) {
            context.fillStyle = line.fill;
            context.fill();
        }
    }

    var fillText = function(opts){
        context.font = opts.font; 
        context.fillStyle = opts.color;
        context.textAlign = opts.align || 'center';
        context.textBaseline = opts.vertical || 'middle';  
        context.moveTo(opts.x, opts.y);  
        context.fillText(opts.text, opts.x, opts.y); 
    }

    var drawIcon = function(borderLoc, polar) {

        var img = new Image();
        img.src = labelStyle.image;
        img.onload = function(){
            for(var n = 0; n < borderLoc.length; n++){
                var text = polar[n].text,
                    icon = polar[n].icon,
                    loc = borderLoc[n],
                    x = loc.x + icon.l,
                    y = loc.y + icon.t;

                context.drawImage(img, icon.sx, icon.sy, icon.w, icon.h, x, y, icon.w, icon.h);

                fillText({
                    font: labelStyle.font,
                    color: labelStyle.color,
                    text: text,
                    x: x + icon.w/2,
                    y: y + icon.h + 10
                });
            }
        }
    }

    var drawInner = function(cp, valueRangeLoc, borderLoc, innerLoc, valueSum) {
        drawLine({
            lines: borderLoc,
            style: borderStyle.color,
            width: borderStyle.width
        });

        drawLine({
            lines: valueRangeLoc,
            style: valueRangeStyle.border.color,
            width: valueRangeStyle.border.width,
            fill: valueRangeStyle.background
        });

        for(var j = 0; j < borderLoc.length; j++){
            drawLine({
                lines: [{x: cp[0], y: cp[1]}, borderLoc[j]],
                style: splitLineStyle.color
            });
        }

        drawLine({
            lines: innerLoc,
            fill: innerStyle.background
        }); 

        fillText({
            font: titleStyle.font,
            color: titleStyle.color,
            text: options.title.replace('{v}', valueSum),
            x: cp[0],
            y: cp[1]
        });

        for (var k = valueRangeLoc.length - 1; k >= 0; k--) {
            var x = valueRangeLoc[k].x,
                y = valueRangeLoc[k].y;

            context.beginPath();
            context.moveTo(x, y);
            context.arc(x, y, valueRangeStyle.arrow, 0, Math.PI*2);
            context.closePath();
            context.strokeStyle = valueRangeStyle.border.color;
            context.lineWidth = valueRangeStyle.border.width;
            context.stroke();
            context.fillStyle = '#fff';
            context.fill();
        }
    }

    var calcRedrawPath = function(borderLoc){
        var startLoc = borderLoc[0];
        var minX = startLoc.x, 
            minY = startLoc.y, 
            maxX = startLoc.x, 
            maxY = startLoc.y;

        for(var i = 1; i < borderLoc.length; i ++) {
            var loc = borderLoc[i];
            minX = loc.x < minX ? loc.x : minX;
            minY = loc.y < minY ? loc.y : minY;
            maxX = loc.x > maxX ? loc.x : maxX;
            maxY = loc.y > maxY ? loc.y : maxY;
        }

        var borderW = borderStyle.width;
        return {
            x: minX - borderW,
            y: minY - borderW,
            w: maxX - minX + borderW * 2,
            h: maxY - minY + borderW * 2
        };
    }

    var drawing = function(cp, w, h){
        var polar = options.polar,
            polarCount = polar.length,
            radius = options.radius,
            data = options.data;
            angles = [],
            borderLoc = [];
            

        var dataTemp = [];
        for(var i = 0; i < polarCount; i++) {
            dataTemp.push(0);

            var end = 1.5 + i * (2/polarCount);
            angles.push(end);
            borderLoc.push(calcLocation(cp, radius, end));
        }

        context.fillStyle = "#fff";
        context.fillRect(0, 0, w, h);

        drawIcon(borderLoc, polar);

        var redrawPath = calcRedrawPath(borderLoc);

        var timer = setInterval(function(){

            var eqCount = 0,
                valueSum = 0,
                valueRangeLoc = [],
                innerLoc = [];

            for(var i = 0; i < polarCount; i++){
                dataTemp[i] = dataTemp[i] + 5 > data[i] ? data[i]: dataTemp[i] + 5;
                if(dataTemp[i] === data[i]) {
                    ++eqCount;
                }

                var end = angles[i];

                // inner
                var ir = innerStyle.radius;
                innerLoc.push(calcLocation(cp, innerStyle.radius, end));

                // valueRange
                var vr = dataTemp[i]/polar[i].max * (radius - ir) + ir;
                valueRangeLoc.push(calcLocation(cp, vr, end));

                valueSum += dataTemp[i];
            }

            if(eqCount === polarCount) {
                clearInterval(timer);
            }

            context.clearRect(redrawPath.x, redrawPath.y, redrawPath.w, redrawPath.h);
            context.fillStyle = "#fff";
            context.fillRect(redrawPath.x, redrawPath.y, redrawPath.w, redrawPath.h);

            drawInner(cp, valueRangeLoc, borderLoc, innerLoc, valueSum);

        }, 10);

                
    }

    var exports = {};

    exports.setOptions = function(opts){
        extend(options, opts);

        styles = options.styles;
        borderStyle = styles.border;
        splitLineStyle = styles.splitLine;
        titleStyle = styles.title,
        valueRangeStyle = styles.valueRange,
        innerStyle = styles.inner;
        labelStyle = styles.label;

        element = typeof options.element == 'string' ? document.getElementById(options.element) : options.element;
        context = element.getContext('2d');
        return exports;
    };

    exports.init = function(){
        var w = element.offsetWidth,
            h = element.offsetHeight;

        var ofs = options.styles.offset;
        drawing([w/2 + ofs.left, h/2 + ofs.top], w, h);
        
        return exports;
    }

    return exports;
    
})();