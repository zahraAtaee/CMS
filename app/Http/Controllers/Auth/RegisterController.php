<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserActivation;
use App\Http\Controllers\Admin\AdminController;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends AdminController
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $imagesUrl=$this->uploadImages($data['images']);


       /* auth()->user()->article()->create(array_merge($request->all(),['images'=>$imagesUrl]));*/

        return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'images'=>$imagesUrl,
                'username'=> $data['username'],
                'family'=> $data['family'],
                'birthday'=> $data['birthday'],
                'description'=> $data['description'],
                'position'=> $data['position'],
                'password' => bcrypt($data['password']),
                'api_token' => Str::random(60)
        ]);

    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     */
    public function register(Request $request)
    {

        $validator= Validator::make($request->all(),[
            'g-recaptcha-response'=>'recaptcha'
        ]);

        if ($validator->fails()){

            return 'fali recaptcha...';

        }else{

            event(new Registered($user = $this->create($request->all())));
            event(new UserActivation($user));
            return $this->registered($request, $user)
                ?: redirect($this->redirectPath());
        }

    }
}
