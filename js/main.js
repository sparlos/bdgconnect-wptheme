AOS.init();

(function($){

    $(".navbar-toggler").on("click", function(){
        $(".navbar-mobile").css("width", "100vw");
        $("html").css("overflow-y", "hidden");
        $(".navbar-mobile li").addClass("navbar-active");
      });
      
      $(".navbar-close").on("click", function(){
        $(".navbar-mobile").css("width", "0");
        $("html").css("overflow-y", "initial");
        $(".navbar-mobile li").removeClass("navbar-active");
      });

    $(".expandable-cards .card .card-header .btn").on("click", function(){
      if($(this).hasClass("btn__active")) {
        $(this).removeClass("btn__active");
        $(this).find(".fas").removeClass('fa-minus');
        $(this).find(".fas").addClass('fa-plus');
      } else {
        $(".expandable-cards .card .card-header .btn").removeClass("btn__active");
        $(".expandable-cards .card .card-header .btn .fas").removeClass("fa-minus");
        $(".expandable-cards .card .card-header .btn .fas").addClass("fa-plus");
        $(this).addClass("btn__active");
        $(this).find(".fas").addClass('fa-minus');
        $(this).find(".fas").removeClass('fa-plus');
      }
    });

    //Accomodate navbar mobile height for browsers w/ address bars
    var windowHeight = window.innerHeight + 'px';
    $('body').css('height', windowHeight);
    $('.navbar-mobile').css('height', windowHeight);
    
})( jQuery );
