

@extends('layouts/admin')

@section('link')
    
<style>
        table{
            border:1px solid lightgrey;
        }
    </style>
@endsection  



<div class="container">
    <h2 class="text-center">Insert Product Line</h2>
    <br>
    <form action="insert-product-line" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Brand select</label>
            <select name="Brand_ID" class="form-control" id="exampleFormControlSelect1">
                @foreach ($brandname as $item)
                    <option value="{{$item->Brand_ID}}">{{$item->Brand_Name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Line Name</label>
            <input type="text" name="Pline_Name" class="form-control" id="exampleBrand" placeholder="Product Line Name">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{URL::to('admin/manage')}}" class="btn btn-inverse">Back</a>
    </form>

    <h4 class="mt-5">Product Line</h4>
    <table class="table" border="1">
        <thead class="thead-dark">
            <th>No.</th>
            <th>Brand</th>
            <th>Product Line</th>
        </thead>
        <tbody>
            @foreach ($productline as $key => $item)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$item->Brand_Name}}</td>
                <td>{{$item->Pline_Name}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
