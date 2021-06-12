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

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');

Route::group(['middleware' => 'prevent-back-history'], function () {
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/parties/add', [App\Http\Controllers\PartyController::class, 'PartyForm'])->name('AddPartyPage');
    Route::post('/parties/add', [App\Http\Controllers\PartyController::class, 'AddParty'])->name('AddParty');
    Route::get('/parties/all', [App\Http\Controllers\PartyController::class, 'ViewParties'])->name('ViewParties');

    Route::get('/members/add', [App\Http\Controllers\MemberController::class, 'MemberForm'])->name('MemberForm');
    Route::post('/members/add', [App\Http\Controllers\MemberController::class, 'AddMember'])->name('AddMember');
    Route::get('/members/view', [App\Http\Controllers\MemberController::class, 'ViewMember'])->name('ViewMember');
    Route::get('/members/delete', [App\Http\Controllers\MemberController::class, 'DeleteMember'])->name('DeleteMember');
    Route::get('/members/edit', [App\Http\Controllers\MemberController::class, 'MemberEditForm'])->name('MemberEditForm');
    Route::post('/members/edit', [App\Http\Controllers\MemberController::class, 'EditMember'])->name('EditMember');
});
