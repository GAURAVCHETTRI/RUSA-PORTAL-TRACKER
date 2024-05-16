<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'IndexController@index')->name('home');

Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => true, // Password Reset Routes...
  'verify' => true, // Email Verification Routes...
]);

Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);

Route::middleware(['auth', 'twofactor'])->prefix('admin')->group(function () {
  // Test Route
  Route::get('/test', "TestController@test")->name('admin.test');

  // For Settings
  Route::get('/settings/edit_profile', "SettingController@edit_profile")->name('admin.settings.edit_profile');

  // For Dashboard
  Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');

  // For Module
  Route::get('/modules', 'Admin\ModuleController@index')->name('admin.modules.index');
  Route::get('/modules/add', "Admin\ModuleController@create")->name('admin.modules.create');
  Route::get('/modules/edit', "Admin\ModuleController@edit")->name('admin.modules.edit');
  Route::post('/modules/store', "Admin\ModuleController@store")->name('admin.modules.store');
  Route::post('/modules/update', "Admin\ModuleController@update")->name('admin.modules.update');
  Route::get('/modules/ajax', "Admin\ModuleController@ajax")->name('admin.modules.ajax');
  Route::post('/modules/delete', "Admin\ModuleController@delete")->name('admin.modules.delete');

  // For Users
  Route::get('/users', 'UserController@index')->name('admin.users.index');
  Route::get('/users/add', "UserController@create")->name('admin.users.create');
  Route::get('/users/edit', "UserController@edit")->name('admin.users.edit');
  Route::post('/users/store', "UserController@store")->name('admin.users.store');
  Route::post('/users/update', "UserController@update")->name('admin.users.update');
  Route::get('/users/ajax', "UserController@ajax")->name('admin.users.ajax');
  Route::post('/users/delete', "UserController@delete")->name('admin.users.delete');

  // For Roles
  Route::get('/roles', 'RoleController@index')->name('admin.roles.index');
  Route::get('/roles/add', "RoleController@create")->name('admin.roles.create');
  Route::get('/roles/edit', "RoleController@edit")->name('admin.roles.edit');
  Route::post('/roles/store', "RoleController@store")->name('admin.roles.store');
  Route::post('/roles/update', "RoleController@update")->name('admin.roles.update');
  Route::get('/roles/ajax', "RoleController@ajax")->name('admin.roles.ajax');
  Route::post('/roles/delete', "RoleController@delete")->name('admin.roles.delete');

  // For Page
  Route::get('/pages', 'Admin\PageController@index')->name('admin.pages.index');
  Route::get('/pages/add', "Admin\PageController@create")->name('admin.pages.create');
  Route::get('/pages/edit', "Admin\PageController@edit")->name('admin.pages.edit');
  Route::post('/pages/store', "Admin\PageController@store")->name('admin.pages.store');
  Route::post('/pages/update', "Admin\PageController@update")->name('admin.pages.update');
  Route::get('/pages/ajax', "Admin\PageController@ajax")->name('admin.pages.ajax');
  Route::post('/pages/delete', "Admin\PageController@delete")->name('admin.pages.delete');

  // For Settings
  Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings.index');
  Route::get('/settings/add', "Admin\SettingController@create")->name('admin.settings.create');
  Route::get('/settings/edit', "Admin\SettingController@edit")->name('admin.settings.edit');
  Route::post('/settings/store', "Admin\SettingController@store")->name('admin.settings.store');
  Route::post('/settings/update', "Admin\SettingController@update")->name('admin.settings.update');
  Route::get('/settings/ajax', "Admin\SettingController@ajax")->name('admin.settings.ajax');
  Route::post('/settings/delete', "Admin\SettingController@delete")->name('admin.settings.delete');
  // For MDC
  Route::get('MDC/', 'Admin\MDCController@index')->name('admin.MDC.index');
  Route::get('MDC/add', 'Admin\MDCController@create')->name('admin.MDC.create');
  Route::get('MDC/edit', 'Admin\MDCController@edit')->name('admin.MDC.edit');
  Route::post('MDC/store', 'Admin\MDCController@store')->name('admin.MDC.store');
  Route::post('MDC/update', 'Admin\MDCController@update')->name('admin.MDC.update');
  Route::get('MDC/ajax', 'Admin\MDCController@ajax')->name('admin.MDC.ajax');
  Route::post('MDC/delete', 'Admin\MDCController@delete')->name('admin.MDC.delete');
  // For Professional College
  Route::get('Professional_college/', 'Admin\ProfessionalCollegeController@index')->name('admin.Professional_college.index');
  Route::get('Professional_college/add', 'Admin\ProfessionalCollegeController@create')->name('admin.Professional_college.create');
  Route::get('Professional_college/edit', 'Admin\ProfessionalCollegeController@edit')->name('admin.Professional_college.edit');
  Route::post('Professional_college/store', 'Admin\ProfessionalCollegeController@store')->name('admin.Professional_college.store');
  Route::post('Professional_college/update', 'Admin\ProfessionalCollegeController@update')->name('admin.Professional_college.update');
  Route::get('Professional_college/ajax', 'Admin\ProfessionalCollegeController@ajax')->name('admin.Professional_college.ajax');
  Route::post('Professional_college/delete', 'Admin\ProfessionalCollegeController@delete')->name('admin.Professional_college.delete');
  // For Girls Hostel
  Route::get('Girls_Hostel/', 'Admin\GirlsHostelController@index')->name('admin.Girls_Hostel.index');
  Route::get('Girls_Hostel/add', 'Admin\GirlsHostelController@create')->name('admin.Girls_Hostel.create');
  Route::get('Girls_Hostel/edit', 'Admin\GirlsHostelController@edit')->name('admin.Girls_Hostel.edit');
  Route::post('Girls_Hostel/store', 'Admin\GirlsHostelController@store')->name('admin.Girls_Hostel.store');
  Route::post('Girls_Hostel/update', 'Admin\GirlsHostelController@update')->name('admin.Girls_Hostel.update');
  Route::get('Girls_Hostel/ajax', 'Admin\GirlsHostelController@ajax')->name('admin.Girls_Hostel.ajax');
  Route::post('Girls_Hostel/delete', 'Admin\GirlsHostelController@delete')->name('admin.Girls_Hostel.delete');
});