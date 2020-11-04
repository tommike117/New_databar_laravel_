
<link rel="stylesheet"  href="/css/new-website/nav-left-all-products/style_d.css">
<link rel="stylesheet"  href="/css/new-website/nav-left-all-products/style_t.css">
<link rel="stylesheet"  href="/css/new-website/nav-left-all-products/style_m.css">


    <div class="sidenav dsp-n">
        <p class=" rotate-txt" id="pathname"></p>
        <div class="box-blue">
            <figure style=" margin: 0px -14px 0rem; padding-right: 10px;">
                <a href="tel:02-102-2591">
                    <img src="/images/new-website/icon_phone-03.png" alt="" width="100%";>
                </a>
                <a href="#" target="_blank">
                    <img src="/images/new-website/icon_mail-04.png" alt="" width="100%";>
                </a>
                <a>
                    <img src="/images/new-website/icon_line-05.png" id="myline-nav"alt="" width="100%";>
                </a>
                <a href="https://www.facebook.com/VAD.databar" target="_blank">
                    <img src="/images/new-website/icon_fb-06.png" alt="" width="100%";>
                </a>
                <a href="https://goo.gl/maps/wN6RALf4VMcs4cnP6" target="_blank">
                    <img src="/images/new-website/icon_map-07.png" alt="" width="100%";>
                </a>
            </figure>
      </div>
    </div>
 <!-- Modal -->
 <div class="modal fade dsp-n" id="myline-popup-nav" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Line</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <img src="/images/new-website/lineads.png" alt="barcode">
        </div>
        <div class="modal-footer">
            <p>Add line friend via QR code</p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<style>
/* @media (max-width: 767.98px) {

    .dsp-n{
        display: none;
    }
} */
</style>



<script>

    var str = document.location.pathname
    var res = str.split("/")

    // document.getElementById("pathname").innerHTML = res[1].charAt(0).toUpperCase() + res[1].slice(1)+" _";
    document.getElementById("pathname").innerHTML = res[2].charAt(0).toUpperCase() + res[2].slice(1);
</script>
<script>
    $(document).ready(function(){
    $("#myline-nav").click(function(){
        $("#myline-popup-nav").modal();
    });
    });
</script>
