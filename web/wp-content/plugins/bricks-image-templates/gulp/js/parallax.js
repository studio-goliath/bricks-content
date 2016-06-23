/**
 * Parallax
 *
 * @Author Studio goliath <hello@studio-goliath.com>
 */

"use strict";

jQuery(document).ready(function($) {

    var $parallax = $('.brick-parallax');

    if($parallax.length > 0) {

        $parallax.parent().addClass('js');

        // Init ScrollMagic
        var controller = new ScrollMagic.Controller();

        // Get all slides
        var slides = [];

        $parallax.each(function () {
            var $this = $(this);
            var id = $this.attr('id');
            var parallaxHeight = $('.brick-parallax-image', $this).height();
            parallaxHeight = parallaxHeight - parallaxHeight*0.25;
            $this.css('height', parallaxHeight+'px');
            slides.push('#' + id);
        });

        slides.forEach(function (slide, index) {

            var $parallax = $(slide).find('.brick-parallax-image');

            new ScrollMagic.Scene({
                triggerElement: slide,
                triggerHook: 1,
                duration: "100%"
            })
            .setTween(TweenMax.from($parallax, 1, {y: '20%', autoAlpha: 1, ease: Power0.easeNone}))
            .addTo(controller);

        });

        $(window).on('resize', function () {
            $parallax.each(function () {
                var $this = $(this);
                var parallaxHeight = $('.brick-parallax-image', $this).height();
                parallaxHeight = parallaxHeight - parallaxHeight*0.25;
                $this.css('height', parallaxHeight+'px');
            });
        });

    }

});