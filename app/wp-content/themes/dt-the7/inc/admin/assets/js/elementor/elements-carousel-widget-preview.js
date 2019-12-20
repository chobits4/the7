(function($) {

    /**
     * @param $scope The Widget wrapper element as a jQuery element
     * @param $ The jQuery alias
     */
    var the7ElementsWidgetHandler = function( $scope, $ ) {
        $('.dt-owl-carousel-call').each(function() {
            $(this).the7OwlCarousel();
        });
    };

    // Make sure you run this code under Elementor.
    $( window ).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction( 'frontend/element_ready/the7_elements_carousel.default', the7ElementsWidgetHandler );
    } );

})(jQuery);