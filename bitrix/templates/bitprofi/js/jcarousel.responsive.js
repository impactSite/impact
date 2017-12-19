(function(jQuery) {
    jQuery(function() {
        var jcarousel = jQuery('.jcarousel');

        jcarousel
            .on('jcarousel:reload jcarousel:create ', function () {
                var carousel = jQuery(this),
                    width = carousel.innerWidth();

                if (width >= 500) {
                    width = width / 1;
                } else if (width <= 430) {
                    width = width / 1;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');                
            })
            .jcarousel({
                wrap: 'circular'
            });

        jQuery('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        jQuery('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });

        jQuery('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                jQuery(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                jQuery(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
    });
    
    var carousel1 = jQuery('.jcarousel1')

    carousel1
    	.on('jcarousel:reload jcarousel:create ', function () {
                var carousel = jQuery(this),
                    width = carousel.innerWidth();

                if (width >= 600) {
                    width = width / 3;
                } else if (width >= 350) {
                    width = width / 3;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');                
            })
            .jcarousel({
		    	wrap: 'circular'
		    });
    
    jQuery('.jcarousel1-control-prev').jcarouselControl({
	    target: '-=1',
	    carousel: carousel1
	});

	jQuery('.jcarousel1-control-next').jcarouselControl({
	    target: '+=1',
	    carousel: carousel1
	});

	    var carousel2 = jQuery('.jcarousel2')

    carousel2
    	.on('jcarousel:reload jcarousel:create ', function () {
                var carousel = jQuery(this),
                    width = carousel.innerWidth();

                if (width >= 600) {
                    width = width / 4;
                } else if (width >= 350) {
                    width = width / 4;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');                
            })
            .jcarousel({
		    	wrap: 'circular'
		    });
    
    jQuery('.jcarousel2-control-prev').jcarouselControl({
	    target: '-=1',
	    carousel: carousel2
	});

	jQuery('.jcarousel2-control-next').jcarouselControl({
	    target: '+=1',
	    carousel: carousel2
	});
     
})(jQuery);