<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/add-member',[MemberController::class,'addMember'])->name('add-member');
Route::get('/add-member-two',[MemberController::class,'addMemberTwo'])->name('add-member-two');

Route::get('/get-all-roles-by-member',[MemberController::class,'getAllRolesByMember'])->name('get-all-roles-by-member');
Route::get('/get-all-members-by-role',[MemberController::class,'getAllMembersByRole'])->name('get-all-members-by-role');

Route::get('/add-roles',[MemberController::class,'addRoles'])->name('add-roles');