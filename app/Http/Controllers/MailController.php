<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {

        Mail::to('aa@gmail.com')->send(new TestMail() );
        return 'done';
    }



    public function contact_us()
    {
        return view('forms.contact_us');
    }


    public function contact_us_data(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
            'cv'=>'required',
        ]);


        $cv_name = rand().time().$request->file('cv')->getClientOriginalName();
        $request->file('cv')->move(public_path('uploads/cv'), $cv_name);

        $data = $request->except('_token');
        $data['cv'] = $cv_name;

        Mail::to('contactus@gmail.com')->send(new ContactUs($data));

        // dd($request-> all());
    }
}
