<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::view("/",'home');
route::view("about",'about');

route::view("services",'service/services');
route::view("cross-border-service",'service/cross-border-service');
route::view("E2E-service",'service/E2E-service');
route::view("express-service",'service/express-service');
route::view("freight-service",'service/freight-service');

route::view("partners",'partner/partners');
route::view("lastmileagent",'partner/lastmileagent');
route::view("franchisee",'partner/franchisee');
route::view("dropatstore",'partner/dropatstore');

route::view("careers",'careers');

route::view("support",'support/support');
route::view("other",'support/other');
route::view("return-related",'support/return-related');
route::view("complaints",'support/complaints');
route::view("shipment-related",'support/shipment-related');
route::view("shipwith-us",'support/shipwith-us');

route::view("login",'login/login');
route::view("/signup",'login/signup');
route::view("createpassword",'login/createpassword');
route::view("enterOTP",'login/enterOTP');
route::view("forgotpassword",'login/forgotpassword');
route::view("updateemailOTP",'login/updateemailOTP');
route::view("updateemail",'login/updateemail');
route::view("updatepassword",'login/updatepassword');


route::view("admin-home",'admin/admin-home');
route::view("admin-profile",'admin/admin-profile');
route::view("logout",'index');

route::view("admin-deliveryboy-main",'admin/d-boy/admin-deliveryboy-main');
route::view("admin-deliveryboy-details",'admin/d-boy/admin-deliveryboy-details');
route::view("admin-deliveryboy-complaints",'admin/d-boy/admin-deliveryboy-complaints');

route::view("admin-manager-main",'admin/manager/admin-manager-main');
route::view("admin-manager-details",'admin/manager/admin-manager-details');
route::view("add-new-manager",'admin/manager/add-new-manager');

route::view("admin-user-main",'admin/user/admin-user-main');
route::view("admin-user-complaints",'admin/user/admin-user-complaints');
route::view("admin-user-details",'admin/user/admin-user-details');

route::view("admin-order-main",'admin/orders/admin-order-main');
route::view("admin-current-order",'admin/orders/admin-current-order');
route::view("admin-completed-order",'admin/orders/admin-completed-order');

route::view("manager-home",'manager/manager-home');
route::view("manager-profile",'manager/manager-profile');
route::view("manager-order-main",'manager/managerorder/manager-order-main');
route::view("manager-complete-order",'manager/managerorder/manager-complete-order');
route::view("manager-current-order",'manager/managerorder/manager-current-order');
route::view("manager-order-update-status",'manager/managerorder/manager-order-update-status');

route::view("manager-deliveryboy-main",'manager/manager-dboy/manager-deliveryboy-main');
route::view("add-new-deliveryboy",'manager/manager-dboy/add-new-deliveryboy');
route::view("manager-deliveryboy-details",'manager/manager-dboy/manager-deliveryboy-details');

route::view("user-home",'user/user-home');
route::view("user-profile",'user/user-profile');

route::view("user-completed-order",'user/userorder/user-completed-order');
route::view("user-current-order",'user/userorder/user-current-order');
route::view("user-order-main",'user/userorder/user-order-main');

route::view("user-add-complaint",'user/usercomplaint/user-add-complaint');
route::view("user-complaint-main",'user/usercomplaint/user-complaint-main');
route::view("user-view-complaint",'user/usercomplaint/user-view-complaint');

route::view("deliveryboy-home",'deliveryboy/deliveryboy-home');
route::view("deliveryboy-profile",'deliveryboy/deliveryboy-profile');

route::view("deliveryboy-order",'deliveryboy/dboy-order/deliveryboy-order');

route::view("deliveryboy-add-complaint",'deliveryboy/dboy-complaint/deliveryboy-add-complaint');
route::view("deliveryboy-complaint-main",'deliveryboy/dboy-complaint/deliveryboy-complaint-main');
route::view("deliveryboy-view-complaint",'deliveryboy/dboy-complaint/deliveryboy-view-complaint');

route::view("tracking",'tracking/tracking');
route::view("index",'tracking/index');





