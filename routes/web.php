<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\orderController;
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

route::view("login",'login/login')->middleware('guest');
route::view("/signup",'login/signup')->middleware('guest');
route::post("/signup",[AuthController::class, 'signup'])->name('signup');
route::post("/login",[AuthController::class, 'login'])->name('login');
//route::post("/login",[AuthController::class, 'adminLogin'])->name('login');
//route::post("/login",[AuthController::class, 'managerLogin'])->name('login');
//route::post("/login",[AuthController::class, 'deliveryBoyLogin'])->name('login');



route::view("createpassword",'login/createpassword');
route::view("enterOTP",'login/enterOTP');
route::view("forgotpassword",'login/forgotpassword');
route::post("/forgot-password",[AuthController::class, 'forgotPassword'])->name('forgot.password');
//route::post("/forgot-password",[AuthController::class, 'forgotAdminPassword'])->name('forgot.password');
//route::post("/forgot-password",[AuthController::class, 'forgotManagerPassword'])->name('forgot.password');
//route::post("/forgot-password",[AuthController::class, 'forgotDeliveryBoyPassword'])->name('forgot.password');



route::view("updateemail",'login/updateemail');
route::post("/update-email-otp",[AuthController::class, 'updateEmailOtp'])->name('update-email-otp');
//route::post("/update-email-otp",[AuthController::class, 'updateAdminEmailOtp'])->name('update-email-otp');
//route::post("/update-email-otp",[AuthController::class, 'updateManagerEmailOtp'])->name('update-email-otp');
//route::post("/update-email-otp",[AuthController::class, 'updateDeliveryBoyEmailOtp'])->name('update-email-otp');



//route::view("updateemailOTP",'login/updateemailOTP');
route::post("/update-email",[AuthController::class, 'updateEmail'])->name('update-email');
//route::post("/update-email",[AuthController::class, 'updateAdminEmail'])->name('update-email');
//route::post("/update-email",[AuthController::class, 'updateManagerEmail'])->name('update-email');
//route::post("/update-email",[AuthController::class, 'updateDeliveryBoyEmail'])->name('update-email');



route::view("updatepassword",'login/updatepassword');
route::post("update-password",[AuthController::class, 'updatePassword'])->name('update.password');
//route::post("update-password",[AuthController::class, 'updateAdminPassword'])->name('update.password');
//route::post("update-password",[AuthController::class, 'updateManagerPassword'])->name('update.password');
//route::post("update-password",[AuthController::class, 'updateDeliveryBoyPassword'])->name('update.password');



route::post("reset-password",[AuthController::class, 'resetPassword'])->name('reset-password');
//route::post("reset-password",[AuthController::class, 'resetAdminPassword'])->name('reset-password');
//route::post("reset-password",[AuthController::class, 'resetManagerPassword'])->name('reset-password');
//route::post("reset-password",[AuthController::class, 'resetDeliveryBoyPassword'])->name('reset-password');



route::post("post-reset-password",[AuthController::class, 'postResetPassword'])->name('post-reset-password');
//route::post("post-reset-password",[AuthController::class, 'postResetAdminPassword'])->name('post-reset-password');
//route::post("post-reset-password",[AuthController::class, 'postResetManagerPassword'])->name('post-reset-password');
//route::post("post-reset-password",[AuthController::class, 'postResetDeliveryBoyPassword'])->name('post-reset-password');



route::get("/logout",[AuthController::class, 'logout'])->name('logout');

route::view("manager-home",'manager/manager-home');
route::view("manager-profile",'manager/manager-profile');
route::view("manager-order-main",'manager/managerorder/manager-order-main');
route::view("manager-complete-order",'manager/managerorder/manager-complete-order');
route::get("/manager-complete-order",[orderController::class,'showManagerCompleteOrder'])->name('manager-complete-order');
route::view("manager-current-order",'manager/managerorder/manager-current-order');
route::get("/manager-current-order",[orderController::class,'showManagerCurrentOrder'])->name('manager-current-order');

//route::post("manager-order-update-status",'manager/managerorder/manager-order-update-status');
route::get("manager-order-update-status/{id}",[orderController::class, 'manageOrderStatus'])->name('manager-order-update-status');
route::post("update-order-status",[orderController::class, 'updateOrderStatus'])->name('update.status');

route::view("manager-deliveryboy-main",'manager/manager-dboy/manager-deliveryboy-main');
route::view("add-new-deliveryboy",'manager/manager-dboy/add-new-deliveryboy');
route::post("add-new-deliveryboy",[AuthController::class, 'addDboy'])->name('add-new-deliveryboy');
route::view("manager-deliveryboy-details",'manager/manager-dboy/manager-deliveryboy-details');
route::get("/manager-deliveryboy-details",[AuthController::class,'getDboyData'])->name('manager-deliveryboy-details');
route::get("/export_DboyDetails_pdf",[AuthController::class,'exportDboyDetails'])->name('export_DboyDetails_pdf');

Route::group(['middleware' => ['auth']], function () {

    route::view("admin-user-main",'admin/user/admin-user-main');
    route::view("admin-user-complaints",'admin/user/admin-user-complaints');
    route::get("/admin-user-complaints",[ComplaintController::class,'showUserComplaint'])->name('admin-user-complaints');
    route::get("/export_usercomplaint_pdf",[ComplaintController::class,'exportUserComplaint'])->name('export_usercomplaint_pdf');

    route::get("/admin-user-details",[AuthController::class,'getUserData'])->name('admin-user-details');
    route::get("/export_user_pdf",[AuthController::class,'exportUserDetails'])->name('export_user_pdf');



    route::view("admin-order-main",'admin/orders/admin-order-main');
    route::view("admin-current-order",'admin/orders/admin-current-order');
    route::get("/admin-current-order",[orderController::class,'showOrder'])->name('admin-current-order');
    route::get("/export_CurrentOrder_pdf",[orderController::class,'exportCurrentOrderDetails'])->name('export_CurrentOrder_pdf');

    route::view("admin-completed-order",'admin/orders/admin-completed-order');
    route::get("/admin-completed-order",[orderController::class,'showCompleteOrder'])->name('admin-completed-order');
    route::get("/export_CompleteOrder_pdf",[orderController::class,'exportCompleteOrderDetails'])->name('export_CompleteOrder_pdf');

    route::view("admin-manager-main",'admin/manager/admin-manager-main');
    route::get("/admin-manager-details",[AuthController::class,'getManagerData'])->name('admin-manager-details');
    route::view("add-new-manager",'admin/manager/add-new-manager');
    route::post("add-new-manager",[AuthController::class, 'addManager'])->name('add-new-manager');

    route::get("/export_Manager_pdf",[AuthController::class,'exportManagerDetails'])->name('export_Manager_pdf');
    // route::view("admin-home",'admin/admin-home')->name('admin.home');
    route::view("admin-profile",'admin/admin-profile');
    route::get('admin-home',function(){
        return view("admin.admin-home");
    })->name('admin-home');
    route::view("admin-deliveryboy-main",'admin/d-boy/admin-deliveryboy-main');
    route::get("/admin-deliveryboy-details",[AuthController::class,'getDeliveryBoyData'])->name('admin-deliveryboy-details');
    route::view("admin-deliveryboy-complaints",'admin/d-boy/admin-deliveryboy-complaints');
    route::get("/admin-deliveryboy-complaints",[ComplaintController::class,'showDboyComplaint'])->name('admin-deliveryboy-complaints');
    route::get("/export_dboycomplaint_pdf",[ComplaintController::class,'exportDboyComplaint'])->name('export_dboycomplaint_pdf');

    route::get("/export_Deliveryboy_pdf",[AuthController::class,'exportDeliveryBoyrDetails'])->name('export_Deliveryboy_pdf');

});

Route::group(['middleware' => ['auth']], function () {
    route::view("user-home",'user/user-home')->name('user.home');
    route::view("user-profile",'user/user-profile');
});

route::get("/deleteUserData/{id}",[AuthController::class,'deleteUserData']);
route::get("/deleteManagerData/{id}",[AuthController::class,'deleteManagerData']);
route::get("/deleteDeliveryBoyData/{id}",[AuthController::class,'deleteDeliveryBoyData']);

route::get("/deleteUserComplaint/{id}",[ComplaintController::class,'deleteUserComplaint']);
route::get("/deleteDboyComplaint/{id}",[ComplaintController::class,'deleteDboyComplaint']);

route::get("/deleteAdminOrder/{id}",[orderController::class,'deleteAdminOrder']);
route::get("/deleteCompleteOrder/{id}",[orderController::class,'deleteCompleteOrder']);

route::get("/deleteDboyData/{id}",[AuthController::class,'deleteDboyData']);




route::view("user-completed-order",'user/userorder/user-completed-order');
route::view("user-current-order",'user/userorder/user-current-order');
route::view("user-order-main",'user/userorder/user-order-main');

route::view("user-add-complaint",'user/usercomplaint/user-add-complaint');
route::post("user-add-complaint",[ComplaintController::class, 'storeUser'])->name('user-add-complaint');
route::view("user-complaint-main",'user/usercomplaint/user-complaint-main');
route::get("/user-view-complaint",[ComplaintController::class,'showUser'])->name('user-view-complaint');


route::view("deliveryboy-home",'deliveryboy/deliveryboy-home');
route::view("deliveryboy-profile",'deliveryboy/deliveryboy-profile');

route::get("deliveryboy-order",[orderController::class, 'showDboyCurrentOrder']);

route::view("deliveryboy-add-complaint",'deliveryboy/dboy-complaint/deliveryboy-add-complaint');
route::post("deliveryboy-add-complaint",[ComplaintController::class, 'store'])->name('deliveryboy-add-complaint');
route::view("deliveryboy-complaint-main",'deliveryboy/dboy-complaint/deliveryboy-complaint-main');
route::get("/deliveryboy-view-complaint",[ComplaintController::class,'showDboy'])->name('deliveryboy-view-complaint');


//route::view("tracking",'tracking/tracking');
route::post("tracking",[orderController::class, 'trackOrder'])->name('tracking');
route::view("index",'tracking/index');





