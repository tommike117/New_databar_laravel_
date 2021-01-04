<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //
    // function index()
    // {
    //     return view('send_email');
    // }

    function send(Request $request)
    {

        // if (!isset($request->_token))
        // {
        //     dd('Yes');
        //     // Redirect/
        // }
        // dd($request->_token);

            $data = array(
                'name'      =>  'www.databar.co.th',
                'email'     =>  '',
                'message'   =>  ''
            );
            // dd($data);
            // Mail::to('programmer@databar.co.th');


            try{
                Mail::to('website.db@databar.co.th')
                    ->send(new SendMail($data));
                echo('Success');
            }
            
            catch(Exception $e){
                echo('Failed');
            }
    }




}
