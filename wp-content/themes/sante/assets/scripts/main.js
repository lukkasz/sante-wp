$(function(){

    var $owl = $('.owl-carousel');

    $owl.owlCarousel({
        items: 4,
        itemsDesktopSmall: [1025, 3],
        itemsTablet: [750, 2],
        itemsMobile: [479, 1],
        pagination: false,
        autoPlay: 4000
    });

    $('.glyphicon-menu-left').click(function(){
        $owl.trigger('owl.prev');
    });

    $('.glyphicon-menu-right').click(function(){
        $owl.trigger('owl.next');
    });
});

$(function(){
    var $galleryContent = $('.gallery__content');

    $galleryContent.imagesLoaded(function(){
        $galleryContent.removeClass('is-loading');
        $galleryContent.isotope({
            layoutMode: 'fitRows',
            itemSelector: '.gallery__item',
            percentPosition: true,
            fitRows: {
                gutter: 10
            },
            filter: '*'
        });
    });

    $('.gallery__nav__item').on('click', function(e){
        e.preventDefault();
        var filter = $(this).attr('data-filter');
        $galleryContent.isotope({ filter: filter });
        $('a.active').removeClass('active');
    });
});

// This script improves teb panels


// Take hash from SELECT elemnt and open tab that tab on mobile devices
$(function(){
   $('#navTabs--mobile').on('change', function(e){
        var link = '#navTabs a[href="' + $(this).val() + '"]';
        $(link).tab('show');
   });

    //$(window).on('load', function(){
    //     var loc = window.location;
    //     var link;
    //     if (loc.hash) {
    //         nk = '#navTabs a[href="' + loc.hash + '"]';
    //         ta$(link).tab('show');
    //     }
    // });
   //};
});


// this function takes hash from external link and open tab in service.html with that hash
$(function(){
    var loc = window.location;
    var link;

    if (loc.hash) {
        link = '#navTabs a[href="' + loc.hash + '"]';
        $(link).tab('show');
    }
});