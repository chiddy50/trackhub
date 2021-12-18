<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Rider\RiderController;
use App\Http\Controllers\Vehicle\VehicleController;
use App\Http\Controllers\Courier\CourierController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Order\OrderController;

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

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function() {

  // Route::get('/', function () {
  //   return view('dashboards.dashboard');
  // });
  
  Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
  Route::get('/', [DashboardController::class, 'dashboard']);

  // Rider routes
  Route::post('/add-rider', [RiderController::class, 'createRider'])->name('addRider');
  Route::post('/update-rider-information', [RiderController::class, 'updateRiderInformation'])->name('updateRider');
  Route::post('/add-rider-information', [RiderController::class, 'addRiderInformation'])->name('addRiderInformation');
  Route::post('/update-availablity', [RiderController::class, 'updateAvailablity'])->name('updateAvailablity');
  
  Route::get('/add-rider', [RiderController::class, 'addRider'])->name('rider.add');
  Route::get('/edit-rider/{id}', [RiderController::class, 'editRider'])->name('editRider');
  Route::get('/rider-list', [RiderController::class, 'riderList'])->name('rider.list');
  Route::get('/rider-info/{id}', [RiderController::class, 'riderInfo'])->name('rider.info');
  Route::delete('/delete-rider/{id}', [RiderController::class, 'destroy'])->name('rider.destroy');

  // Vehicle routes
  Route::get('/vehicle-list', [VehicleController::class, 'viewVehicleTypes'])->name('vehicle.list');
  Route::post('/add-vehicle', [VehicleController::class, 'addVehicle'])->name('addVehicle');
  
  // Courier routes
  Route::post('/add-courier', [CourierController::class, 'createCourier'])->name('create.courier');
  Route::get('/add-courier', [CourierController::class, 'addCourier'])->name('add.courier');
  Route::post('/upload-cac-document', [CourierController::class, 'uploadCacDocument'])->name('upload.cac');
  Route::post('/upload-other-cac-documents', [CourierController::class, 'uploadCacOtherDocuments'])->name('upload.othercac');
  
  Route::get('/orders', [OrderController::class, 'viewOrders'])->name('view.orders');

  // User profile routes
  Route::get('user/profile', [HomeController::class, 'userprofile'])->name('userdetails.userprofile');
  Route::post('user-profile-update', [UserController::class, 'updateUserProfile'])->name('user.updateProfile');
  
});

  // Uploads route
  Route::post('/upload-store', [DashboardController::class, 'upload'])->name('upload.store');


// Route::get('/test', function () { 
//   $route = 'dashboard';
//   $requestUrl = request()->is($route);
//   dd($requestUrl);

// })->name('test');








// Dashboard Routes
  // Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
  // Route::get('/page-campaigns', [HomeController::class, 'campaigns'])->name('campaigns');
  // Route::get('/create-page-campaigns', [HomeController::class, 'createcampaigns'])->name('createcampaigns');
  // Route::get('/page-contacts', [HomeController::class, 'contacts'])->name('contacts1');
  // Route::get('/page-forms', [HomeController::class, 'forms'])->name('forms');
  // Route::get('/page-activity', [HomeController::class, 'activity'])->name('activity');
  // Route::get('/page-integration', [HomeController::class, 'integration'])->name('integration');
  // Route::get('/page-templates', [HomeController::class, 'templates'])->name('templates');
  // Route::get('/page-create', [HomeController::class, 'create'])->name('create');
  // Route::get('/page-createtemplate', [HomeController::class, 'createtemplate'])->name('createtemplate');
  

  

  // //setting
  // Route::get('/setting', [HomeController::class, 'setting'])->name('setting');
  // Route::get('/account', [HomeController::class, 'account'])->name('account');

  //App Details Pages Routs
  Route::group(['prefix' => 'app'], function() {

    //Userdetail Page Routs

    
    Route::get('user/add', [HomeController::class, 'useradd'])->name('userdetails.useradd');
    Route::get('user/userlist', [HomeController::class, 'userList'])->name('userdetails.userlist');
    Route::get('user/user-profile-edit', [HomeController::class, 'userProfileEdit'])->name('userdetails.userprofileedit');
  });

  //Policy Page Routs
  Route::group(['prefix' => ''], function() {
    Route::get('privacy-policy', [HomeController::class, 'PrivacyPolicy'])->name('userdetail.privacyPolicy');
    Route::get('terms-of-service', [HomeController::class, 'TermsOfUse'])->name('userdetail.termsofuse');
  });

// //UI Pages Routs
//   Route::group(['prefix' => 'ui'], function() {
//     Route::get('avatars', [HomeController::class, 'UiAvatars'])->name('ui.avatars');
//     Route::get('alerts', [HomeController::class, 'UiAlerts'])->name('ui.alerts');
//     Route::get('badges', [HomeController::class, 'UiBadges'])->name('ui.badges');
//     Route::get('breadcrumb', [HomeController::class, 'UiBreadcrumb'])->name('ui.breadcrumb');
//     Route::get('buttons', [HomeController::class, 'UiButtons'])->name('ui.buttons');
//     Route::get('buttongroup', [HomeController::class, 'UiButtongroup'])->name('ui.buttongroup');
//     Route::get('boxshadows', [HomeController::class, 'UiBoxshadows'])->name('ui.boxshadows');
//     Route::get('colors', [HomeController::class, 'UiColors'])->name('ui.colors');
//     Route::get('cards', [HomeController::class, 'UiCards'])->name('ui.cards');
//     Route::get('carousel', [HomeController::class, 'UiCarousel'])->name('ui.carousel');
//     Route::get('grid', [HomeController::class, 'UiGrid'])->name('ui.grid');
//     Route::get('helperclass', [HomeController::class, 'UiHelperClass'])->name('ui.helperclass');
//     Route::get('images', [HomeController::class, 'UiImages'])->name('ui.images');
//     Route::get('listgroup', [HomeController::class, 'UiListgroup'])->name('ui.listgroup');
//     Route::get('media', [HomeController::class, 'UiMedia'])->name('ui.media');
//     Route::get('modal', [HomeController::class, 'UiModal'])->name('ui.modal');
//     Route::get('notification', [HomeController::class, 'UiNotification'])->name('ui.notification');
//     Route::get('pagination', [HomeController::class, 'UiPagination'])->name('ui.pagination');
//     Route::get('popovers', [HomeController::class, 'UiPopovers'])->name('ui.popovers');
//     Route::get('progressbars', [HomeController::class, 'UiProgressbars'])->name('ui.progressbars');
//     Route::get('typography', [HomeController::class, 'UiTypography'])->name('ui.typography');
//     Route::get('tabs', [HomeController::class, 'UiTabs'])->name('ui.tabs');
//     Route::get('tooltips', [HomeController::class, 'UiTooltips'])->name('ui.tooltips');
//     Route::get('video', [HomeController::class, 'UiVideo'])->name('ui.video');
//   });

// //Forms Pages Routs
//   Route::group(['prefix' => 'forms'], function() {
//     Route::get('layout', [HomeController::class, 'FormsLayout'])->name('forms.layout');
//     Route::get('inputgroup', [HomeController::class, 'FormsInputgroup'])->name('forms.inputgroup');
//     Route::get('validation', [HomeController::class, 'FormsValidation'])->name('forms.validation');
//     Route::get('switch', [HomeController::class, 'FormsSwitch'])->name('forms.switch');
//     Route::get('checkbox', [HomeController::class, 'FormsCheckbox'])->name('forms.checkbox');
//     Route::get('radio', [HomeController::class, 'FormsRadio'])->name('forms.radio');
//     Route::get('textarea', [HomeController::class, 'FormsTextarea'])->name('forms.textarea');
//   });



//Auth pages Routs
  Route::group(['prefix' => 'auth'], function() {
    Route::get('login', [HomeController::class, 'authLogin'])->name('auth.login');
    Route::get('register', [HomeController::class, 'authRegister'])->name('auth.register');
    // Route::post('register', [UserController::class, 'registerUser'])->name('register_user');
    Route::get('recover-password', [HomeController::class, 'authRecoverPassword'])->name('auth.recover-password');
    Route::get('confirm-email', [HomeController::class, 'authConfirmEmail'])->name('auth.confirm-email');
    Route::get('lock-screen', [HomeController::class, 'authlockScreen'])->name('auth.lock-screen');
  });
// //Table Page Routs
//   Route::group(['prefix' => 'table'], function() {
//    Route::get('basics', [HomeController::class, 'tableBasics'])->name('table.tablebasics');
//    Route::get('data', [HomeController::class, 'tableData'])->name('table.tabledata');
//    Route::get('edittable', [HomeController::class, 'tableEdit'])->name('table.tableedit');
//    Route::get('tree', [HomeController::class, 'tableTree'])->name('table.tabletree');
//   });

  // //Pricing Page Routs
  // Route::group(['prefix' => 'pricing'], function() {
  //   Route::get('pricing1', [HomeController::class, 'Pricing1'])->name('pricing.pricing1');
  //   Route::get('pricing2', [HomeController::class, 'Pricing2'])->name('pricing.pricing2');
  // });

  //Error Page Route
  Route::group(['prefix' => 'error'], function() {
    Route::get('error404', [HomeController::class, 'Error404'])->name('pageError.error404');
    Route::get('error500', [HomeController::class, 'Error500'])->name('pageError.error500');
  });

  // //Extra Page Routs
  // Route::group(['prefix' => 'pages'], function() {
  //   Route::get('timeline', [HomeController::class, 'TimeLine'])->name('timeline');
  //   Route::get('blankpage', [HomeController::class, 'BlankPages'])->name('blankpage');
  //   Route::get('maintenance', [HomeController::class, 'Maintenance'])->name('maintenance');
  // });

  // //invoice
  // Route::get('/invoice', [HomeController::class, 'invoice'])->name('invoice');

   
