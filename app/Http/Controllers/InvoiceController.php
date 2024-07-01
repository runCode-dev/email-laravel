<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Invoice;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function sendMail(){
        $user = User::find(1);

        Mail::to("email@gmail.com", "Gustavo Araujo")->send(new Invoice($user));
    }
}
