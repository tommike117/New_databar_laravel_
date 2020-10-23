    function openNav() {
      document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.height = "0%";
    }

    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("nav-mobile").style.top = "-65px";
        document.getElementById("nav-tablet").style.top = "-65px";
      } else {
        document.getElementById("nav-mobile").style.top = "0";
        document.getElementById("nav-tablet").style.top = "0";
      }
      if (document.body.scrollTop > 750 || document.documentElement.scrollTop > 750) {
        document.getElementById("navbar").style.top = "0";
        document.getElementById("navbar2").style.top = "-300px";
      } else {
        document.getElementById("navbar").style.top = "-300px";
        document.getElementById("navbar2").style.top = "0";
      }
    }


