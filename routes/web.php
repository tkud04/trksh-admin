<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;

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


Route::get('/', [MainController::class,'getIndex']);
Route::get('kurxml-tr', [MainController::class,'getKURXML']);

//Authentication

Route::get('login', [LoginController::class,'getLogin']);
Route::post('login', [LoginController::class,'postLogin']);
Route::get('register', [LoginController::class,'getRegister']);
Route::post('register', [LoginController::class,'postRegister']);
Route::get('logout', [LoginController::class,'getLogout']);

//Users
Route::get('users', [MainController::class,'getUsers']);
Route::get('user', [MainController::class,'getUser']);
Route::post('user', [MainController::class,'postUser']);
Route::get('edu', [MainController::class,'getManageUserStatus']);

//Settings
Route::get('add-setting', [MainController::class,'getAddSetting']);
Route::post('settings', [MainController::class,'getSettings']);
Route::get('senders', [MainController::class,'getSenders']);
Route::get('add-sender', [MainController::class,'getAddSender']);
Route::post('add-sender', [MainController::class,'postAddSender']);
Route::get('sender', [MainController::class,'getSender']);
Route::post('sender', [MainController::class,'postSender']);
Route::get('remove-sender', [MainController::class,'getRemoveSender']);
Route::post('mark-sender', [MainController::class,'getMarkSender']);

//Transactions
Route::get('transactions', [MainController::class,'getTransactions']);
Route::get('transaction', [MainController::class,'getTransaction']);
Route::post('transaction', [MainController::class,'postTransaction']);
Route::get('add-transaction', [MainController::class,'getAddTransaction']);
Route::post('add-transaction', [MainController::class,'postAddTransaction']);
Route::get('remove-transaction', [MainController::class,'getRemoveTransaction']);


//Accounts
Route::get('accounts', 'MainController@getAccounts');
Route::get('account', 'MainController@getAccount');
Route::post('account', 'MainController@postAccount');
Route::get('add-account', 'MainController@getAddAccount');
Route::post('add-account', 'MainController@postAddAccount');
Route::get('remove-account', 'MainController@getRemoveAccount');

Route::get('accounts', [MainController::class,'getAccounts']);
Route::get('account', [MainController::class,'getAccount']);
Route::post('account', [MainController::class,'postAccount']);
Route::get('add-account', [MainController::class,'getAddAccount']);
Route::post('add-account', [MainController::class,'postAddAccount']);
Route::get('remove-account', [MainController::class,'getRemoveAccount']);

//TZ
Route::get('settings-tz', [MainController::class,'getSettingsTZ']);
Route::post('settings-tz', [MainController::class,'postSettingsTZ']);