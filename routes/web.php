<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');
Route::get('/{name}/{id}', 'IndexController@index');
Route::get('/test', 'IndexController@test');
Route::get('/login/index', 'LoginController@index',array());
Route::post('/login/check', 'LoginController@check');
Route::get('/login/logout', 'LoginController@logout');

Route::post('/worker/getCustomerIdentificationNumber', 'Worker\IndexController@getCustomerIdentificationNumber');
Route::get('/worker/total/index', 'Worker\TotalController@index');
Route::get('/worker/train/index', 'Worker\TrainController@index');
Route::get('/worker/training/index', 'Worker\TrainingController@index');
Route::get('/worker/index', 'Worker\IndexController@index');
Route::any('/worker/working', 'Worker\IndexController@working');
Route::post('/worker/getBigType', 'Worker\IndexController@getBigType');
Route::post('/worker/workModel', 'Worker\IndexController@workModel');
Route::post('/worker/workAbstract', 'Worker\IndexController@workAbstract');
Route::post('/worker/workSingle', 'Worker\IndexController@workSingle');
Route::post('/worker/saveWorking', 'Worker\IndexController@saveWorking');
Route::post('/worker/index/saveApiWorking', 'Worker\IndexController@saveApiWorking');
Route::post('/worker/getCompany', 'Worker\IndexController@getCompany');
Route::post('/worker/exceptionUpdate', 'Worker\IndexController@exceptionUpdate');
Route::get('/worker/addpush', 'Worker\IndexController@addpush');
Route::get('/worker/showpush', 'Worker\IndexController@showpush');
Route::post('/worker/exceptionUpdate', 'Worker\IndexController@exceptionUpdate');
Route::post('/worker/getProvince', 'Worker\IndexController@getProvince');
Route::post('/worker/getCity', 'Worker\IndexController@getCity');
Route::get('/worker/setting/index', 'Worker\SettingController@index');
Route::post('/worker/setting/submit', 'Worker\SettingController@submit');
Route::post('/worker/setting/repass', 'Worker\SettingController@repass');
Route::get('/worker/bill/baike', 'Worker\BillController@baike');
Route::get('/worker/bill/bview', 'Worker\BillController@bview');
Route::get('/worker/bill/error', 'Worker\BillController@error');
Route::get('/worker/bill/eview', 'Worker\BillController@eview');
Route::get('/worker/bill/appeal', 'Worker\BillController@appeal');
Route::get('/worker/setting/index1', 'Worker\SettingController@index1');
Route::post('/worker/bill/feedback', 'Worker\BillController@feedback');
Route::post('/worker/bill/updateBillItem', 'Worker\BillController@updateBillItem');
Route::post('/worker/setting/ajaxindex', 'Worker\SettingController@ajaxindex');
Route::get('/worker/index/setknotty', 'Worker\IndexController@setknotty');
Route::post('/worker/companylib/discompany', 'Worker\CompanyLibController@disableCompany');
Route::get('/worker/setsleep', 'Worker\IndexController@setsleep');
Route::post('/worker/getCitylike', 'Worker\IndexController@getCitylike');


Route::match(['get', 'post'],'/admin/setting/addbilltype', 'Admin\SettingController@addbilltype');
Route::post('/admin/setting/getchildcategory', 'Admin\SettingController@getChildCategory');
Route::get('/admin/index', 'Admin\IndexController@index');
Route::get('/admin/index/summary', 'Admin\IndexController@summary');
Route::get('/admin/index/workerorder', 'Admin\IndexController@workerorder');
Route::get('/admin/index/total', 'Admin\IndexController@total');
Route::get('/admin/check/index', 'Admin\CheckController@index');
Route::post('/admin/check/submit', 'Admin\CheckController@submit');
Route::get('/admin/check/bill', 'Admin\CheckController@bill');
Route::match(['get', 'post'], '/admin/check/setting', 'Admin\CheckController@setting');
Route::match(['get', 'post'], '/admin/check/billSubmit', 'Admin\CheckController@billSubmit');
Route::get('/admin/user/index', 'Admin\UserController@index');
Route::get('/admin/user/edit', 'Admin\UserController@edit');
Route::post('/admin/user/edit', 'Admin\UserController@edit');
Route::get('/admin/user/ajax', 'Admin\UserController@ajax');
Route::get('/admin/user/resetpass', 'Admin\UserController@resetpass');
Route::post('/admin/user/resetpass', 'Admin\UserController@resetpass');
Route::get('/admin/setting/check', 'Admin\SettingController@check');
Route::get('/admin/setting/ajax', 'Admin\SettingController@ajax');
Route::get('/admin/setting/billtype', 'Admin\SettingController@billtype');
Route::get('/admin/setting/billtypeedit', 'Admin\SettingController@billtypeedit');
Route::post('/admin/setting/billtypeedit', 'Admin\SettingController@billtypeedit');
Route::post('/admin/setting/batch', 'Admin\SettingController@batchSetting');
Route::get('/admin/billpicsize/index', 'Admin\BillPicSizeController@index');
Route::post('/admin/billpicsize/getsoncategoty', 'Admin\BillPicSizeController@getSonCategory');
Route::match(['get', 'post'],'/admin/billpicsize/edit', 'Admin\BillPicSizeController@edit');
Route::match(['get', 'post'],'/adminsubmiy/billpicsize/add', 'Admin\BillPicSizeController@add');
Route::post('/admin/billpicsize/checkcategory', 'Admin\BillPicSizeController@checkCategory');
Route::post('/admin/billpicsize/checkbillpiccategory', 'Admin\BillPicSizeController@checkBillPicCategory');
Route::get('/admin/bill/feedback', 'Admin\BillController@feedback');
Route::get('/admin/bill/view', 'Admin\BillController@view');
Route::get('/admin/bill/baike', 'Admin\BillController@baike');
Route::get('/admin/bill/error', 'Admin\BillController@error');
Route::get('/admin/bill/eview', 'Admin\BillController@eview');
Route::get('/admin/bill/errorreset', 'Admin\BillController@errorreset');
Route::get('/admin/bill/eview', 'Admin\BillController@eview');
Route::get('/admin/bill/del', 'Admin\BillController@del');
Route::get('/admin/bill/delFeedback', 'Admin\BillController@delFeedback');
Route::match(['get', 'post'], '/admin/bill/billSubmit', 'Admin\BillController@billSubmit');
Route::get('/admin/bill/working', 'Admin\BillController@working');
Route::post('/admin/bill/saveWorking', 'Admin\BillController@saveWorking');
Route::get('/admin/bill/viewsubmit', 'Admin\BillController@viewsubmit');
Route::get('/admin/bill/baikecheck', 'Admin\BillController@baikecheck');
Route::get('/admin/bill/baikesubmit', 'Admin\BillController@baikesubmit');
Route::post('/admin/bill/baikesubmit', 'Admin\BillController@baikesubmit');
Route::get('/admin/setting/push', 'Admin\SettingController@push');
Route::get('/admin/setting/queue', 'Admin\SettingController@queue');
Route::get('/admin/setting/queueDelete', 'Admin\SettingController@queueDelete');
Route::get('/admin/setting/knotty', 'Admin\SettingController@knotty');
Route::get('/admin/setting/knottyDelete', 'Admin\SettingController@knottyDelete');
Route::get('/admin/setting/knottyNotice', 'Admin\SettingController@knottyNotice');
Route::get('/admin/setting/message', 'Admin\SettingController@message');
Route::get('/admin/setting/messageDelete', 'Admin\SettingController@messageDelete');
Route::get('/admin/setting/messageNotice', 'Admin\SettingController@messageNotice');
Route::get('/admin/setting/deluserworking', 'Admin\SettingController@deluserworking');
Route::get('/admin/companylib/index', 'Admin\CompanylibraryController@index');
Route::get('/admin/companylib/del', 'Admin\CompanylibraryController@del');
Route::get('/admin/companylib/dellog', 'Admin\CompanylibraryController@dellog');
Route::get('/admin/customer/index', 'Admin\CustomerController@index');
Route::post('/admin/customer/priorload', 'Admin\CustomerController@priorload');
Route::get('/admin/customer/delload', 'Admin\CustomerController@delload');
Route::get('/admin/customer/del', 'Admin\CustomerController@del');
Route::get('/admin/setting/recheck', 'Admin\SettingController@recheck');
Route::post('/admin/setting/rechecksubmit', 'Admin\SettingController@rechecksubmit');
Route::post('/admin/setting/apicitysubmit', 'Admin\SettingController@apicitysubmit');
Route::post('/admin/setting/apistatussubmit', 'Admin\SettingController@apistatussubmit');
Route::post('/admin/setting/apigsstatussubmit', 'Admin\SettingController@apigsstatussubmit');
# 题库
Route::get('/admin/train/index', 'Admin\TrainController@index');
Route::get('/admin/train/billList0', 'Admin\TrainController@billList0');
Route::get('/admin/train/billList1', 'Admin\TrainController@billList1');
Route::get('/admin/train/billList2', 'Admin\TrainController@billList2');
Route::get('/admin/train/billList3', 'Admin\TrainController@billList3');
Route::get('/admin/train/billList4', 'Admin\TrainController@billList4');
Route::get('/admin/train/billList5', 'Admin\TrainController@billList5');
Route::get('/admin/train/billList6', 'Admin\TrainController@billList6');
Route::get('/admin/train/untreated', 'Admin\TrainController@untreated');
Route::get('/admin/train/working', 'Admin\TrainController@working');
Route::post('/admin/train/saveTraining', 'Admin\TrainController@saveTraining');
Route::get('/admin/train/adopt', 'Admin\TrainController@adopt');
Route::get('/admin/train/refuse', 'Admin\TrainController@refuse');
Route::get('/admin/export-bill', 'Admin\ExportBillController@index');
Route::post('/admin/export-bill/export', 'Admin\ExportBillController@export');
Route::post('/admin/export-bill/bill-info-category', 'Admin\ExportBillController@getChildCategory');
Route::match(['get', 'post'], '/admin/train/trainSetting', 'Admin\TrainController@trainSetting');
Route::match(['get', 'post'], '/admin/train/examineSetting', 'Admin\TrainController@examineSetting');
Route::post('/admin/train/submit', 'Admin\TrainController@submit');
Route::get('/admin/train/drop', 'Admin\TrainController@drop');
Route::post('/admin/user/editgroup', 'Admin\UserController@editgroup');
Route::post('/admin/user/groupview', 'Admin\UserController@groupview');
Route::get('/admin/user/groupdel', 'Admin\UserController@groupdel');
Route::match(['get', 'post'], '/admin/city/index', 'Admin\CityController@index');
Route::match(['get', 'post'], '/admin/manual/index', 'Admin\TrainingManualController@index');
Route::match(['get', 'post'], '/admin/manual/create', 'Admin\TrainingManualController@create');
Route::match(['get', 'post'], '/admin/manual/update', 'Admin\TrainingManualController@update');
Route::match(['get', 'post'], '/admin/manual/delete', 'Admin\TrainingManualController@delete');

#RBAC
Route::get('/admin/role/list', 'Admin\RoleController@index');
Route::match(['get', 'post'],'/admin/role/add', 'Admin\RoleController@add');
Route::match(['get', 'post'],'/admin/role/edit', 'Admin\RoleController@edit');
Route::match(['get', 'post'],'/admin/role/authorization', 'Admin\RoleController@authorization');
Route::get('/admin/permission/list', 'Admin\PermissionController@index');
Route::match(['get', 'post'],'/admin/permission/add', 'Admin\PermissionController@add');
Route::match(['get', 'post'],'/admin/permission/edit', 'Admin\PermissionController@edit');

Route::post('/api/bill/reportError', 'Api\BillController@reportError');
Route::post('/api/bill/wrong', 'Api\BillController@wrong');
Route::post('/api/daben', 'Api\DabenController@index');


Route::get('/knotty/index/index', 'Knotty\IndexController@index');
Route::get('/knotty/index/working', 'Knotty\IndexController@working');
Route::post('/knotty/index/saveWorking', 'Knotty\IndexController@saveWorking');
Route::get('/knotty/index/ajax', 'Knotty\IndexController@ajax');

/**
 * 培训
 */
Route::get('/worker/train/index', 'Worker\TrainController@index');
Route::get('/worker/train/worker', 'Worker\TrainController@worker');
// 培训记录
Route::get('/worker/trainRecord/', 'Worker\TrainController@trainRecord');
// 查看错题
Route::get('/worker/trainError/', 'Worker\TrainController@trainErrorBill');
Route::get('/worker/train/eview', 'Worker\TrainController@eview');

Route::get('/worker/train/checkstatus', 'Worker\TrainController@checkstatus');
Route::get('/worker/train/checkquestion', 'Worker\TrainController@checkquestion');
Route::post('/worker/train/saveTraining', 'Worker\TrainController@saveTraining');
Route::get('/worker/train/end', 'Worker\TrainController@end');
Route::get('/worker/train/view', 'Worker\TrainController@view');
Route::get('/worker/train/listView', 'Worker\TrainController@listView');
Route::get('/worker/train/errorlist', 'Worker\TrainController@errorlist');
Route::get('/worker/train/errorview', 'Worker\TrainController@errorview');
Route::get('/worker/train/appeal', 'Worker\TrainController@appeal');

Route::get('/worker/training/worker', 'Worker\TrainingController@worker');
Route::post('/worker/training/saveTraining', 'Worker\TrainingController@saveTraining');
Route::get('/worker/training/listView', 'Worker\TrainingController@listView');
Route::get('/worker/training/errorlist', 'Worker\TrainingController@errorlist');
Route::get('/worker/training/errorview', 'Worker\TrainingController@errorview');
Route::get('/worker/training/isNewBill', 'Worker\TrainingController@isNewBill');
Route::get('/worker/training/todayNoLongerRemind', 'Worker\TrainingController@todayNoLongerRemind');
Route::get('/worker/training/appeal', 'Worker\TrainingController@appeal');

Route::post('/worker/train/workModel', 'Worker\TrainController@workModel');
Route::post('/worker/train/workAbstract', 'Worker\TrainController@workAbstract');
Route::post('/worker/train/workSingle', 'Worker\TrainController@workSingle');
/**
 * 银行对账单
 */
Route::get('/worker/bank/statementView', 'Worker\IndexController@statementView');
Route::post('/worker/statementSaveing', 'Worker\IndexController@statementSaveing');
Route::post('/worker/getComAccount', 'Worker\IndexController@getComAccount');


/**
 * 统计
 */
Route::get('/total/service/user', 'Total\ServiceController@user');
Route::get('/total/service/userDay', 'Total\ServiceController@userDay');
Route::get('/total/service/day', 'Total\ServiceController@day');
Route::get('/total/service/timeout', 'Total\ServiceController@timeout');
Route::get('/total/index', 'Total\TotalController@index');
Route::get('/total/user', 'Total\TotalController@user');
Route::get('/total/view', 'Total\TotalController@view');
Route::get('/total/group', 'Total\TotalController@group');
Route::get('/total/sleep', 'Total\TotalController@sleep');
Route::get('/total/sleepshow', 'Total\TotalController@sleepshow');
Route::get('/total/train', 'Total\TotalController@train');
Route::get('/total/trainView', 'Total\TotalController@trainView');
Route::get('/total/training', 'Total\TotalController@training');
Route::get('/total/timeout', 'Total\TotalController@timeout');
Route::get('/total/timeoutView', 'Total\TotalController@timeoutView');
Route::get('/total/billApi', 'Total\TotalController@billApi');
Route::get('/total/billApiView', 'Total\TotalController@billApiView');
Route::get('/total/billIrsApi', 'Total\TotalController@billIrsApi');
Route::get('/total/billIrsApiView', 'Total\TotalController@billIrsApiView');

/**
 * 申诉
 */
Route::get('/admin/appeal/index', 'Admin\AppealController@index');
Route::get('/admin/appeal/view', 'Admin\AppealController@view');
Route::get('/admin/appeal/review', 'Admin\AppealController@review');
Route::get('/admin/appeal/delete', 'Admin\AppealController@delete');
Route::get('/admin/bill/deleteFeedbackLogList', 'Admin\BillController@deleteFeedbackLogList');


/**
 * 弹框
 */
Route::get('/modal/manual/search', 'Modal\TrainingManualController@search');
Route::get('/manual/images', 'Modal\TrainingManualController@images');





//surce票据同步失败处理
Route::get('/admin/billsource/errorlist', 'Admin\BillSourceController@errorlist');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});


Route::get('/billImage/reco','Reco\RecoController@index');
Route::post('/billImage/websubmit','Reco\RecoController@websubmit');
Route::post('/api/ocr/sendbill','Api\OcrController@sendbill');
Route::get('/billImage/views','Reco\RecoController@views');
Route::get('/admin/recocheck/question','Admin\RecoController@question');
Route::post('/admin/recocheck/submit','Admin\RecoController@submit');
Route::post('/billImage/webchecksubmit','Reco\RecoController@webchecksubmit');