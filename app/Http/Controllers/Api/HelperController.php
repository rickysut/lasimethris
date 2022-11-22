<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;

class HelperController extends Controller
{
    public function getAPIAccessToken(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $response = Http::asForm()->post(config('app.simevi_url').'getToken', [
            'username' => $request->username,
            'password' => $request->password
        ]);

        $access_token = $response->json('access_token');
        return $access_token;
    }

    public function getAPIProvinsiAll(Request $request){
        $response = Http::withToken($request->token)->withHeaders([
            'Accept' => 'application/json'
        ])->get(config('app.simevi_url').'provinsis');

        
        return $response->json();
    }

    public function getAPIKabupatenAll(Request $request){
        $response = Http::withToken($request->token)->withHeaders([
            'Accept' => 'application/json'
        ])->get(config('app.simevi_url').'kabupatens');

        
        return $response->json();
    }

    public function getAPIKabupatenProp(Request $request){
        $response = Http::withToken($request->token)->withHeaders([
            'Accept' => 'application/json'
        ])->get(config('app.simevi_url').'kabupatenwithprop/'.$request->provinsi);

        
        return $response->json();
    }

    public function getAPIKecamatanAll(Request $request){
        $response = Http::withToken($request->token)->withHeaders([
            'Accept' => 'application/json'
        ])->get(config('app.simevi_url').'kecamatans');

        
        return $response->json();
    }

    public function getAPIKecamatanKab(Request $request){
        $response = Http::withToken($request->token)->withHeaders([
            'Accept' => 'application/json'
        ])->get(config('app.simevi_url').'kecamatanwithkab/'.$request->kabupaten);

        
        return $response->json();
    }

    public function getAPIDesaAll(Request $request){
        $response = Http::withToken($request->token)->withHeaders([
            'Accept' => 'application/json'
        ])->get(config('app.simevi_url').'desas');

        
        return $response->json();
    }

    public function getAPIDesaKec(Request $request){
        $response = Http::withToken($request->token)->withHeaders([
            'Accept' => 'application/json'
        ])->get(config('app.simevi_url').'desawithkec/'.$request->kecamatan);

        
        return $response->json();
    }
}
