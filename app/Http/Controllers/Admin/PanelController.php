<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Payment;
use App\Permission;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Morilog\Jalali\Facades\jDate;

class PanelController extends Controller
{

    public function index()
    {
//        auth()->loginUsingId(1);

        $month=12;
        $paymentSuccess=Payment::spaningPayment($month,true);
        $paymentUnSuccess=Payment::spaningPayment($month,false);
        $lables=$this->getLastMonths($month);

        $values['success']=$this->checkCount($paymentSuccess->pluck('published'),$month);
        $values['unsuccess']=$this->checkCount($paymentUnSuccess->pluck('published'),$month);


        $sumPrice=Payment::sum('price');
        $tax=Payment::sum('price')-10*100;
        $orders=Payment::count();

        $commentsActive=Comment::Approved(true);
        $commentsDeActive=Comment::Approved(false);
        $feedback=Comment::Approved(false)->count();


        $userCount=User::count();

        return view('Admin.panel',compact('lables','values','commentsActive','commentsDeActive','orders','sumPrice','tax','feedback','userCount'));

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

    private function getLastMonths($month)
    {
        for ($i=0;$i<$month;$i++){

            $lables[]=jdate(Carbon::now()->subMonth($i))->format('%B');
        }

        return array_reverse($lables);
    }

    private function checkCount($count, $month)
    {
        for ($i=0;$i<$month;$i++)
        {
            $new[$i]=empty($count[$i])? 0:$count[$i];
        }
        return array_reverse($new);
    }


}
