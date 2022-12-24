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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

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
            // 'avatar' => ['mimes:jpg,jpeg,png','max:2048'],
            // 'logo' => ['mimes:jpg,jpeg,png','max:2048'],
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
            $str = 'select  u.roleaccess
            from data_users du 
            INNER JOIN users u on 
             du.npwp_company = "'.$data['npwp_company'].'" and u.id = du.user_id';
            $roleaccess = DB::select($str);
            
            if ($roleaccess && ($roleaccess[0]->roleaccess == 3)){
                DB::rollback();
                return 'NPWP sudah didaftarkan';
                //return null;
            }
            
                
            $user = User::create([
                'name'     => $data['name'],
                'username' => $data['username'],
                'email'    => $data['email'],
                'password' => Hash::make($data['password']),
                'roleaccess' => 3 // v2 simethris
            ]);
        } catch(ValidationException $e)
        {
            DB::rollback();
            return 'Gagal membuat user';
        } catch(\Exception $e)
        {
            DB::rollback();
            throw $e;
        }

        try {
            if ($user){
                $user->roles()->attach(4);
                $regdata = [
                    'user_id'       => $user->id,
                    'name'          => $data['name'] ,
                    'mobile_phone'  => $data['mobile_phone'],
                    'fix_phone'     => $data['fix_phone'],
                    'company_name'  => $data['company_name'],
                    'pic_name'      => $data['pic_name'],
                    'jabatan'       => $data['jabatan'],
                    'npwp_company'  => $data['npwp_company'],
                    'nib_company'   => $data['nib_company'],
                    'address_company' => $data['address_company'],
                    'provinsi'      => $data['provinsi'],
                    'kabupaten'     => $data['kabupaten'],
                    'kecamatan'     => $data['kecamatan'],
                    'desa'          => $data['desa'],
                    'kodepos'       => $data['kodepos'],
                    'ktp'           => $data['ktp'],
                    'email_company' => $data['email_company']
                ];
                $avatar_path = '';
                if (array_key_exists('avatar', $data)) {
                    if  ($data['avatar']!=null){
                        $file_name = $data['company_name'].'_'.'avatar.'.$data['avatar']->getClientOriginalExtension();
                        $file_path = $data['avatar']->storeAs('uploads', $file_name, 'public');
                        $avatar_path = $file_path;
                        $regdata += array('avatar' => $avatar_path);
                    };
                }
                $logo_path = '';
                if (array_key_exists('logo', $data)) {
                    if  ($data['logo']!=null){
                        $file_name = $data['company_name'].'_'.'logo.'.$data['logo']->getClientOriginalExtension();
                        $file_path = $data['logo']->storeAs('uploads', $file_name, 'public');
                        $logo_path = $file_path;
                        $regdata += array('logo' => $logo_path);
                    };
                }
                $ktp_path = '';
                if (array_key_exists('imagektp', $data)) {
                    if  ($data['imagektp']!=null){
                        $file_name = $data['company_name'].'_'.'ktp.'.$data['imagektp']->getClientOriginalExtension();
                        $file_path = $data['imagektp']->storeAs('uploads', $file_name, 'public');
                        $ktp_path = $file_path;
                        $regdata += array('ktp_image' => $ktp_path);
                    };
                }
                $assign_path = '';
                if (array_key_exists('assignment', $data)) {
                    if  ($data['assignment']!=null){
                        $file_name = $data['company_name'].'_'.'assignment.'.$data['assignment']->getClientOriginalExtension();
                        $file_path = $data['assignment']->storeAs('uploads', $file_name, 'public');
                        $assign_path = $file_path;
                        $regdata += array('assignment' => $assign_path);
                    };
                }
                //dd($regdata);
                $datauser = DataUser::create($regdata);
                $user->data_user()->save($datauser);
                
            }
        } catch(ValidationException $e)
        {
            DB::rollback();
            return 'Gagal update data-user';
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
