
@extends('layouts/main')



{{-- Title Website --}}
@section('title', 'DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')

@section('canonical')
<link rel="canonical" href="https://www.databar.co.th/">
<link rel="stylesheet" type="text/css" href="css/page-style/samsung/galaxy-tab-active-pro/main.css">

@endsection


{{-- Link CSS --}}
@section('link')
   
@endsection

{{-- Body HTML --}}
@section('content')
<div class="text-center">
    <object id="svg-object"  type="image/svg+xml" data="images/_icon/icon-exel.svg" style="width:100px;height:30vh;"></object>
</div>

@endsection


@section('script')


<script src="js/scrollmagic/minified/gsap.min.js"></script>
<script src="js/scrollmagic/minified/jquery.min.js"></script>
<script src="js/scrollmagic/minified/ScrollMagic.min.js"></script>
<script src="js/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
<script src="js/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>

<script>
    var controller = new ScrollMagic.Controller();

    new ScrollMagic.Scene({triggerElement: "#aa3", duration: 250, offset: 400})
                .setPin("#fixed")
                // .addIndicators()
                .addTo(controller);

</script>

<script>
   
   $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })

</script>


@endsection
