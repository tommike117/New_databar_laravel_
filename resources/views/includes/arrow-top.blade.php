
<div>
    <a id="button">
        <img src="/images/new-website/customers/arow-02.png" width="100%" alt="#">
    </a>
</div>

<style>
    #button {
  display: inline-block;
  background-color: none;
  width: 40px;
  height: 40px;
  text-align: center;
  border-radius: 4px;
  position: fixed;
  bottom: 40px;
  right: 40px;
  transition: background-color .3s,
    opacity .5s, visibility .5s;
  opacity: 0;
  visibility: hidden;
  z-index: 1000;
}

#button:hover {
  cursor: pointer;
  background-color: none;
}
#button:active {
  background-color: none;
}
#button.show {
  opacity: 1;
  visibility: visible;
}
</style>
<script>

    var btn = $('#button');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });


    </script>
