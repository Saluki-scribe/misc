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


});