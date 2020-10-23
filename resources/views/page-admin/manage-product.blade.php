

{{-- @extends('layouts/admin') --}}

{{-- @section('link')     --}}
<style>

    body{
        overflow: hidden;
    }
    .row {
        height: 100%;
    display: flex;
    flex: 0 0 100%;
    max-width: 100%;
    flex-direction: column;
    justify-content: center;

    }

    h1{
        font-family: sans-serif;
    }

    .block {
        display: flex;
        flex: 0 0 24% !important;
        max-width: 24% !important;
        height: 340px;
        margin: auto;
        /* background:#1d2d5a; */
        justify-content: center;
        align-items: center;
        transition: 0.5s;
    }
    .block:hover{
        text-shadow: 2px 0px 5px #414141;
    }

    /* .block:hover{
            opacity: 0.7;
        } */
    a {
        text-decoration: none !important;
        color: #eeeeee8c;
    }

    a:hover {
        color: black !important;
        text-shadow: 2px 0px 5px #414141;
    background: transparent;
    padding: 40px;

    }
   

</style>
{{-- @endsection --}}





<div class="row m-auto">

        <a class="block" href="{{URL::to('admin/manage/insert-brand')}}">
            <div class="block-1">
                <div class="block-inside">
                    <h1>Add Brand</h1>
                </div>
            </div>
        </a>
    
        <a class="block" href="{{URL::to('admin/manage/insert-product-line')}}">
            <div class="block-2">
                <h1>Add Product Line</h1>
            </div>
        </a>
        <a class="block" href="{{URL::to('admin/manage/insert-product-type')}}">
            <div class="block-3">
                <h1>Add Product Type</h1>
            </div>
        </a>
        <a class="block" href="{{URL::to('admin/manage/insert-product')}}">
            <div class="block-4">
                <h1>Add Product</h1>
            </div>
        </a>
    </div>



@section('script')

@endsection
