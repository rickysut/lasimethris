<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

trait RegistersUsers
{
    use RedirectsUsers;

    public function getAPIAccessToken($username, $pass){
        $response = Http::asForm()->post('http://simevi.test/api/getToken', [
            'username' => $username,
            'password' => $pass
        ]);

        $access_token = $response->json('access_token');
        return $access_token;
    }

    public function getAPIProvinsiAll($token){
        $response = Http::withToken($token)->withHeaders([
            'Accept' => 'application/json'
        ])->get('http://simevi.test/api/provinsis');

        
        return $response->json();
    }

    public function getAPIKabupatenAll($token){
        $response = Http::withToken($token)->withHeaders([
            'Accept' => 'application/json'
        ])->get('http://simevi.test/api/kabupatens');

        
        return $response->json();
    }

    public function getAPIKabupatenProp($token, $provinsi){
        $response = Http::withToken($token)->withHeaders([
            'Accept' => 'application/json'
        ])->get('http://simevi.test/api/kabupatenwithprop/'.$provinsi);

        
        return $response->json();
    }

    public function getAPIKecamatanAll($token){
        $response = Http::withToken($token)->withHeaders([
            'Accept' => 'application/json'
        ])->get('http://simevi.test/api/kecamatans');

        
        return $response->json();
    }

    public function getAPIKecamatanKab($token, $kabupaten){
        $response = Http::withToken($token)->withHeaders([
            'Accept' => 'application/json'
        ])->get('http://simevi.test/api/kecamatanwithkab/'.$kabupaten);

        
        return $response->json();
    }

    public function getAPIDesaAll($token){
        $response = Http::withToken($token)->withHeaders([
            'Accept' => 'application/json'
        ])->get('http://simevi.test/api/desas');

        
        return $response->json();
    }

    public function getAPIDesaKec($token, $kecamatan){
        $response = Http::withToken($token)->withHeaders([
            'Accept' => 'application/json'
        ])->get('http://simevi.test/api/desawithkec/'.$kecamatan);

        
        return $response->json();
    }



    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        $access_token = $this->getAPIAccessToken('admin', 'password');
        $provinsi = $this->getAPIProvinsiAll($access_token);
        $kabupaten = $this->getAPIKabupatenProp($access_token, '11');
        $kecamatan = $this->getAPIKecamatanKab($access_token, '1101');
        $desa = $this->getAPIDesaKec($access_token, '1101010');
        return view('auth.register', compact('access_token', 'provinsi', 'kabupaten', 'kecamatan', 'desa'));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
