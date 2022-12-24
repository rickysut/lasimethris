<?php

use App\Http\Controllers\Api\HelperController;

Route::group(['namespace' => 'Api'], function () {

    Route::post('getAPIAccessToken', 'HelperController@getAPIAccessToken');
    // Provinsi
    Route::get('getAPIProvinsiAll', 'HelperController@getAPIProvinsiAll');
    //Kabupaten
    Route::get('getAPIKabupatenAll', 'HelperController@getAPIKabupatenAll');
    Route::get('getAPIKabupatenProp', 'HelperController@getAPIKabupatenProp');
    //Kecamatan
    Route::get('getAPIKecamatanAll', 'HelperController@getAPIKecamatanAll');
    Route::get('getAPIKecamatanKab', 'HelperController@getAPIKecamatanKab');
    //Desa
    Route::get('getAPIDesaAll', 'HelperController@getAPIDesaAll');
    Route::get('getAPIDesaKec', 'HelperController@getAPIDesaKec');
});
