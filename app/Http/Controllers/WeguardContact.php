<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\WeguardModel;


class WeguardContact extends Controller
{
    //

    function weguard_trial (Request $request) {

        $request->validate([
            'Wec_Title' => 'required',
            'Wec_FName' => 'required',
            'Wec_FLame' => 'required',
            'Wec_Email' => 'required',
            'Wec_Company' => 'required',
            'Wec_Date_Start' => 'required',
            'Wec_Date_Expire' => 'required',
            'Wec_Quantity' => 'required',
        ]);

        $data = request()->except(['_token']);
        $data['Wec_Type'] = 'Trial';
        if (WeguardModel::insert($data)){
            //Insert Success
             redirect()->route('home-page')->with(['data' => 'Insert Success']); // <-- use $data to page redirect
        }else{
            // Can't Insert
            redirect()->route('home-page')->with(['data'=> 'Can\'t Insert']); // <-- use $data to page redirect
        }
    }

    function weguard_buy (Request $request) {
        $request->validate([
            'Wec_Title' => 'required',
            'Wec_FName' => 'required',
            'Wec_FLame' => 'required',
            'Wec_Email' => 'required',
            'Wec_Company' => 'required',
        ]);

        $data = request()->except(['_token', 'Wec_Date_Start', 'Wec_Date_Expire', 'Wec_Quantity']);
        $data['Wec_Type'] = 'Buy';
        if (WeguardModel::insert($data)){
            //Insert Success
            redirect()->route('home-page')->with(['data' => 'Insert Success']); // <-- use $data to page redirect
             
        }else{
            // Can't Insert
            redirect()->route('home-page')->with(['data'=> 'Can\'t Insert']); // <-- use $data to page redirect
        }

    }
}
