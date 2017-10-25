<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\command;
use SEO;
class UserPanelController extends Controller
{
    use command;
    public function index()
    {
        SEO::settitle('پنل کاربری');

        $comments=$this->commentsActive();
        $payments=auth()->user()->payments()->latest()->with('course')->get();

        return view('Admin.panelUser.index',compact('comments','payments'));
    }

    public function history()
    {
        $payments=auth()->user()->payments()->latest()->paginate(20);
        return view('Admin.panelUser.index');
    }
}
