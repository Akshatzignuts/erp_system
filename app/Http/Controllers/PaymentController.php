<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paid()
    {
        return view('payment_paid.payment_paid_view');
    }
   
}
