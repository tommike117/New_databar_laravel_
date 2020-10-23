


{{-- Include  --}}
@extends('layouts/main')



{{-- Title Website --}}
@section('title', 'Buy | Mobile Device Management | WeGuard | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')
{{-- <link rel="stylesheet" href="{{URL::asset('css/page-style/WeGuard/style.css')}}"> --}}
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}


@endsection

{{-- Body HTML --}}

@section('content')

    
<style>
    ::placeholder {
        color: #bdc0c3 !important;
        font-size: 13px;
    }
    .form-group{
        margin-bottom: 2rem;
    }
    .btn-success{
        width: 180px;
        letter-spacing: 4px;
        height: 40px;
    }
    .btn-success:hover{
        width: 180px;
        letter-spacing: 4px;
        height: 40px;
    }
    .card{
        border-radius: 15px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .card-body{
        padding: 1.75rem 3rem;
    }

</style>

<div class="container pt-5 pb-5">
   
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10">
          <div class="card">
            <div class="card-body">
                <h2 class="card-title">Signup</h2>
                <hr>
            @if (count($errors) > 0)
                <div class = "alert alert-danger">
                   <ul>
                      @foreach ($errors->all() as $error)
                         <li>{{ dd($error) }}</li>
                      @endforeach
                   </ul>
                </div>
           @endif
            <form action="{{ route('wecontact.buy') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Regis_Company">Company Name*</label>
                        <input type="text" name="Wec_Company" class="form-control" id="Regis_Company"  placeholder="Company’s Name" required="">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Regis_Title" id="inlineRadio1" value="Mr.">
                            <label class="form-check-label" for="inlineRadio1">Mr.</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Regis_Title" id="inlineRadio2" value="Ms.">
                            <label class="form-check-label" for="inlineRadio2">Ms.</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="Regis_FName">First Name*</label>
                        <input type="text" name="Regis_FName" class="form-control" id="Regis_FName" placeholder="First Name" required="">
                    </div>
                    <div class="form-group">
                        <label for="Regis_LName">Last Name*</label>
                        <input type="text" name="Regis_LName" class="form-control" id="Regis_LName" placeholder="Last Name" required="">
                    </div>
                    <div class="form-group">
                        <label for="Regis_Job">Job Title*</label>
                        <input type="text" name="Regis_Job" class="form-control" id="Regis_Job" placeholder="Job Title" required="">
                    </div>
                    <div class="form-group">
                        <label for="Regis_Email">Email Address*</label>
                        <input type="text" name="Regis_Email" class="form-control" id="Regis_Email" placeholder="Email Address" required="">
                    </div>
                    <div class="form-group">
                        <label for="Regis_Phone">Mobile Phone*</label>
                        <input type="text" name="Regis_Phone" class="form-control" id="Regis_Phone" placeholder="Mobile Phone" required="">
                    </div>
                    <button class="btn btn-success" type="submit" name="" value="SIGNUP">SIGNUP</button>
                </form>
                
            </div>
          </div>
        </div>
      </div>

</div>

{{-- <input data-provide="datepicker">

<div class="input-group date" data-provide="datepicker">
    <input type="text" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>

<input class="datepicker" data-date-format="mm/dd/yyyy"> --}}


@endsection

@section('script')

{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}

@endsection
