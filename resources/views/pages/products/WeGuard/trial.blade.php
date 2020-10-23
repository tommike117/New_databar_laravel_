


{{-- Include  --}}
@extends('layouts/main')



{{-- Title Website --}}
@section('title', 'Trial | Mobile Device Management | WeGuard | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')
{{-- <link rel="stylesheet" href="{{URL::asset('css/page-style/WeGuard/style.css')}}"> --}}

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
            <form action="{{ route('wecontact.trial') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Regis_Company">Company Name*</label>
                        <input type="text" name="Regis_Company" class="form-control" id="Regis_Company"  placeholder="Company’s Name" required="">
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

                    {{-- <input data-provide="datepicker">
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div> --}}

                </form>
            </div>
          </div>
        </div>
      </div>

</div>

@endsection
