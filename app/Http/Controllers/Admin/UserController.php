<?php

namespace App\Http\Controllers\Admin;

use App\ActivationCode;
use App\Article;
use App\Http\Requests\UserRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class UserController extends AdminController
{
    public function index()
    {
        $users=User::latest()->paginate(25);
        return view('Admin.users.all',compact('users'));
    }

    public function show()
    {

    }

    public function edit(User $user)
    {
        return view('Admin.users.edit',compact('user'));
    }

    public function create()
    {
        return view('Admin.users.create');
    }

    public function store(UserRequest $request)
    {
         $imagesUrl=$this->uploadImages($request->file('images'));

         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'active' => '1',
            'images'=>$imagesUrl,
            'username'=> $request['username'],
            'family'=> $request['family'],
            'birthday'=> $request['birthday'],
            'description'=> $request['description'],
            'position'=> $request['position'],
            'password' => bcrypt($request['password']),
            'api_token' => Str::random(60)
        ]);
       return back();
    }

    public function update(UserRequest $request,User $user)
    {
        $file=$request->file('images');
        $input=$request->all();

        if ($file){
            $input['images']=$this->uploadImages($request->file('images'));
        }else{
            $input['images']=$user->images;
            $input['images']['thumb']=$input['imagesThumb'];
        }

        $user->update($input);
        return redirect(route('users.index'));
    }
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
    public function activation($token)
    {
        $activationCode=ActivationCode::whereCode($token)->first();
        if (!$activationCode){
            dd('not Exists');

            return redirect('/');
        }
        elseif ($activationCode->expire < Carbon::now())
        {
            dd('Expire date');

            return redirect('/');
        }
        elseif ($activationCode->used==true)
        {
            dd('Used ...');

            return redirect('/');
        }

        $activationCode->update(['used'=>true]);

        $activationCode->user()->update(['active'=>1]);

        auth()->loginUsingId($activationCode->user->id);

        return redirect('/');
    }
}
