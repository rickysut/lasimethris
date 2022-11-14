<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DataUser;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name'     => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @return \App\User
     */
    protected function create(array $data)
    {
        DB::beginTransaction();
        try {
            $user = User::create([
                'name'     => $data['first_name'] . ' ' .$data['last_name'],
                'username' => $data['username'],
                'email'    => $data['email'],
                'password' => Hash::make($data['password']),
                'roleaccess' => 3 // v2 simethris
            ]);
        } catch(ValidationException $e)
        {
            DB::rollback();
            return Redirect::to('register')
                ->withErrors( $e->getErrors() )
                ->withInput();
        } catch(\Exception $e)
        {
            DB::rollback();
            throw $e;
        }

        try {
            if ($user){
                $user->roles()->attach(4);
                $datauser = DataUser::create([
                    'user_id'       => $user->id,
                    'first_name'    => $data['first_name'] ,
                    'last_name'     => $data['last_name'] ,
                    'mobile_phone'  => $data['mobile_phone'],
                    'fix_phone'     => $data['fix_phone'],
                    'company_name'  => $data['company_name'],
                    'direktur_name' => $data['direktur_name'],
                    'npwp_company'  => $data['npwp_company'],
                    'nib_company'   => $data['nib_company'],
                    'address_company' => $data['address_company'],
                    'provinsi'      => $data['provinsi'],
                    'kabupaten'     => $data['kabupaten'],
                    'kecamatan'     => $data['kecamatan'],
                    'desa'          => $data['desa'],
                    'ktp'           => $data['ktp'],
                    'assignment'    => $data['assignment']  
                ]);
                $user->data_user()->save($datauser);
                
            }
        } catch(ValidationException $e)
        {
            DB::rollback();
            return Redirect::to('register')
                ->withErrors( $e->getErrors() )
                ->withInput();
        } catch(\Exception $e)
        {
            DB::rollback();
            throw $e;
        }

        DB::commit();
        if ($user)
            return $user;

    }
}
