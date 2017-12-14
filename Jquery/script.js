$(function() {
    
    $("button").click(function() {
        $("#box").fadeOut(1000);
    });

    //$("h2, h3, h4").css("border", "solid 1px red");

    //$("div#container").css("border", "dotted 2px green");

    //$("p.lead").css("border", "dashed 3px blue");

    //$("li:first").css("border", "double 3px orange");

    //$("p:even").css("border", "solid 2px blue");
    //$("p:odd").css("border", "solid 2px red");

    //$("div em").css("border", "solid 1px red");

    //$("div > p").css("border", "dashed 2px green");

    //$(":header").css("color", "red");

    //$("div:contains('Tara')").css("color", "red");


    /*--------------------
    jQUERY EVENT METHODS
    ---------------------*/

    $("#box").click(function() {
        alert("you just clicked the box!");
    });

    $("input").blur(function() {

        if( $(this).val() == "") {
            $(this).css("border", "solid 1px red");
            $("#box").text("You forgot to add text!");
        }

    });

    $("input").keydown(function() {
        if( $(this).val !== "") {
            $(this).css("border", "solid 1px #777");
            $("#box").text("Yaaay, there's text!");
        }
    });

    $("#box").hover(function() {
        $(this).text("you hovered!");
    }, function() {
        $(this).text("aww, no more hover...");
    });

    /*JQUERY CHAINING */

    $(".notification-bar").delay(1000).slideDown().delay(1000).fadeOut();


/* -------------------------------
   jQUERY HIDE/SHOW
   ------------------------------- */

  // $("h1").hide();
  //$("div.hidden").show();

  //$("p").fadeout();
  //$("div.hidden").fadeIn(4000);
  $("#box1").click(function() {
    $(this).fadeTo(2000, 0.25, function() {
        $(this).slideUp();
    });

    $("div.hidden").slideDown();

    $("button").click(function() {
        $("#box1").slideToggle();
    })
  
});

/* -------------------------------
 jQUERY ANIMATE
 ------------------------------- */
$("#left").click(function() {

    $(".box").animate({
        left: "-=40px",
        fontSize: "+=2px"
    }, function() {
        
    }); 
});

$("#up").click(function() {
    
    $(".box").animate({
        top: "-=40px",
        opacity: "+=0.1"
    }, function() {
        
    }); 

});

$("#right").click(function() {
    
    $(".box").animate({
        left: "+=40px",
        fontSize: "-=2px"
    }, function() {
        
    }); 

});

$("#down").click(function() {
    
    $(".box").animate({
        top: "+=40px",
        opacity: "-=0.1"
    }, function() {
        
    }); 

});

/* -----------------
jQUERY CSS
-------------------*/

$("#circle2").css({ 
    "background": "#8a8d22", 
    "display": "inline-block", 
    "color": "white", 
    "text-align": "center", 
    "line-height": "140px", 
    "height": "140px", 
    "width": "140px"
}).addClass("circleShape");








});

