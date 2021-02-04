$("#smartphone").css("display","block");
$("#tablet").css("display","none");

var smartphone = $("#smartphone");
var tablet = $("#tablet");

$("#tab-smartphone").css("color","black")

$("#tab-smartphone").on("click",function(){
    smartphone.fadeIn( function(){
        smartphone.show(function(){
            $("#tab-smartphone").css("color","black");
            $("#tab-tablet").css("color","rgb(142, 142, 142)");
        });
    });
    tablet.fadeOut( function(){
        tablet.hide();
    });
});
$("#tab-tablet").on("click",function(){
    tablet.fadeIn( function(){
        tablet.show(function(){
            $("#tab-tablet").css("color","black");
            $("#tab-smartphone").css("color","rgb(142, 142, 142)");
        });
    });
    smartphone.fadeOut( function(){
        smartphone.hide();
    });
});

