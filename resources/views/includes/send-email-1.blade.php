<Style>
    .box{
        background-color: rgb(255, 255, 255);
        border-radius: 10px;
        box-shadow: 9px 10px 42px #dfdfdf;
        height: 542px;
        margin-bottom: 20px;
        width: 40%;
    }
    .btn{
        margin: 0 !important;
        float: right;
    }
    @media only screen and (max-width: 500px){
        .box{
            width: 67%;
        }
    }


</Style>
<secion class="section-email">
    <div class="container box">
        <h2 style="padding-top: 10px">Contact Us</h2>
        <p style="color: #3399ff">Please fill out the information <br>So we can contact you back.</p>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form style="padding-bottom: 10px" method="post" action="{{ url('SendEmailservice/send') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label style="color: #3399ff">Name*</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label style="color: #3399ff">Position/Company*</label>
                <input type="text" name="position_company" class="form-control">
            </div>
            <div class="form-group">
                <label style="color: #3399ff">Email*</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label style="color: #3399ff">Message*</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="send" value="send" class="btn btn-info">
            </div>
        </form>
    </div>
</secion>
