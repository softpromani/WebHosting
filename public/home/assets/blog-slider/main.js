$(function() {

    var owl = $('.slide-one-item');

    $('.slide-one-item').owlCarousel({
        center: false,
        items: 1,
        loop: true,
        stagePadding: 0,
        margin: 0,
        smartSpeed: 1500,
        autoplay: true,
        dots: false,
        nav: false,
        navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
    });

 // Handle thumbnail clicks
    $('.thumbnail li').each(function(index) {
        $(this).on('click', function(e) {
            e.preventDefault();
            
            // Trigger Owl Carousel to go to selected slide
            owl.trigger('to.owl.carousel', [index, 1500]);

            // Set active class on clicked thumbnail
            $('.thumbnail li').removeClass('active');
            $(this).addClass('active');
        });
    });

    // Handle Carousel change event to sync active tab
    owl.on('changed.owl.carousel', function(event) {
        var currentIndex = event.item.index;

        // Calculate actual index in case of loop (Owl Carousel clones elements at beginning and end)
        var count = event.item.count; // total number of slides
        var correctedIndex = (currentIndex - event.relatedTarget._clones.length / 2) % count;

        // Handle negative modulus result
        if (correctedIndex < 0) {
            correctedIndex = count + correctedIndex;
        }

        $('.thumbnail li').removeClass('active');
        $('.thumbnail li').eq(correctedIndex).addClass('active');
    });

	
})