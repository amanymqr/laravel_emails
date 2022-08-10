<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('send-email' ,[MailController :: class , 'send'])->name('send');






Route::get('contact_us' ,[MailController :: class , 'contact_us'])->name('contact_us');
Route::post('contact_us' ,[MailController :: class , 'contact_us_data'])->name('contact_us_data');
