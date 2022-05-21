<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\JoinUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberRequestController;

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
    return view('frontend.pages.index');
});

Route::get('home',[PageController::class, 'goToHomePage'])->name('home');
Route::get('about',[PageController::class, 'goToAboutPage'])->name('about');
Route::get('contact',[PageController::class, 'goToContactPage'])->name('contact');
Route::get('donate',[PageController::class, 'goToDonatePage'])->name('donate');
Route::get('services',[PageController::class, 'goToServicesPage'])->name('services');
Route::get('gallery',[PageController::class, 'goToGalleryPage'])->name('gallery');
Route::get('joinus',[PageController::class, 'goToJoinUsPage'])->name('joinus');
Route::get('joinus1',[PageController::class, 'goToJoinUsPage1'])->name('joinus1')->middleware('protectNextJoinPage');


Route::post('message',[MessageController::class, 'saveVisitorMessage'])->name('message');
Route::post('save-joinus',[JoinUsController::class, 'saveJoinUs'])->name('save.joinus');
Route::post('save-joinus1',[JoinUsController::class, 'saveJoinUs1'])->name('save.joinus1');

Route::get('signin',[AdminController::class, 'goToAdminSignInPage'])->name('signin');
Route::post('login',[AdminController::class, 'adminLogIn'])->name('login');
Route::get('logout',[AdminController::class, 'adminLogOut'])->name('logout');



Route::group(['middleware'=> ['checkAuthorization']], function(){

    Route::get('show-comments',[AdminController::class, 'showMessages'])->name('admin');
    Route::get('delete-message/{id}',[MessageController::class, 'deleteMessages'])->name('delete.message');
    Route::get('show-requests',[MemberRequestController::class, 'showMemberRequests'])->name('requests');
    Route::get('show-members',[MemberRequestController::class, 'showApprovedMembersList'])->name('members');
    Route::get('accept-request/{nid}',[MemberRequestController::class, 'acceptMemberRequest'])->name('accept.request');
    Route::get('delete-request/{nid}',[MemberRequestController::class, 'deleteMemberRequest'])->name('delete.request');
});