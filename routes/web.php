<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoicePdf;
use App\Http\Controllers\OrderShipmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/processar-pdf", [InvoicePdf::class, "generate"])->name("processar-pdf");

Route::get("/processar-mail", [InvoiceController::class, "sendMail"])->name("processar-mail");