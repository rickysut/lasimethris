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
    return redirect('/login');
});

Auth::routes();

// ==================== Admin user ==================== //
Route::namespace('App\Http\Controllers')->middleware(['auth', 'user-access:admin'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/admin/home', 'index')->name('admin.home');
        //add another route for HomeController for this usertype
    });
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard/data', 'index')->name('admin.dashboard.data');
        Route::get('/admin/dashboard/peta', 'peta_admin')->name('admin.dashboard.peta');
        //add another route for HomeController for this usertype
    });
    Route::controller(FeedsController::class)->group(function () {
        Route::get('/feeds', 'index')->name('feeds');
        Route::get('/feeds/create', 'create')->name('feeds.create');
        Route::get('/feeds/read', 'read')->name('feeds.read');
        Route::get('/feeds/show', 'show')->name('feeds.show');
        Route::get('/feeds/update', 'update')->name('feeds.update');
        //add another route for this controller
    });
    Route::controller(MessengerController::class)->group(function () {
        Route::get('/messenger', 'index')->name('messenger');
        Route::get('/messenger/create', 'create')->name('messenger.create');
        Route::get('/messenger/read', 'read')->name('messenger.read');
        Route::get('/messenger/inbox', 'inbox')->name('messenger.inbox');
        Route::get('/messenger/outbox', 'outbox')->name('messenger.outbox');
        Route::get('/messenger/trash', 'trash')->name('messenger.trash');
        //add another route for this controller
    });
    Route::controller(PermissionsController::class)->group(function () {
        Route::get('/admin/manage/permissions', 'index')->name('admin.permissions');
        Route::get('/admin/manage/permissions/create', 'index')->name('admin.permissions.create');
        Route::get('/admin/manage/permissions/show', 'index')->name('admin.permissions.show');
        //add another route for this controller
    });
    Route::controller(RolesController::class)->group(function () {
        Route::get('/admin/manage/roles', 'index')->name('admin.roles');
        Route::get('/admin/manage/roles/create', 'index')->name('admin.users.roles');
        Route::get('/admin/manage/roles/show', 'index')->name('admin.roles.show');
        //add another route for this controller
    });
    Route::controller(UsersController::class)->group(function () {
        Route::get('/admin/manage/users', 'index')->name('admin.users');
        Route::get('/admin/manage/users/create', 'index')->name('admin.users.create');
        Route::get('/admin/manage/users/show', 'index')->name('admin.users.show');
        //add another route for this controller
    });
    Route::controller(RiphController::class)->group(function () {
        Route::get('/admin/riph', 'index')->name('admin.riph');
        Route::get('/admin/riph/create', 'create')->name('admin.riph.create');
        Route::get('/admin/riph/show', 'show')->name('admin.riph.show');
        //add another route for this controller
    });
    Route::controller(FilesController::class)->group(function () {
        Route::get('/admin/files', 'index')->name('admin.files');
        Route::get('/admin/files/add', 'add')->name('admin.files.add');
        Route::get('/admin/files/show', 'show')->name('admin.files.show');
        //add another route for this controller
    });
    Route::controller(CommitmentReportController::class)->group(function () {
        Route::get('/admin/report/commitment', 'index')->name('admin.report.commitment');
        Route::get('/admin/report/commitment/detail', 'detail')->name('admin.report.commitment.detail');
        Route::get('/admin/report/commitment/realisasi', 'realisasi')->name('admin.report.commitment.realisasi');
        Route::get('/admin/report/commitment/map', 'map')->name('admin.report.commitment.map');
        //add another route for this controller
    });
    Route::controller(VerificationReportController::class)->group(function () {
        //onfarm
        Route::get('/admin/report/verification/onfarm', 'onfarm')->name('admin.report.verification.onfarm');
        Route::get('/admin/report/verification/onfarm/detail', 'detail_onfarm')->name('admin.report.verification.onfarm.detail');
        Route::get('/admin/report/verification/onfarm/add', 'add_sampling')->name('admin.report.verification.onfarm.add');
        Route::get('/admin/report/verification/onfarm/show', 'show_sampling')->name('admin.report.verification.onfarm.show');

        //online
        Route::get('/admin/report/verification/online', 'online')->name('admin.report.verification.online');
        Route::get('/admin/report/verification/online/detail', 'detail_online')->name('admin.report.verification.online.detail');
        Route::get('/admin/report/verification/online/add', 'add_check')->name('admin.report.verification.online.add');
        Route::get('/admin/report/verification/online/show', 'show_check')->name('admin.report.verification.online.show');
        //add another route for this controller
    });
    Route::controller(SklController::class)->group(function () {
        Route::get('/admin/skl', 'index')->name('admin.sklindex');
        Route::get('/admin/skl/create', 'create')->name('admin.skl.create');
        Route::get('/admin/skl/form', 'form')->name('admin.skl.form');
        //add another route for this controller
    });
    Route::controller(UsersController::class)->group(function () {
        Route::get('/admin/manage/users', 'index')->name('admin.users');
        Route::get('/admin/manage/users/create', 'create')->name('admin.users.create');
        Route::get('/admin/manage/users/show', 'show')->name('admin.users.show');
        //add another route for this controller
    });
    Route::controller(RolesController::class)->group(function () {
        Route::get('/admin/manage/roles', 'index')->name('admin.roles');
        Route::get('/admin/manage/roles/create', 'create')->name('admin.roles.create');
        Route::get('/admin/manage/roles/show', 'show')->name('admin.roles.show');
        //add another route for this controller
    });
    //add another controller for admin user
});

// ==================== verifikator ==================== //
Route::namespace('App\Http\Controllers')->middleware(['auth', 'user-access:verifikator'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/verifikator/home', 'index')->name('verif.home');
        //add another route for HomeController for this usertype
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/verifikator/dashboard/data', 'verifikator')->name('verif.dashboard.data');
        Route::get('/verifikator/dashboard/peta', 'peta_verif')->name('verif.dashboard.peta');
        //add another route for HomeController for this usertype
    });

    Route::controller(VerificationOnfarmController::class)->group(function () {
        Route::get('/verifikator/verify/onfarm', 'index')->name('verif.onfarm');
        Route::get('/verifikator/verify/onfarm/add', 'add')->name('verif.onfarm.add');
        Route::get('/verifikator/verify/onfarm/show', 'show')->name('verif.onfarm.show');
        Route::get('/verifikator/verify/onfarm/detail', 'detail')->name('verif.onfarm.detail');
        //add another route for HomeController for this usertype
    });

    Route::controller(VerificationOnlineController::class)->group(function () {
        Route::get('/verifikator/verify/online', 'index')->name('verif.online');
        Route::get('/verifikator/verify/online/add', 'add')->name('verif.online.add');
        Route::get('/verifikator/verify/online/add/notes', 'notes')->name('verif.online.add.notes');
        Route::get('/verifikator/verify/online/show', 'show')->name('verif.online.show');
        Route::get('/verifikator/verify/online/detail', 'detail')->name('verif.online.detail');
        Route::get('/verifikator/verify/online/show/notes', 'notes')->name('verif.online.show.notes');
        //add another route for HomeController for this usertype
    });
    //add another controller
});

// ==================== normal user ==================== //
Route::namespace('App\Http\Controllers')->middleware(['auth', 'user-access:user'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/user/home', 'index')->name('user.home');
        //add another route for HomeController for this usertype
    });
    //add another controller
});

// ==================== v2 ==================== //
Route::namespace('App\Http\Controllers')->middleware(['auth', 'user-access:v2'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/v2/home', 'index')->name('v2.home');
        //add another route for HomeController for this usertype
    });
    //add another controller for v2 user
});

//all users
Route::namespace('App\Http\Controllers')->middleware(['auth'])->group(function () {
    Route::controller(FeedsController::class)->group(function () {
        Route::get('/feeds', 'index')->name('feeds');
        Route::get('/feeds/create', 'create')->name('feeds.create');
        Route::get('/feeds/read', 'read')->name('feeds.read');
        Route::get('/feeds/show', 'show')->name('feeds.show');
        Route::get('/feeds/update', 'update')->name('feeds.update');
        //add another route for this controller
    });
    Route::controller(MessengerController::class)->group(function () {
        Route::get('/messenger', 'index')->name('messenger');
        Route::get('/messenger/create', 'create')->name('messenger.create');
        Route::get('/messenger/read', 'read')->name('messenger.read');
        Route::get('/messenger/inbox', 'inbox')->name('messenger.inbox');
        Route::get('/messenger/outbox', 'outbox')->name('messenger.outbox');
        Route::get('/messenger/trash', 'trash')->name('messenger.trash');
        //add another route for this controller
    });

    Route::controller(ProfilesController::class)->group(function () {
        Route::get('/myprofile/1', 'edit')->name('myprofile');
        Route::get('/password', 'password')->name('password');
        //add another route for this controller
    });
});
