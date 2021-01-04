<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailservice;

class SendEmailservice extends Controller
{
    //
    function index()
    {
        return view('send_email');
    }
    function send(Request $request)
    {
        $this->validate($request,  [
            'name'                      =>      'required',
            'position_company'          =>      'required',
            'email'                     =>      'required|email',
            'message'                   =>      'required',
        ]);

        $data = array(
            'name'                      =>      $request->name,
            'position_company'          =>      $request->position_company,
            'message'                   =>      $request->message,
            'email'                     =>      $request->email
        );

        try{
            Mail::to('piyapat.t@databar.co.th')
                ->send(new SendMailservice($data));
            echo('Success');
        }

        catch(Exception $e){
            echo('Failed');
        }
    }
}
