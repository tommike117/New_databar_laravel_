
$(function(){

  AOS.init();



    $("#detail_layer4").on("click",function(){
      if($(".plus1").hasClass("fa-plus") == true){
        if($(".detail_layer1").hasClass("show") == true){
          $(".detail_layer1").slideUp("slow").removeClass("show");
          $(".plus4").removeClass("fa-minus").addClass("fa-plus");
        }
        else if($(".detail_layer2").hasClass("show") == true){
          $(".detail_layer2").slideUp("slow").removeClass("show");
          $(".plus3").removeClass("fa-minus").addClass("fa-plus");
        }
        else if($(".detail_layer3").hasClass("show") == true){
          $(".detail_layer3").slideUp("slow").removeClass("show");
          $(".plus2").removeClass("fa-minus").addClass("fa-plus");
        }
        $(".detail_layer4").slideDown("slow").addClass("show");
        $("#image_layer4").css("opacity","1");
        $("#image_layer3").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer2").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer1").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $(".plus1").removeClass("fa-plus").addClass("fa-minus");

      }
      else if($(".plus1").hasClass("fa-minus") == true){
        $(".detail_layer4").slideUp("slow");
        $("#image_layer3").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer2").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer1").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $(".plus1").removeClass("fa-minus").addClass("fa-plus");
        $(".detail_layer4").removeClass("show");
      }
    });

    $("#detail_layer3").on("click",function(){
      if($(".plus2").hasClass("fa-plus") == true){
        if($(".detail_layer4").hasClass("show") == true){
          $(".detail_layer4").slideUp("slow").removeClass("show");
          $(".plus1").removeClass("fa-minus").addClass("fa-plus");
        }
        else if($(".detail_layer2").hasClass("show") == true){
          $(".detail_layer2").slideUp("slow").removeClass("show");
          $(".plus3").removeClass("fa-minus").addClass("fa-plus");
        }
        else if($(".detail_layer1").hasClass("show") == true){
          $(".detail_layer1").slideUp("slow").removeClass("show");
          $(".plus4").removeClass("fa-minus").addClass("fa-plus");
        }
        $(".detail_layer3").slideDown("slow").addClass("show");
        $("#image_layer3").css("opacity","1");
        $("#image_layer4").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer2").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer1").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $(".plus2").removeClass("fa-plus").addClass("fa-minus");
      }
      else if($(".plus2").hasClass("fa-minus") == true){
        $(".detail_layer3").slideUp("slow");
        $("#image_layer4").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer2").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer1").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $(".plus2").removeClass("fa-minus").addClass("fa-plus");
        $(".detail_layer3").removeClass("show");
      }
    });

    $("#detail_layer2").on("click",function(){
      if($(".plus3").hasClass("fa-plus") == true){
        if($(".detail_layer4").hasClass("show") == true){
          $(".detail_layer4").slideUp("slow").removeClass("show");
          $(".plus1").removeClass("fa-minus").addClass("fa-plus");
        }
        else if($(".detail_layer3").hasClass("show") == true){
          $(".detail_layer3").slideUp("slow").removeClass("show");
          $(".plus2").removeClass("fa-minus").addClass("fa-plus");
        }
        else if($(".detail_layer1").hasClass("show") == true){
          $(".detail_layer1").slideUp("slow").removeClass("show");
          $(".plus4").removeClass("fa-minus").addClass("fa-plus");
        }
        $(".detail_layer2").slideDown("slow").addClass("show");
        $("#image_layer2").css("opacity","1");
        $("#image_layer4").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer3").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer1").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $(".plus3").removeClass("fa-plus").addClass("fa-minus");
      }
      else if($(".plus3").hasClass("fa-minus") == true){
        $(".detail_layer2").slideUp("slow").addClass("show");
        $("#image_layer4").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer3").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer1").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $(".plus3").removeClass("fa-minus").addClass("fa-plus");
        $(".detail_layer2").removeClass("show");
      }
    });

    $("#detail_layer1").on("click",function(){
      if($(".plus4").hasClass("fa-plus") == true){
        if($(".detail_layer4").hasClass("show") == true){
          $(".detail_layer4").slideUp("slow").removeClass("show");
          $(".plus1").removeClass("fa-minus").addClass("fa-plus");
        }
        else if($(".detail_layer3").hasClass("show") == true){
          $(".detail_layer3").slideUp("slow").removeClass("show");
          $(".plus2").removeClass("fa-minus").addClass("fa-plus");
        }
        else if($(".detail_layer2").hasClass("show") == true){
          $(".detail_layer2").slideUp("slow").removeClass("show");
          $(".plus3").removeClass("fa-minus").addClass("fa-plus");
        }
        $(".detail_layer1").slideDown("slow").addClass("show");
        $("#image_layer1").css("opacity","1");
        $("#image_layer4").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer3").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer2").css({
          "opacity":"0.2",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $(".plus4").removeClass("fa-plus").addClass("fa-minus");
      }
      else if($(".plus4").hasClass("fa-minus") == true){
        $(".detail_layer1").slideUp("slow");
        $("#image_layer4").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer3").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $("#image_layer2").css({
          "opacity":"1",
          "transition-timing-function": "ease-in-out",
          "transition-duration":" 0.6s",
        });
        $(".plus4").removeClass("fa-minus").addClass("fa-plus");
        $(".detail_layer1").removeClass("show");
      }
    });

    $("#menu1").css("opacity","1");

  });

