<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\DataUser;
use Illuminate\Support\Facades\Hash;


trait AuthenticatesUsers
{
    use RedirectsUsers, ThrottlesLogins;

   

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {

        if ($request->string('roleaccess') == '2'){

            try {
                $options = array(
                    'soap_version' => SOAP_1_1,
                    'exceptions' => true,
                    'trace' => 1,
                    'cache_wsdl' => WSDL_CACHE_MEMORY,
                    // 'login' => $system['webuser'],
                    // 'password' => $system['webpass'],
                    'connection_timeout' => 25,
                    'style' => SOAP_RPC,
                    'use' => SOAP_ENCODED,
                );
        
                $client = new \SoapClient('http://riph.pertanian.go.id/api.php/simethris?wsdl', $options);
                $parameter = array(
                    'user' => 'simethris',
                    'pass' => 'wsriphsimethris',
                    'user_riph' => $request->string('username'),
                    'pass_riph' =>  $request->string('password')
                    // 'user_riph' => 'hortikultura.jaya',
                    // 'pass_riph' => 'P@ssw0rd123'
                );
                $response = $client->__soapCall('get_akses', $parameter);
            } catch (\Exception $e) {
    
                Log::error('Soap Exception: ' . $e->getMessage());
                throw new \Exception('Problem with SOAP call');
            }
            //$res = json_decode(json_encode((array)simplexml_load_string($response)),true);
           
            $res = simplexml_load_string($response);
            // dd((string)$res->riph->company_profile->fax);
            if ((string)$res->keterangan == 'SUCCESS'){
                
                $user = User::firstOrCreate(
                    ['username' => $request->string('username'), 'roleaccess' => 2],
                    ['name' => (string)$res->riph->user_profile->nama, 'password' => Hash::make( $request->string('password')), 'email' => (string)$res->riph->user_profile->email]
                );
 
                if ($user) {
                    $user->roles()->attach(2); // user V3
                    $datauser = DataUser::updateOrCreate(
                        ['user_id' => $user->id, 'company_name' =>  (string)$res->riph->company_profile->nama],
                        [
                            'name' => (string)$res->riph->user_profile->nama,
                            'mobile_phone' => (string)$res->riph->user_profile->telepon,
                            'fix_phone' => (string)$res->riph->company_profile->telepon,
                            'pic_name' => (string)$res->riph->company_profile->penanggung_jawab,
                            'jabatan' => (string)$res->riph->company_profile->jabatan,
                            'npwp_company' => (string)$res->riph->company_profile->npwp,
                            'nib_company' => (string)$res->riph->company_profile->nib,
                            'address_company' => (string)$res->riph->company_profile->alamat,
                            'provinsi' => (string)$res->riph->company_profile->kdprop,
                            'kabupaten' => (string)$res->riph->company_profile->kdkab,
                            'kodepos' => (string)$res->riph->company_profile->kodepos,
                            'ktp' => (string)$res->riph->user_profile->ktp,
                            'fax' => (string)$res->riph->company_profile->fax,
                            'email_company' => (string)$res->riph->company_profile->email
                        ]
                    );
                    // if ($datauser) dd('updated...'); else dd('update or create fail');
                };
                
            }
            
        } 
        
        
            $this->validateLogin($request);

            // If the class is using the ThrottlesLogins trait, we can automatically throttle
            // the login attempts for this application. We'll key this by the username and
            // the IP address of the client making these requests into this application.
            if (method_exists($this, 'hasTooManyLoginAttempts') &&
                $this->hasTooManyLoginAttempts($request)) {
                $this->fireLockoutEvent($request);

                return $this->sendLockoutResponse($request);
            }

            if ($this->attemptLogin($request)) {
                if ($request->hasSession()) {
                    $request->session()->put('auth.password_confirmed_at', time());
                }

                return $this->sendLoginResponse($request);
            }

            // If the login attempt was unsuccessful we will increment the number of attempts
            // to login and redirect the user back to the login form. Of course, when this
            // user surpasses their maximum number of attempts they will get locked out.
            $this->incrementLoginAttempts($request);

            return $this->sendFailedLoginResponse($request);
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        // $messages = [
        //     'roleaccess.required' => 'Role is required!',
        //     'password.required' => 'Password is required!',
        //     $this->username() => 'Username is required!'
        // ];
        $request->validate([
            'roleaccess' => 'required|integer',
            $this->username() => 'required|string',
            //'password' => 'required|string',
        ]);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->boolean('remember')
        );
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        
        return $request->only( $this->username(), 'password', 'roleaccess');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 204)
                    : redirect()->intended($this->redirectPath());
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        //
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
            'roleaccess' => $request->input('roleaccess')
        ]);
    }
    protected function sendFailedLoginResponse2(Request $request)
    {
        
        throw ValidationException::withMessages([
            'roleaccess' => [trans('auth.roleaccess')]
        ]);
    }
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        //
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
