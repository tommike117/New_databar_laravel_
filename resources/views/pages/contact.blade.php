@extends('layouts/main-contact')



{{-- Title Website --}}
@section('title', 'CONTACT | DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')

{{-- Link CSS --}}
@section('link')

@endsection

{{-- <img src="/images/new-website/contact/Bg_content_web-01.jpg" width="100%" alt="contact"> --}}
<style>
@media (min-width: 992px){

    .bg-contact{
        background-image: url("/images/new-website/contact/Bg_content_web-1.jpg");
        background-size: contain;
        height: 100vh;
        background-repeat: no-repeat;
        background-position-y: 50%;
    }
    .tab-content .tab-pane h2{
        color: #3399ff;
        font-size: 30px;
        font-weight: 600 !important;
    }
    .tab-content .tab-pane p{
        font-weight: 500;
        color: #4d4d4d;
        font-size: 15px;
    }
    .m-icon{
        margin: 0 7px;
        width: 40px;
        height: 40px;
    }
    .mt-20{
        margin-top: 20%;
    }
    .flex-5{
        flex:0 0 41.667%;
        max-width: 41.667%;
        position: relative;
        padding-right: 15px;
        padding-left: 15px;
    }
    .flex-7{
        flex:0 0 58.333%;
        max-width: 58.333%;
        position: relative;
        padding-right: 15px;
        padding-left: 15px;
    }
    /* modal-pop-up */
    .modal-body{
        padding-left: 14%;
    }
    .modal-dialog{
        max-width: 283px !important ;
        margin: 1.75rem auto !important;
        margin-top: 20% !important;
   }
   .modal-dialog-fax{
        max-width: 283px !important ;
        margin: 1.75rem auto !important;
        margin-top: 20% !important;
   }
   .modal-content{
        position: relative;
        display: flex;
        flex-direction: column;
        width: auto;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 1.3rem !important;
        outline: 0;
        height: auto;
   }
   .modal-header{
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom:  0 !important;
        border-top-left-radius: 0.3rem;
        border-top-right-radius: 0.3rem;
   }
   .modal-title{
        margin-bottom: 0;
        line-height: 1.6;
        width: 100%;
        font-weight: 600;
        margin-left: 25px;
        margin-top: 5%;

   }
   .modal-footer{
        display: contents !important;
        align-items: center;
        justify-content: flex-end;
        padding: 1rem;
        border-top: 0 !important;
        border-bottom-right-radius: 0.3rem;
        border-bottom-left-radius: 0.3rem;
   }
   .modal-footer > p{
        color: #3399ff;
        font-size: 14px;
        text-align: center;
   }
}

@media (max-width: 767.98px){
    .modal-dialog{
        max-width: 283px !important ;
        margin: 1.75rem auto !important;
        margin-top: 40% !important;
    }
    .bg-contact{
        background-image: url("/images/new-website/contact/Bg_mobile_con-01.jpg");
        background-size: contain;
        height: 42vh;
        background-repeat: no-repeat;
        background-position-y: 100%;
        margin-left: 20px;
    }
    .tab-content{
        text-align: center;
    }
    .tab-content .tab-pane h2{
        color: #3399ff;
        font-size: 22px;
        font-weight: 600 !important;
    }
    .tab-content .tab-pane p{
        font-weight: 500;
        color: #4d4d4d;
        font-size: 13px;
    }
    .m-icon{
        margin: 0 6px;
        width: 35px;
        height: 35px;
    }
    .mt-20{
        margin-top: 20%;
    }
    .flex-5{
        flex:0 0 100%;
        max-width: 100%;
        position: relative;
        padding-right: 15px;
        padding-left: 15px;
    }
    .flex-7{
        flex:0 0 100%;
        max-width: 100%;
        position: relative;
        padding-right: 15px;
        padding-left: 15px;
    }
}

@media (min-width: 768px) and (max-width: 991.98px) {
    .bg-contact{
        background-image: url("/images/new-website/contact/Bg_content_tap-1.jpg");
        background-size: contain;
        height: 42vh;
        background-repeat: no-repeat;
        background-position-y: 100%;
        margin-left: 20px;
    }
    .tab-content .tab-pane h2{
        color: #3399ff;
        font-size: 25px;
        font-weight: 600 !important;
    }
    .tab-content .tab-pane p{
        font-weight: 500;
        color: #4d4d4d;
        font-size: 15px;
    }
    .m-icon{
        margin: 0px 10px;
        width: 45px;
        height: 45px;
    }
    .mt-20{
        margin-top: 20%;
    }
    .flex-5{
        flex:0 0 100%;
        max-width: 100%;
        position: relative;
        padding-right: 15px;
        padding-left: 20px;
    }
    .flex-7{
        flex:0 0 100%;
        max-width: 100%;
        position: relative;
        padding-right: 15px;
        padding-left: 20px;
    }
}
</style>



{{-- Body HTML --}}
@section('content')

    <div class="container-fluid">
        <div class="row flex-row-reverse">

            <div class="flex-5" style="height: 58vh;">
                <div class="row justify-content-md-center mt-20">
                    <div class="col-lg-9 col-md-10 col-12 text-right" >
                        <ul class="nav nav-pills mb-2 justify-content-end"  id="pills-tab" role="tablist">
                            <li class="nav-item m-1" >
                                <a class="text-white btn btn-sm btn-outline-databar-blue active" style="color:black !important;" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">EN</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="text-white btn btn-sm btn-outline-databar-blue "  style="color:black !important;" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">TH</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active"  id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h2 class="address-header font-weight-bolder" style="margin-bottom:12px;">DATABAR COMPANY LIMITED <br> (Branch 00001)</h2>
                                <p class="address-detail">1448/15 Crystal Design Center (CDC),<br>
                                L2, 2FL., Room 202, 204, 206, 208,<br>
                                Soi Ladprao 87 (Chandra Suk), Praditmanuthum Rd. <br>,
                                Klongjan, Bangkapi, Bangkok 10240 THAILAND.</p>
                            <p>Tax ID &nbsp;0105557033628</p>
                            </div>
                            <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <h2 class="address-header font-weight-bolder" style="margin-bottom:12px;">บริษัท ดาต้าบาร์ จำกัด <br>(สาขาที่ 00001)</h2>
                                <p class="address-detail">1448/15 คริสตัล ดีไซน์ เซ็นเตอร์ (CDC) <br>
                                อาคาร L2 ชั้น 2 ห้องเลขที่ 202, 204, 206, 208 <br>
                                ซอยลาดพร้าว 87 (จันทราสุข) ถนนประดิษฐ์มนูธรรม<br>
                                แขวงคลองจั่น เขตบางกะปิ กรุงเทพฯ 10240.</p>
                                <p>เลขประจำตัวผู้เสียภาษีอากร &nbsp;0105557033628</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" style="margin-top: 7%">
                    <div class="row">
                        <div class="col-12" style="display: flex; margin:auto;justify-content: flex-end;padding-right: 12%;">
                            <img src="/images/new-website/contact/icon_con-04.png" id="fax" style="cursor: pointer;"  class="m-icon" alt="#">
                            <img src="/images/new-website/contact/icon_con-05.png" id="phone" style="cursor: pointer;" class="m-icon" alt="#">
                            <img src="/images/new-website/contact/icon_con-06.png" id="mail" style="cursor: pointer;"  class="m-icon" alt="#">
                            <a href="https://www.facebook.com/VAD.databar/" target="_blank">
                                <img src="/images/new-website/contact/icon_con-07.png" class="m-icon" alt="#">
                            </a>
                            <img src="/images/new-website/contact/icon_con-08.png" id="line" class="m-icon" style="cursor: pointer;" alt="#">
                            <a href="https://goo.gl/maps/wN6RALf4VMcs4cnP6" target="_blank">
                                <img src="/images/new-website/contact/icon_con-09.png" class="m-icon" alt="#">
                            </a>

                        </div>
                    </div>
                </div>



            </div>
            <div class="flex-7">
                <div class="bg-contact">
                </div>
            </div>
        </div>
    </div>





    {{-- line --}}
    <div class="modal fade" id="line-Modal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Line</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <img src="images/new-website/lineads.png" alt="barcode">
            </div>
            <div class="modal-footer">
                <p>Add line friend via QR code</p>
            </div>
          </div>
        </div>
    </div>
    {{-- phone-number --}}
    <div class="modal fade" id="phone-Modal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Phone Number</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4 style="color:3399ff">+66(0)2-102-2591</h4>
            </div>

          </div>
        </div>
    </div>
    {{-- fax-number --}}
    <div class="modal fade" id="fax-Modal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fax Number</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4 style="color:3399ff">+66(0)2-102-2590</h4>
            </div>

          </div>
        </div>
    </div>
     {{-- mail- --}}
     <div class="modal fade" id="mail-Modal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Mail</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4 style="color:3399ff">Sales@databar.co.th</h4>
            </div>

          </div>
        </div>
    </div>
@endsection


@section('script')


<script>
    $(document).ready(function(){
        $("#line").click(function(){
            $("#line-Modal").modal();
        });
        $("#phone").click(function(){
            $("#phone-Modal").modal();
        });
        $("#fax").click(function(){
            $("#fax-Modal").modal();
        });
        $("#mail").click(function(){
            $("#mail-Modal").modal();
        });
    });
</script>

@endsection
