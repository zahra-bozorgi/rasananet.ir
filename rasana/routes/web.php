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


Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





/*
|--------------------------------------------------------------------------
| Main Routes
|--------------------------------------------------------------------------
*/





/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix( 'admin' )->group( function () {
    Route::get('/', function () {  return view('admin.index');  } )->name('admin-home');
    Route::get('/site-settings', function () {  return view('admin.site-settings');  } )->name('settings');
    Route::get('/tickets-table-admin', function () {  return view('admin.tickets-table-admin');  } )->name('tickets-table-admin');
    Route::get('/view-ticket', function () {  return view('admin.view-ticket');  } )->name('view-ticket');
    Route::get('/managers', function () {  return view('admin.managers');  } )->name('managers');
    Route::get('/user-management', function () {  return view('admin.user-management');  } )->name('user-management');
    Route::get('/page-profile', function () {  return view('admin.page-profile');  } )->name('page-profile');
    Route::get('/package-management', function () {  return view('admin.package-management');  } )->name('package-management');
    Route::get('/financial-management', function () {  return view('admin.financial-management');  } )->name('financial-management');
    Route::get('/entry_exit_logs', function () {  return view('admin.entry_exit_logs');  } )->name('entry_exit_logs');
    Route::get('/common_questions', function () {  return view('admin.common_questions');  } )->name('common_questions_admin');
    Route::get('/login', function () {  return view('auth.login');  } )->name('login');



} );


/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
*/

Route::prefix( 'user' )->group( function () {
    Route::get('/', function () {  return view('user.index');  } )->name('user-home');
    Route::get('/tickets-table', function () {  return view('user.tickets-table');  } )->name('tickets_table');
    Route::get('/view-ticket-panel', function () {  return view('user.view-ticket-panel');  } )->name('view-ticket-panel');
    Route::get('/transactions', function () {  return view('user.transactions');  } )->name('transactions');
    Route::get('/notifications-panel', function () {  return view('user.notifications-panel');  } )->name('notifications-panel');
    Route::get('/edit_profile', function () {  return view('user.edit_profile');  } )->name('edit_profile');
    Route::get('/common_questions', function () {  return view('user.common_questions');  } )->name('common_questions');
    Route::get('/view_token', function () {  return view('user.view_token');  } )->name('view_token');
    Route::get('/wallet', function () {  return view('user.wallet');  } )->name('wallet');

} );





