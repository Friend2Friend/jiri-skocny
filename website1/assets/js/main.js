;$(function(){

    $("body").show();

    // menu buttons handlers

    var close       = $("#cross");
    var bars        = $("#bars");
    var overlayMenu = $(".overlay-container");
    var body        = $("body");

    bars.on("click", function(){
        overlayMenu.show();

        $(this).hide();

        close.show();

        body.addClass("overflow-hidden");

        event.preventDefault();
    });

    close.on("click",function(){
        $(this).hide();
        bars.show();
        overlayMenu.hide();
        body.removeClass("overflow-hidden");

        event.preventDefault();
    });

    //gallery images handlers

    var galleryAnchor = $("#gallery-section").find("a");
    var galleryImg    = $("div.gallery-image img");
    var i             = 0;


    galleryImg.each(function(){
        i++;
        $(this).attr("id", "gallery-image-"+i);
        $(this).attr("src", "assets/image/gallery/gallery"+ i +".jpeg");
    });

    var map = $("#map-wrapper");

    //box images handlers

    var boxImg = $("div.box-image div");
    var i      = 0;


    boxImg.each(function(){
        i++;
        $(this).attr("id", "box-img-"+i);
        $(this).css("background-image", "url(assets/image/gym"+ i +".jpeg)");
    });

    var map = $("#map-wrapper");

    //scroll to top 

    var arrow = $(".scroll-to-top");
    var top   = $("#header-nav");

    $(document).on("scroll", function(){
        var y = $(this).scrollTop();

        if ( y > 600 ) {
            arrow.fadeIn();
        }else {
            arrow.fadeOut();
        }
    });

    arrow.on("click", function(){
        
        $("html, body").animate({
            scrollTop: 0
        }, "slow");

        return false;
    });

    // services table handlers

    var studentList = $("#student-list");
    var adultList   = $("#adult-list");
    var studentBtn  = $("#student");
    var adultBtn    = $("#adult");
    var bold        = $("#trigger-age").find("a");

    studentList.hide();

    bold.on("click", function(){
        var currentList = $($(this).attr("href"));

        $(this).addClass("bold");
        $(this).siblings().removeClass("bold");

        $(currentList).show();
        $(currentList).siblings().hide();

        return false;
    });

    // scrollTo function

        $.fn.scrollTo = function(){
            $(this).on("click", function(){
                var clicked = $($(this).attr("href"));
                $("html, body").animate({
                    scrollTop: clicked.offset().top
                }, "slow");

                return false;
            });
        };

    $("#header-overlay-hero").find("a").scrollTo();

    $(".span-arrow").find("a").scrollTo();

});