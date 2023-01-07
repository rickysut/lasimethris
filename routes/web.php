<?php


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/v2/register', function () {
    return view('v2register');
});

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
    
});


Auth::routes(['register' => true]); // menghidupkan registration




Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    // landing
    Route::get('/', 'HomeController@index')->name('home');
    // Dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard/map', 'DashboardController@map')->name('dashboard.map');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');


    //feeds
    Route::get('feeds', 'MessengerController@index')->name('feeds.index');
    
    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::post('messenger/{topic}/update', 'MessengerController@updateTopic')->name('messenger.updateTopic');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');

    //verifikasi
    Route::get('dir_check_b', 'MessengerController@showReply')->name('verifikasi.dir_check_b');
    Route::get('dir_check_c', 'MessengerController@showReply')->name('verifikasi.dir_check_c');
    
    //user task
    Route::group(['prefix' => 'task','as' => 'task.'], function () {
        Route::get('pull', 'PullRiphController@index')->name('pull');
        Route::get('getriph', 'PullRiphController@pull')->name('getriph');
        Route::post('storeriph', 'PullRiphController@store')->name('storeriph');
        

        Route::resource('commitment', 'CommitmentController');
        Route::delete('commitment/destroy', 'CommitmentController@massDestroy')->name('commitment.massDestroy');

        Route::resource('kelompoktani', 'KelompoktaniController');
        Route::resource('pengajuan', 'PengajuanController');
        Route::resource('skl', 'SklController');
        Route::get('berkas', 'BerkasController@indexberkas')->name('berkas');
        Route::get('galeri', 'BerkasController@indexgaleri')->name('galeri');
        Route::get('template', 'BerkasController@indextemplate')->name('template');
    });

    
    Route::resource('riphAdmin', 'RiphAdminController');
        

});

Route::group(['prefix' => 'verification', 'as' => 'verification.', 'namespace' => 'Verifikator', 'middleware' => ['auth']], function () {
    Route::resource('onfarm', 'OnfarmController');
    Route::resource('online', 'OnlineController');
    Route::resource('completed', 'CompletedController');
    Route::resource('skl', 'SklController' );   
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});