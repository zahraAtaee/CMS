<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use SEO;
class UserPanelController extends Controller
{
    public function index()
    {
        SEO::settitle('پنل کاربری');

        return view('Admin.panelUser.master');
    }
}
