<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductListController extends Controller
{

    public function koamtac_pocket_scanner()
    {
        $data = DB::table('db_product_list')
            ->whereIn('db_product_list.Protype_ID', [23] )
            ->WHERE('db_product_list.Plist_Status', '1')
            ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
            ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
            ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
            ->orderby('Plist_Priority', 'DESC')
            ->get();

         return view('pages/products/koamtac/pocket-scanner', [
             'data'=> $data ,
         ]);
    }


    //
    public function koamtac_smartsled()
    {
        $data = DB::table('db_product_list')
             ->whereIn('db_product_list.Protype_ID', [24])
             ->WHERE('db_product_list.Plist_Status', '1')
             ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
             ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
             ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

         return view('pages/products/koamtac/barcode-smartsled', [
             'data'=> $data ,
         ]);
    }
    public function koamtac_Accessories()
    {
        $data = DB::table('db_product_list')
             ->whereIn('db_product_list.Protype_ID', [53, 54, 55])
             ->WHERE('db_product_list.Plist_Status', '1')
             ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
             ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
             ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

         return view('pages/products/koamtac/accessories', [
             'data'=> $data ,
         ]);
    }

     // Samsung Smartphone
     public function samsung_smartphone_all ()
     {
         $data = DB::table('db_product_list')
             ->whereIn('db_product_line.Pline_ID', [3])
             ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
             ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
             ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

         return view('pages/products/samsung/see-all-smartphone', [
             'data'=> $data ,
         ]);
     }

     public function samsung_tablet_all ()
     {
         $data = DB::table('db_product_list')
             ->whereIn('db_product_line.Pline_ID', [4])
             ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
             ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
             ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

         return view('pages/products/samsung/see-all-tablet', [
             'data'=> $data ,
         ]);
     }

     public function product_detail ($name)
    {
        return view('pages/products/samsung/'.$name);
    }

    public function product_detail_ecom ($name)
    {
        return view('pages/products/ecom-ex/'.$name);
    }

    public function product_detail_datalogic ($name)
    {
        return view('pages/products/datalogic/'.$name);
    }

    public function product_detail_sam4s ($name)
    {
        return view('pages/products/sam4s/'.$name);
    }

    public function product_detail_unitech ($name)
    {
        return view('pages/products/unitech/'.$name);
    }
    // public function product_detail_koamtac ($name)
    // {
    //     // dd($name);
    //     $name = decode_url($name);
    //     $data = DB::table('db_product_list')
    //     ->WHERE('db_product_list.Plist_Name', $name )
    //     ->join('db_product_metatag', 'db_product_metatag.Plist_ID','=','db_product_list.Plist_ID', 'left')
    //     ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID', 'left')

    //     ->first();


    //     // dd($data);
    //     return view('includes/product-detail-template', [
    //         'data' => $data,
    //     ]);
    //     // return view('pages/products/koamtac/'.$name);
    // }

    public function product_detail_ikey ($name)
    {

        // $name = decode_url($name);

        $data = DB::table('db_product_list')
        ->WHERE('db_product_list.Plist_Name', $name )
        ->join('db_product_line', 'db_product_list.Pline_ID','=','db_product_line.Pline_ID')
        ->join('db_product_metatag', 'db_product_metatag.Plist_ID','=','db_product_list.Plist_ID', 'left')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->first();

        // dd($data);

        return view('includes/product-template-ikey', [
            'data' => $data,
        ]);

        // dd($name);
        // return view('pages/products/ikey/'.$name,[
        //     'name' => $name
        //     ]);
    }

    public function product_detail_test ($name)
    {

        $name = decode_url($name);

        $data = DB::table('db_product_list')
        ->WHERE('db_product_list.Plist_Name', $name )
        ->join('db_product_line', 'db_product_list.Pline_ID','=','db_product_line.Pline_ID')
        ->join('db_product_metatag', 'db_product_metatag.Plist_ID','=','db_product_list.Plist_ID', 'left')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->first();

        // List Feature
        $split = explode(';', $data->Plist_Feature);
        for ($i=0; $i < count($split) ; $i++) {
            if ($split[$i] == ''){
                // dd($split[$i]);
                unset($split[$i]);
            }
        }
        $data->Plist_Feature = array_values($split);

        return view('includes/product-detail-template', [
            'data' => $data,
        ]);
    }



    // bixolon mobile computer
    public function bixolon_mobile_printer ()
    {
        $data = DB::table('db_product_list')->where('Pline_ID', '=', 2)->get();

        return view('pages/products/bixolon/mobile-printer', ['data'=> $data]);
    }

    // bixolon mobile computer
    public function bixolon_pos_printer ()
    {
        $data = DB::table('db_product_list')->where('Pline_ID', '=', 6)->get();

        return view('pages/products/bixolon/pos-printer', ['data'=> $data]);
    }
    // cat Smart phone
    public function smart_phone_cat ()
    {
        $data = DB::table('db_product_list')
        ->where('Pline_ID', '=', 28)
        ->orderBy('Plist_Priority','DESC')
        ->get();

        return view('pages/products/caterpillar/smart-phone-cat', ['data'=> $data]);
    }
     // cat Smart phone
     public function tablet_cat ()
     {
         $data = DB::table('db_product_list')
         ->where('Pline_ID', '=', 29)
         ->orderBy('Plist_Priority','DESC')
         ->get();

         return view('pages/products/caterpillar/tablet-cat', ['data'=> $data]);
     }

    // datalogic barcode scanners
    public function datalogic_barcode_scanners ()
    {
        $data = DB::table('db_product_list')->where('Pline_ID', '=', 7)->get();

         return view('pages/products/datalogic/barcode-scanners', ['data'=> $data]);
    }


    // datalogic mobile computers
    public function datalogic_mobile_computers ()
    {
        $data = DB::table('db_product_list')->where('Pline_ID', '=', 8)->get();

         return view('pages/products/datalogic/mobile-computers', ['data'=> $data]);
    }
     // datalogic automation
     public function datalogic_automation ()
     {
         $data = DB::table('db_product_list')->where('Pline_ID', '=', 31)->get();

          return view('pages/products/datalogic/automation', ['data'=> $data]);
     }

     // ecom tablet
     public function ecom_tablet ()
     {
        $data = DB::table('db_product_list')->where('Pline_ID', '=', 9)->get();

        return view('pages/products/ecom-ex/tablet', ['data'=> $data]);
     }

     // ecom tablet
     public function ecom_smartphone ()
     {
        $data = DB::table('db_product_list')->where('Pline_ID', '=', 10)->get();

        return view('pages/products/ecom-ex/smartphone', ['data'=> $data]);
     }
     // koam tec barcode sccaner
     public function koamtac_scanner ()
     {
        $data = DB::table('db_product_list')->where('Protype_ID', '=', 23)->get();

        return view('pages/products/koamtac/pocket-scanner', ['data'=> $data]);
     }
    // koamtac barcode sccaner Smrt led
    public function koamtac_smartleds ()
    {
        $data = DB::table('db_product_list')->where('Protype_ID', '=', 24)->get();

        return view('pages/products/koamtac/barcode-smartsled', ['data'=> $data]);
    }
    // koamtac accessorie
    public function accessories ()
    {
        $data = DB::table('db_product_list')->where('Pline_ID', '=', 12)->get();

        return view('pages/products/koamtac/accessories', ['data'=> $data]);
    }
    // sam4s receipt
    public function receipt_printers ()
    {
        $data = DB::table('db_product_list')->where('Pline_ID', '=', 13)->get();

        return view('pages/products/sam4s/receipt-printers', ['data'=> $data]);
    }
    // sam4s handheld
    public function hand_held ()
    {
    $data = DB::table('db_product_list')->where('Pline_ID', '=', 14)->get();

    return view('pages/products/sam4s/hand-held', ['data'=> $data]);
    }
    // toshiba-tec label printers
    public function toshiba_tec_label_printers ()
    {
         $data = DB::table('db_product_list')->where('Pline_ID', '=', 15)->get();

         return view('pages/products/toshiba-tec/label-printers', ['data'=> $data]);
    }

    // Unitech mobile computers
    public function unitech_mobile_computer ()
    {
         $data = DB::table('db_product_list')->where('Pline_ID', '=', 16)->get();

         return view('pages/products/unitech/mobile-computer', ['data'=> $data]);
    }

    // Unitech enterprise tablet
    public function unitech_enterprise_tablet ()
    {
        $data = DB::table('db_product_list')->where('Pline_ID', '=', 17)->get();

        return view('pages/products/unitech/enterprise-tablet', ['data'=> $data]);
    }


     // ikey Medical
     public function ikey_medical()
     {
         $data = DB::table('db_product_list')
             ->WHERE('db_product_list.Protype_ID', '1' )
             ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
             ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
             ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

         return view('pages/products/ikey/medical', [
             'data'=> $data ,
         ]);
     }

    // ikey fleet
    public function ikey_fleet()
    {
        $data = DB::table('db_product_list')
            ->WHERE('db_product_list.Protype_ID', '2' )
            ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
            ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
            ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

        return view('pages/products/ikey/fleet', [
            'data'=> $data ,
        ]);
    }

    // ikey public safety
    public function ikey_public_safety()
    {
        $data = DB::table('db_product_list')
            ->WHERE('db_product_list.Protype_ID', '3' )
            ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
            ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
            ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

        return view('pages/products/ikey/public-safety', [
            'data'=> $data ,
        ]);
    }

    // ikey oil&gas
    public function ikey_oil_gas()
    {

        $data = DB::table('db_product_list')
            ->WHERE('db_product_list.Protype_ID', '4' )
            ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
            ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
            ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

        return view('pages/products/ikey/oil&gas', [
            'data'=> $data ,
        ]);
    }

    // ikey industrial
    public function ikey_industrial()
    {
        $data = DB::table('db_product_list')
        ->WHERE('db_product_list.Protype_ID', '6' )
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/ikey/industrial', [
            'data'=> $data ,
        ]);
    }

    // ikey military
    public function ikey_military()
    {
        $data = DB::table('db_product_list')
        ->WHERE('db_product_list.Protype_ID', '5' )
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/ikey/military', [
            'data'=> $data ,
        ]);
    }




}
