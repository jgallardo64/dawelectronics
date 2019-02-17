<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function realizarPago() {
        return view ('orders.pago');
    }
}
