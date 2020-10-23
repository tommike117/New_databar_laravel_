<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use URL;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('page-admin/insert-product-detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request) // insert
    {
        $post = $request->input();
        $array = array(
            'description' => $post['span_primary']
        );

        // db insert
        $check = DB::table('db_product_detail')->insert($array);
        $id = DB::getPdo()->lastInsertId();;

        if(empty($check)) {
            Log::error('Failed to insert row into database.');
        } else {
            $axData = DB::table('db_product_detail')
                        ->where('id', $id)
                        ->first();

        return json_encode($axData);

        }

        //$axData['success'] = 'true';
        //$axData['message'] = 'บันทึกข้อมูลสำเร็จ';
        //return json_encode($axData);
        //return redirect ('admin/product/insert-product-detail/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) // auto after insert
    {

        $axData =  DB::table('db_product_detail')
            ->where('id', $id)
            ->first();
            
            return json_encode($axData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function img_read(Request $request) 
    {
        $post = $request->input();

        $path = "\armor-x\\";
        //$serverFilePath = public_path('images');

        $serverFilePath = $post['path_img'];
        $filter = "*.*";

        if(is_dir($serverFilePath . $path)) {

            foreach (glob($serverFilePath . $path . $filter) as $filename) {

                if (is_dir($filename))
                {
                    $axData['name'] = basename($filename);
                    $axData['type'] = "d";
                    $axData['size'] = '0';

                } else {
                    $axData['name'] = basename($filename);
                    $axData['type'] = "f";
                    $axData['size'] = filesize($filename);
                }

            $data[] = $axData;
        }
        
        echo json_encode($data);

        }
    }

    public function upload_img() 
    {
       dd("OK");
    }
         
}
