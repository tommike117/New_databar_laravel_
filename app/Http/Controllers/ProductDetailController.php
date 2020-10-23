<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;



class ProductDetailController extends Controller
{
    public function detail_template($name){

        // Select Product Database 
        $data = DB::table('db_product_list')
        ->WHERE('db_product_list.Plist_Url', $name )
        ->join('db_product_metatag', 'db_product_metatag.Plist_ID','=','db_product_list.Plist_ID', 'left')
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID', 'left')
        ->join('db_brand', 'db_brand.Brand_ID', '=', 'db_product_line.Brand_ID', 'left')
        ->first();
        
         // List Feature
         $split = explode(';', $data->Plist_Feature);
         for ($i=0; $i < count($split) ; $i++) { 
             if ($split[$i] == ''){
                 unset($split[$i]);
             }
         }
         $data->Plist_Feature = array_values($split);
        
        // dd($data);  
        return view('includes/product-detail-template', [
            'data' => $data,
        ]);
    }

}