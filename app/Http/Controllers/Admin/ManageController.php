<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use DB;
use Auth;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // dd($data);
        // $this->Auth_User = session()->get('User_Name');
        // $this->Auth_Status = session()->get('Status');
        // if ($this->Auth_Status != "Admin"){
        //     // return view('page-admin/manage-product');
        //     // dd($this->Auth_Status);
        //     redirect('admin/login')->send();
        //     // return 'No';
        // }

    }


    public function index()
    {
        // dd(Auth::user());
            return view('page-admin/manage-product');
        
    }

    public function insertbrand(Request $request)
    {
        if ($request->method() == 'GET')
        {
            // dd('Yes');
            $brandname = DB::table('db_brand')
            ->orderBy('Brand_Name')
            ->get();
        
            return view('page-admin/insert-brand', [
                'brandname' => $brandname,
                ]);
        }
        else
        {
                $post = $request->input();
                unset($post['_token']);
                $pro_brand = DB::table('db_brand')
                ->where('Brand_Name',$post['Brand_Name'])
                -> first();

                if($pro_brand == NULL){
                    // $pro_brand = DB::table('db_brand')
                    // ->insert($post);

                    $id = DB::table('db_brand')->insert($post);
                    if(empty($id)){    
                        Log::error('Failed to insert row into database.');
                        
                    }

                    return redirect('admin/manage/insert-brand');

                }else{

                    // $validatedData = $request->validate([
                    //     'title' => 'Test',
                    //     'body' => 'ss',
                    // ]);

                    return redirect('admin/manage/insert-brand');

                }

        }

    }
   
 

    public function insert_product_line(Request $request)
    {

        if ($request->method() == 'GET')
        {

            $productlist = DB::table('db_brand')
            ->orderBy('db_brand.Brand_ID')
            ->get();
            
            $productline = DB::table('db_brand')
            ->join('db_product_line','db_brand.Brand_ID','=','db_product_line.Brand_ID')
            ->orderBy('db_product_line.Pline_Name')
            ->get();
        
            return view('page-admin/insert-product-line', [
                'productline' => $productline,
                'brandname'=> $productlist,
                ]);
        }
        else
        {
            $item = $request->input();
            unset($item['_token']);
            dd($item);
            $pro_line = DB::table('db_product_line')
            ->where('Pline_Name',$item['Pline_Name'])
            ->where('Brand_ID',$item['Brand_ID'])
            ->first();
            

            // if($pro_line != NULL){
            //    dd("Error");
            // }else{
            //     $item = DB::table('db_product_line')->insert($item);

            //         if(empty($item)){    
            //             Log::error('Failed to insert row into database.');
            //         }
            //         return redirect('admin/manage/insert-product-line');
            //     }

        }
        // return "Hello";
    }

    public function insert_product_type(Request $request){

        if($request->method() == 'GET'){

           $product_type_data = DB::table('db_brand')
           ->get();

           $table_data = DB::table('db_brand')
           ->join('db_product_line','db_brand.Brand_ID','=','db_product_line.Brand_ID')
           ->join('db_product_type','db_product_line.Pline_ID','=','db_product_type.Pline_ID')
           ->get();
        //    dd($product_type_data);
        
            return view('page-admin/insert-product-type', [
                'productlist' => $product_type_data,
                'brandname'=> $product_type_data,
                'table_data' => $table_data,
                ]);

        }else{
            $data = $request->input();
            unset($data['_token'],$data['Brand_ID']);

            $product_type =  DB::table('db_product_type')
            ->where('Pline_ID',$data['Pline_ID'])
            ->first();

            if($product_type == NULL){
                // dd("Error");
             }else{
                 $data = DB::table('db_product_type')->insert($data);
 
                     if(empty($data)){    
                         Log::error('Failed to insert row into database.');
                     }
                     return redirect('admin/manage/insert-product-type');
                 }

        }

    }

    public function insert_product(Request $request){
        if($request->method() == 'GET'){

            $select_brand = DB::table('db_brand')
            ->get();
            $select_product_line = DB::table('db_product_line')
            ->get();
            return view('page-admin/insert-product',[
                'select_brand' => $select_brand,
                'select_product_line' => $select_product_line,
            ]);
        }
        else{
            $data = $request->input();
            dd($data);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function ajaxRequestPost(Request $request)
    {
        $data = $request->input();

            $product = DB::table('db_product_line')
            ->where('Brand_ID',$data['brand_name'])
            ->get();
            
        return json_encode($product);
    }


}
