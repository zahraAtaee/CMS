<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=['user_id','course_id','payment','resnumber','price'];

    public function ScopeSpaningPayment($query,$month,$payment)
    {
        return $query->selectRaw('monthname(created_at) as month, COUNT(*) published ')
            ->where('created_at','>',Carbon::now()->subMonth($month))
            ->wherePayment($payment)
            ->groupBy('month')
            ->latest();
    }
}
