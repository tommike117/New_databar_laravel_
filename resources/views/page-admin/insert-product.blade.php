@extends('layouts/admin')
<meta name="csrf-token" content="{{ csrf_token() }}" />


@section('link')
<style>
        table{
            border:1px solid lightgrey;
        }
    </style>
@endsection

<div class="container">
        <h2 class="text-center">Create Product</h2>
        <br>
            <form action="insert-product" method="post" enctype="multipart/form-data">
              @csrf
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Brand select</label>
                <select id="brand" name="Brand_ID" class="form-control">
                @foreach ($select_brand as $item)
                    <option value="{{$item->Brand_ID}}">{{$item->Brand_Name}}</option>
                @endforeach
                </select>
              </div>
    
              <!-- Product Line Select -->
              <div class="form-group col-md-4">
                <label for="product_line">Product Line Select</label>
                <select id="product_line" name="Pline_ID" class="form-control">
                </select>
              </div>
    
              <!-- Product Line Name -->
              <div class="form-group col-md-4">
                  <label for="product_type">Product Type Select</label>
                  <select id="product_type" name="Protype_ID" class="form-control">
             
                  </select>
              </div>
    
              <div class="form-group col-md-12">
                <label for="Product_Name">Product Name</label>
                <input type="text" class="form-control" name="Product_Name" id="Product_Name" placeholder="">
              </div>
    
              <div class="form-group col-md-12">
                <label for="Product_Description">Product Description</label>
                <input type="text" class="form-control" name="Product_Description" id="Product_Description" placeholder="">
              </div>
    
              <div class="form-group">
                <label for="upload_image">Upload File Image</label>
                <input type="file" name="filUpload" class="form-control-file" id="upload_image">
              </div>
    
            </div>
            
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="" class="btn btn-inverse">Back</a>
            </form>
    
            <h4 class="mt-5">Product Line</h4>
            <table class="table ">
              <thead class="thead-dark">
                <th>No.</th> 
                <th>Brand</th> 
                <th>Product Line</th> 
                <th>Product Type</th> 
                <th>Product Name</th> 
              </thead>
              <tbody>
              <tr>
                <td width="10px"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tbody>
    
            </table>
    
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {

       
        $("#brand").change(function (e) {
            e.preventDefault();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            var product_line = $('#product_line');  
            var product_type = $('#product_type');
            var brand = $("select[name='Brand_ID']").val();
            var pro_line = $("#product_line").val();
            
            $("#product_line").change(function(){
              var pro_line = $("#product_line").val();
              console.log(pro_line);
            });
            $.ajax({
                type: 'POST',
                url: '{{URL::to("admin/manage/ajaxRequestPost")}}',
                data: {
                  brand_name: brand,
                  line_name: pro_line,
                    // Protype_ID:Protype_ID,
                },
                success: function (data) {
                  product_line.empty();
                  $.each(JSON.parse(data),function(key,value){
                    product_line.append('<option value="'+  value.Pline_ID +'">'+  value.Pline_Name +'</option>');
                    // console.log(data);
                  });
                }
            });
        });
    });

</script>
