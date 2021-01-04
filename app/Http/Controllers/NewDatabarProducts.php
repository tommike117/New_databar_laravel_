<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class NewDatabarProducts extends Controller
{
    public function customers()
    {
        $customer = DB::table('customer')
        ->get();
        return view('pages/customers', ['data'=> $customer]);
    }

    public function samsung_smartphones()
    {
        $smartphone = DB::table('db_product_list')
        ->WHERE('Protype_ID', '7' )
        ->orderBy('Plist_Priority','DESC')
        ->get();
        return view('/pages/products/samsung/samsung-mobile/index', [
            'data'=> $smartphone
        ]);
    }

    public function samsung_tablets()
    {
        $smartphone = DB::table('db_product_list')
        ->whereIn('Protype_ID', [12,13,15])
        ->orderBy('Plist_Priority','DESC')
        ->get();
        return view('/pages/products/samsung/samsung-tablet/index', [
            'data'=> $smartphone
        ]);
    }







}









?>
