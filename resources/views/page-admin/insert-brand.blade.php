
@extends('layouts/admin')

@section('link')
    
<style>
        table{
            border:1px solid lightgrey;
        }
    </style>
@endsection  


<div class="container">
    <h2 class="text-center">Insert Brand</h2>
    <br>

    <form action="insert-brand" method="post">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Brand Name</label>
            <input type="text" name="Brand_Name" class="form-control" id="exampleBrand" placeholder="Brand Name">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{URL::to('admin/manage')}}" class="btn btn-inverse">Back</a>
    </form>

    <h4 class="mt-5">Brand Lists</h4>
    <table class="table" border="1" style="border-collapse: collapse">
        <thead class="thead-dark">
            <th>No.</th>
            <th>Brand</th>
        </thead>
        <tbody>
          @foreach ($brandname as $key => $item)
          <tr>
          <td>{{++$key}}</td>
            <td>{{$item->Brand_Name}}</td>
          </tr>
          @endforeach
        </tbody>
    </table>


</div>


</body>
