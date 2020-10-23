

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
    <h2 class="text-center">Insert Product Type</h2>
    <br>
    <form action="insert-product-type" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Brand select</label>
            <select id="brand" name="Brand_ID" class="form-control">
                @foreach ($brandname as $item)
                <option value="{{$item->Brand_ID}}">{{$item->Brand_Name}}</option>
                @endforeach
            </select>
        </div>

        <!-- Product Line Select -->
        <div class="form-group">
            <label for="exampleFormControlSelect1">Product Line Select</label>
            <select id="product_line" name="Pline_ID" class="form-control">
            </select>
        </div>

        <!-- Product Line Name -->
        <div class="form-group">
            <label for="exampleInputEmail1">Product Type Name</label>
            <input type="text" name="Protype_Name" class="form-control" placeholder="Product Type Name">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{URL::to('admin/manage-product')}}" class="btn btn-inverse">Back</a>
    </form>


    <table border="1" class="table ">
        <thead style="text-align:left;" class="thead-dark">
            <th>No.</th>
            <th>Brand</th>
            <th>Product Line</th>
            <th>Product Type</th>
        </thead>
        <tbody style="text-align:left;">
        @foreach ($table_data as $key => $item)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$item->Brand_Name}}</td>
                <td>{{$item->Pline_Name}}</td>
                <td>{{$item->Protype_Name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {

       
        $("select[name='Brand_ID").change(function (e) {
            e.preventDefault();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            var product_line = $('#product_line');
            var brand = $("select[name='Brand_ID']").val();
            // console.log(brand);
            $.ajax({
                type: 'POST',
                url: '{{URL::to("admin/manage/ajaxRequestPost")}}',
                data: {
                    brand: brand,
                },
                success: function (data) {
                  product_line.empty();
                  $.each(JSON.parse(data),function(key,value){
                    product_line.append('<option value="'+  value.Pline_ID +'">'+  value.Pline_Name +'</option>');
                  });
                }
            });
        });
    });

</script>
