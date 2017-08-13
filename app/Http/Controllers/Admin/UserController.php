<?php

namespace App\Http\Controllers\Admin;

use App\ActivationCode;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users=User::latest()->paginate(25);
        return view('Admin.users.all',compact('users'));
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
