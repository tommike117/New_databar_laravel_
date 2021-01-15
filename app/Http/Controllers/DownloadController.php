<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DownloadController extends Controller
{
    //y
    public function downloadcat(){
        $downloads=DB::table('db_pdf_list')
        ->where('Pline_ID', '=', 28)
        ->get();
        return view('/pages/products/caterpillar/products/smartphone/s62',compact('$downloads'));
    }
}
