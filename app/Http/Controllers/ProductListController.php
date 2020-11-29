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
        // $data = DB::table('db_product_list')
        //     ->whereIn('db_product_list.Protype_ID', [16] )
        //     ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        //     ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        //     ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        //     ->orderby('Plist_Priority', 'DESC')
        //     ->get();

        // return view('pages/products/bixolon/mobile-printer', [
        //     'data'=> $data ,
        // ]);
        $data = DB::table('db_product_list')->where('Pline_ID', '=', 2)->get();

        return view('pages/products/bixolon/mobile-printer', ['data'=> $data]);
    }

    // bixolon mobile computer
    public function bixolon_pos_printer ()
    {
        // $data = DB::table('db_product_list')
        //     ->whereIn('db_product_list.Protype_ID', [18,19,20] )
        //     ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        //     ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        //     ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        //     ->orderby('Plist_Priority', 'DESC')
        //     ->get();

        // return view('pages/products/bixolon/pos-printer', [
        //     'data'=> $data ,
        // ]);

        $data = DB::table('db_product_list')->where('Pline_ID', '=', 6)->get();

        return view('pages/products/bixolon/pos-printer', ['data'=> $data]);
    }

    // datalogic industrial
    public function datalogic_mobile_computer ()
    {
        $data = DB::table('db_product_list')
            ->WHERE('db_product_list.Protype_ID', '34' )
            ->WHERE('db_product_list.Plist_Status', '1')
            ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
            ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
            ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
            ->orderby('Plist_Priority', 'DESC')
            ->get();

        return view('pages/products/datalogic/mobile-computer', [
            'data'=> $data ,
        ]);
    }


    // datalogic industrial
    public function datalogic_industrial ()
    {
        $data = DB::table('db_product_list')
            ->WHERE('db_product_list.Protype_ID', '22' )
            ->WHERE('db_product_list.Plist_Status', '1')
            ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
            ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
            ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
            ->orderby('Plist_Priority', 'DESC')
            ->get();

        return view('pages/products/datalogic/industrial', [
            'data'=> $data ,
        ]);
    }

     // datalogic general duty
     public function datalogic_general_duty ()
     {
         $data = DB::table('db_product_list')
             ->WHERE('db_product_list.Protype_ID', '21' )
             ->WHERE('db_product_list.Plist_Status', '1')
             ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
             ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
             ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

         return view('pages/products/datalogic/general-duty', [
             'data'=> $data ,
         ]);
     }

      // datalogic Stationary Industrial Scanners
      public function datalogic_stationary_industrial_scanners (){

        $data = DB::table('db_product_list')
        ->WHERE('db_product_list.Protype_ID', '48' )
        ->WHERE('db_product_list.Plist_Status', '1')
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/datalogic/stationary-industrial-scanners', [
            'data'=> $data ,
        ]);
    }

      // datalogic Laser Marking Systems
      public function datalogic_laser_marking_systems ()
      {
        $data = DB::table('db_product_list')
        ->WHERE('db_product_list.Protype_ID', '49' )
        ->WHERE('db_product_list.Plist_Status', '1')
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/datalogic/laser-marking-systems', [
            'data'=> $data ,
        ]);
      }

      // datalogic Vision Systems
      public function datalogic_vision_systems ()
      {
        $data = DB::table('db_product_list')
        ->WHERE('db_product_list.Protype_ID', '50' )
        ->WHERE('db_product_list.Plist_Status', '1')
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/datalogic/vision-systems', [
            'data'=> $data ,
        ]);
      }

      // datalogic Safety
      public function datalogic_safety ()
      {
        $data = DB::table('db_product_list')
        ->WHERE('db_product_list.Protype_ID', '51' )
        ->WHERE('db_product_list.Plist_Status', '1')
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/datalogic/safety', [
            'data'=> $data ,
        ]);
      }

      // datalogic Sensors
      public function datalogic_sensors ()
      {
        $data = DB::table('db_product_list')
        ->WHERE('db_product_list.Protype_ID', '52' )
        ->WHERE('db_product_list.Plist_Status', '1')
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/datalogic/sensors', [
            'data'=> $data ,
        ]);
      }


     // ecom tablet
     public function ecom_tablet ()
     {
         $data = DB::table('db_product_list')
             ->WHERE('db_product_line.Pline_ID', '9' )
             ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
             ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
             ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

         return view('pages/products/ecom-ex/tablet', [
             'data'=> $data ,
         ]);
     }

     // ecom tablet
     public function ecom_smartphone ()
     {
         $data = DB::table('db_product_list')
             ->WHERE('db_product_list.Pline_ID', '10' )
             ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
             ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
             ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
             ->orderby('Plist_Priority', 'DESC')
             ->get();

         return view('pages/products/ecom-ex/smartphone', [
             'data'=> $data ,
         ]);
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

    // sam4s receipt-printers
    public function sam4s_receiptprinter()
    {
        $data = DB::table('db_product_list')
        ->whereIn('db_product_list.Protype_ID', [43,44,45] )
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/sam4s/receipt-printers', [
            'data'=> $data ,
        ]);
    }

    // sam4s mobile-computers
    public function sam4s_pda()
    {
        $data = DB::table('db_product_list')
        ->whereIn('db_product_list.Protype_ID', [31,32,33] )
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/sam4s/mobile-computers', [
            'data'=> $data ,
        ]);
    }

    // unitech mobile-computers
    public function unitech_mobile_computers()
    {
        $data_smartphone = DB::table('db_product_list')
        ->whereIn('db_product_list.Protype_ID', [26,27] )
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();


        $data_tablet = DB::table('db_product_list')
        ->where('db_product_list.Protype_ID', '46' )
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/unitech/mobile-computers', [
            'data_smartphone'=> $data_smartphone ,
            'data_tablet'=> $data_tablet ,
        ]);
    }

    // unitech barcode-scanners
    public function unitech_barcode_scanners()
    {
        $data = DB::table('db_product_list')
        ->where('db_product_list.Protype_ID', '47' )
        ->join('db_product_line', 'db_product_line.Pline_ID','=','db_product_list.Pline_ID')
        ->join('db_product_type', 'db_product_type.Protype_ID','=','db_product_list.Protype_ID')
        ->join('db_brand', 'db_brand.Brand_ID','=','db_product_line.Brand_ID')
        ->orderby('Plist_Priority', 'DESC')
        ->get();

        return view('pages/products/unitech/barcode-scanner', [
            'data'=> $data ,
        ]);
    }

}
