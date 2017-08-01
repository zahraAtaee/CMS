<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{

    public function index()
    {
//        auth()->loginUsingId(1);
   /*     return User::whereEmail('1')->first()->roles()->get();
       return auth()->user()->roles()->get();*/
        Permission::create([
            'name'=>'show-comment',
            'label'=>'بخش نظرات'
            ]);
        return view('Admin.panel');
    }

    public function uploadImageSubject()
    {

        $this->validate(request(),[
            'upload'=>'required|mimes:jpeg,png,bmp,jpg'
        ]);

        $year=Carbon::now()->year;
        $imagePath="/upload/images/{$year}/";
        $file=request()->file('upload');
        $fileName=$file->getClientOriginalName();

        if (file_exists(public_path($imagePath).$fileName)){
                $fileName=Carbon::now()->timestamp.$fileName;
        }
        $file->move(public_path($imagePath),$fileName);
        $url=$imagePath.$fileName;

        return "<script>window.parent.CKEDITOR.tools.callFunction(1,'{$url}','')</script>";

    }



}
