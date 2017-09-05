<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\PaymentRequest;
use App\Learning;
use App\Payment;
use App\User;
use Illuminate\Http\Request;
use SoapClient;

class PaymentController extends Controller
{
    protected  $MerchantID = 'f83cc956-f59f-11e6-889a-005056a205be'; //Required

    public function payment(PaymentRequest $request)
    {
        $course=Course::findOrFail($request['course_id']);

        if ($course->price==0 && $course->type=='VIP'){

            alert()->error('این دوره قابل خرید توسط شما نیست!','دقت کنید!');
        }
        $price = $course->price; //Amount will be based on Toman - Required
        $Description = $course->description; // Required
        $Email = auth()->user()->email; // Optional
        $Mobile = '09370577661'; // Optional
        $CallbackURL = 'http://localhost:8000/course/payment/checker'; // Required


        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
            [
                'MerchantID' => $this->MerchantID,
                'Amount' => $price,
                'Description' => $Description,
                'Email' => $Email,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL,
            ]
        );

        if ($result->Status == 100) {
            auth()->user()->payments()->create([
                'resnumber'=>$result->Authority,
                'price'=>$price,
                'course_id'=>$course->id,
            ]);

            return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);

        } else {
            echo'ERR: '.$result->Status;
        }

    }

    public function checker()
    {

        $Authority=request('Authority');
        $payment=Payment::whereResnumber($Authority)->firstOrFail();
        $course=Course::findOrfail($payment->course_id);

        if (request('Status')=='ok'){
            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $this->MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $payment->price,
                ]
            );
            if ($result->Status == 100)
            {
                if ($this->AddUserForLearning($payment,$course)){

                    alert()->message('عملیات مورد نظر با موفقیت انجام شد. :)','با تشکر!')->persistent('خیلی خوب');
                    return redirect($course->path());
                }


                echo 'Transaction success. RefID:'.$result->RefID;
            }
            else
            {
                echo 'Transaction failed. Status:'.$result->Status;
            }
        }
        else {
            echo 'Transaction canceled by user';
        }


    }

    protected function AddUserForLearning($payment,$course)
    {
        $payment->update([
            'payment'=>1
        ]);
       auth()->user()->learnings->create(['course_id'=>$course->id]);

       return true;
    }

}
