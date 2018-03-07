;$(function(){

  //variables

  var anchor       = $("#gallery-section").find("a");
  var firstAnchor  = anchor.first();
  var lastAnchor   = anchor.last();
  var overlay      = $(".overlay");
  var close        = $(".overlay").find("span");
  var lightBoxItem = $('.lightbox-item');

  anchor.addClass("unclicked");

  // add source to each anchor

  var i = 0;

  anchor.each(function(){
    i++
    $(this).attr("href", "assets/image/gallery/gallery"+i+".jpeg");
  });

  // display overlay and triggered image

  var next = $("#right-arrow");
    var prev = $("#left-arrow");

  anchor.on("click", function(){

    var currentImage = $(this).next().attr("href");
    var url = $(this).children().children().attr('src');

    // overlay show

    overlay.show();
    $("body").addClass("overflow-hidden");

    $(this).removeClass("unclicked").addClass("clicked");

    lightBoxItem.attr("src", url );

    return false
  });

  // show next image within overlay 

  next.on("click", function(){

    var current = $(".clicked");
    var nextImage = current.next();
    var nextUrl = nextImage.attr("href");
    firstAnchorUrl = firstAnchor.attr("href");

   if (nextImage.length > 0) {
    current.removeClass("clicked").addClass("unclicked");

    nextImage.addClass("clicked").removeClass("unclicked");

    lightBoxItem.attr("src", nextUrl );
   }

   else {

    current.removeClass("clicked").addClass("unclicked");

    firstAnchor.addClass("clicked").removeClass("unclicked");

    lightBoxItem.attr("src", firstAnchorUrl );

   }

    return false

  });

  // show prev image within overlay 

  prev.on("click", function(){

    var current = $(".clicked");
    var prevImage = current.prev();
    var prevUrl = prevImage.attr("href");
    lastAnchorUrl = lastAnchor.attr("href");

  if (prevImage.length > 0) {
    current.removeClass("clicked").addClass("unclicked");

    prevImage.addClass("clicked").removeClass("unclicked");

    lightBoxItem.attr("src", prevUrl );
   }

   else {

    current.removeClass("clicked").addClass("unclicked");

    lastAnchor.addClass("clicked").removeClass("unclicked");

    lightBoxItem.attr("src", lastAnchorUrl );

   }

    return false

  });

   //overlay hide

   close.on("click", function(){
    overlay.hide();
    $("body").removeClass("overflow-hidden");

    if (anchor.hasClass("clicked")) {
      anchor.removeClass("clicked").addClass("unclicked");
    }

    return false;
  });

});