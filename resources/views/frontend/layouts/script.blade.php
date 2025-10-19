<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
  const owl = $('#features-slider');

  owl.owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    smartSpeed: 700,
    dots: false,
    nav: false
  });

  // عند تغيير السلايدر، فعّل النص المطابق
  owl.on('changed.owl.carousel', function(event) {
    let index = event.item.index - 2; // لأن Owl يضيف عناصر مكررة
    let count = $('.service-item').length;
    index = (index + count) % count;

    $('.service-item').removeClass('active');
    $(`.service-item[data-index=${index}]`).addClass('active');
  });

  // عند الضغط على عنصر من الخدمات، غيّر السلايدر
  $('.service-item').on('click', function() {
    let index = $(this).data('index');
    $('.service-item').removeClass('active');
    $(this).addClass('active');
    owl.trigger('to.owl.carousel', [index, 300]);
  });
});
</script>

    <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/rtl-demo\/*"},{"not":{"href_matches":["\/rtl-demo\/wp-*.php","\/rtl-demo\/wp-admin\/*","\/rtl-demo\/wp-content\/uploads\/sites\/3\/*","\/rtl-demo\/wp-content\/*","\/rtl-demo\/wp-content\/plugins\/*","\/rtl-demo\/wp-content\/themes\/grassroot\/*","\/rtl-demo\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
			<script>
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
				<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel="stylesheet" id="wc-blocks-style-rtl-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/wc-blocks-rtl.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-11-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/post-11.css" type="text/css" media="all">
<link rel="stylesheet" id="widget-icon-list-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/custom-widget-icon-list-rtl.min.css" type="text/css" media="all">
<link rel="stylesheet" id="e-animation-fadeInDown-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/fadeInDown.min.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-logo-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/logo.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-header-icons-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/header-icons.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-header-carticons-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/header-carticon.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-heading-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(3).css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-button-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(4).css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-repeater-content-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(5).css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-testimonial-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(6).css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-counter-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(7).css" type="text/css" media="all">
<style id="wdt-counter-inline-css" type="text/css">

@media only screen and (min-width: 480px) {
#wdt-counter-70fbe1c .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 25%;
}
}

@media only screen and (min-width: 480px) {
#wdt-counter-70fbe1c .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 25%;
}
}

@media only screen and (max-width: 1540px) {
#wdt-counter-70fbe1c .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 25%;
}
}

@media only screen and (max-width: 1280px) {
#wdt-counter-70fbe1c .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 33.33%;
}
}

@media only screen and (max-width: 1024px) {
#wdt-counter-70fbe1c .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 33.33%;
}
}

@media only screen and (max-width: 767px) {
#wdt-counter-70fbe1c .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 50%;
}
}

@media only screen and (max-width: 479px) {
#wdt-counter-70fbe1c .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (max-width: 1540px) {
#wdt-counter-70fbe1c .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 25%;
}
}

@media only screen and (max-width: 1280px) {
#wdt-counter-70fbe1c .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 33.33%;
}
}

@media only screen and (max-width: 1024px) {
#wdt-counter-70fbe1c .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 33.33%;
}
}

@media only screen and (max-width: 767px) {
#wdt-counter-70fbe1c .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 50%;
}
}

@media only screen and (max-width: 479px) {
#wdt-counter-70fbe1c .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}

</style>
<link rel="stylesheet" id="wdt-icon-box-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(8).css" type="text/css" media="all">
<style id="wdt-icon-box-inline-css" type="text/css">

@media only screen and (min-width: 480px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (min-width: 480px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}

@media only screen and (max-width: 1540px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (max-width: 1280px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (max-width: 1024px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (max-width: 767px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (max-width: 479px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (max-width: 1540px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}

@media only screen and (max-width: 1280px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}

@media only screen and (max-width: 1024px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}

@media only screen and (max-width: 767px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}

@media only screen and (max-width: 479px) {
#wdt-icon-box-bae9b17 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}

</style>
<link rel="stylesheet" id="wdt-column-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/column.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-advanced-slider-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(9).css" type="text/css" media="all">
<style id="wdt-advanced-slider-inline-css" type="text/css">

@media only screen and (min-width: 480px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 33.33%;
}
}

@media only screen and (min-width: 480px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 33.33%;
}
}

@media only screen and (max-width: 1540px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 50%;
}
}

@media only screen and (max-width: 1280px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 50%;
}
}

@media only screen and (max-width: 1024px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 33.33%;
}
}

@media only screen and (max-width: 767px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 50%;
}
}

@media only screen and (max-width: 479px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (max-width: 1540px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 50%;
}
}

@media only screen and (max-width: 1280px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 50%;
}
}

@media only screen and (max-width: 1024px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 33.33%;
}
}

@media only screen and (max-width: 767px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 50%;
}
}

@media only screen and (max-width: 479px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}


@media only screen and (min-width: 480px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 33.33%;
}
}

@media only screen and (min-width: 480px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 33.33%;
}
}

@media only screen and (max-width: 1540px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 50%;
}
}

@media only screen and (max-width: 1280px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 50%;
}
}

@media only screen and (max-width: 1024px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 33.33%;
}
}

@media only screen and (max-width: 767px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 50%;
}
}

@media only screen and (max-width: 479px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (max-width: 1540px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 50%;
}
}

@media only screen and (max-width: 1280px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 50%;
}
}

@media only screen and (max-width: 1024px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 33.33%;
}
}

@media only screen and (max-width: 767px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 50%;
}
}

@media only screen and (max-width: 479px) {
#wdt-specifications-7b165e4 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}

</style>
<link rel="stylesheet" id="wdt-image-box-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(10).css" type="text/css" media="all">
<link rel="stylesheet" id="jquery.magnific-image-box-popup-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery(1).magnific-popup.css" type="text/css" media="all">
<link rel="stylesheet" id="jquery-swiper-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/swiper(1).min.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-carousel-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/carousel.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-15966-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/post-15966.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-pricing-table-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(11).css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-15921-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/post-15921.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-advanced-toggle-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(12).css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-team-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(13).css" type="text/css" media="all">
<style id="wdt-team-inline-css" type="text/css">

@media only screen and (min-width: 480px) {
#wdt-team-12cd5a0 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 25%;
}
}

@media only screen and (min-width: 480px) {
#wdt-team-12cd5a0 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 25%;
}
}

@media only screen and (max-width: 1540px) {
#wdt-team-12cd5a0 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 25%;
}
}

@media only screen and (max-width: 1280px) {
#wdt-team-12cd5a0 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 33.33%;
}
}

@media only screen and (max-width: 1024px) {
#wdt-team-12cd5a0 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 33.33%;
}
}

@media only screen and (max-width: 767px) {
#wdt-team-12cd5a0 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (max-width: 479px) {
#wdt-team-12cd5a0 .wdt-column-wrapper:not(.wdt-snap-scroll-enabled) .wdt-column {
width: 100%;
}
}

@media only screen and (max-width: 1540px) {
#wdt-team-12cd5a0 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 25%;
}
}

@media only screen and (max-width: 1280px) {
#wdt-team-12cd5a0 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 33.33%;
}
}

@media only screen and (max-width: 1024px) {
#wdt-team-12cd5a0 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 33.33%;
}
}

@media only screen and (max-width: 767px) {
#wdt-team-12cd5a0 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}

@media only screen and (max-width: 479px) {
#wdt-team-12cd5a0 .wdt-column-wrapper.wdt-snap-scroll-enabled .wdt-column {
flex: 0 0 100%;
}
}

</style>
<link rel="stylesheet" id="elementor-post-7588-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/post-7588.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-mailchimp-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(14).css" type="text/css" media="all">
<link rel="stylesheet" id="jquery.magnific-popup-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery(2).magnific-popup.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-popup-box-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(15).css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-15854-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/post-15854.css" type="text/css" media="all">
<link rel="stylesheet" id="e-swiper-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/e-swiper.min.css" type="text/css" media="all">
<link rel="stylesheet" id="widget-image-gallery-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/custom-widget-image-gallery-rtl.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-15851-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/post-15851.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-accordion-and-toggle-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(16).css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-15852-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/post-15852.css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-elementor-sections-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(17).css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-elementor-widgets-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/style(18).css" type="text/css" media="all">
<link rel="stylesheet" id="wdt-e-animations-css" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/animations.min.css" type="text/css" media="all">
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/hooks.min.js.download" id="wp-hooks-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/i18n.min.js.download" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'rtl' ] } );
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/index.js.download" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-before">
/* <![CDATA[ */
var wpcf7 = {
    "api": {
        "root": "https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-json\/",
        "namespace": "contact-form-7\/v1"
    },
    "cached": 1
};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/index(1).js.download" id="contact-form-7-js"></script>
<script type="text/javascript" id="wdt-elementor-addon-core-js-extra">
/* <![CDATA[ */
var wdtElementorAddonGlobals = {"ajaxUrl":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/core.js.download" id="wdt-elementor-addon-core-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/rtl-demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/rtl-demo\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_0e876cfb1b849e7a49d1400c965b3fa0","fragment_name":"wc_fragments_0e876cfb1b849e7a49d1400c965b3fa0","request_timeout":"5000"};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/cart-fragments.min.js.download" id="wc-cart-fragments-js" data-wp-strategy="defer"></script>
<script type="text/javascript" id="tinvwl-js-extra">
/* <![CDATA[ */
var tinvwl_add_to_wishlist = {"text_create":"Create New","text_already_in":"{product_name} already in {wishlist_title}","simple_flow":"","hide_zero_counter":"","i18n_make_a_selection_text":"Please select some product options before adding this product to your wishlist.","tinvwl_break_submit":"No items or actions are selected.","tinvwl_clipboard":"Copied!","allow_parent_variable":"","block_ajax_wishlists_data":"","update_wishlists_data":"","hash_key":"ti_wishlist_data_0e876cfb1b849e7a49d1400c965b3fa0","nonce":"41586ae885","rest_root":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-json\/","plugin_url":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-content\/plugins\/ti-woocommerce-wishlist\/","wc_ajax_url":"\/rtl-demo\/?wc-ajax=tinvwl","stats":"","popup_timer":"6000"};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/public.min.js.download" id="tinvwl-js"></script>
<script type="text/javascript" id="grassroot-jqcustom-js-extra">
/* <![CDATA[ */
var ajax_object = {"ajax_url":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-admin\/admin-ajax.php","ajax_nonce":"c067c495f7"};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/custom.js.download" id="grassroot-jqcustom-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/swiper.min.js.download" id="jquery-swiper-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/isotope.pkgd.min.js.download" id="isotope-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/matchHeight.js.download" id="matchheight-js"></script>
<script type="text/javascript" id="wdt-common-js-extra">
/* <![CDATA[ */
var wdtcommonobject = {"ajaxurl":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-admin\/admin-ajax.php","noResult":"No Results Found!"};
var wdtcommonobject = {"ajaxurl":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-admin\/admin-ajax.php","noResult":"No Results Found!"};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/common.js.download" id="wdt-common-js"></script>
<script type="text/javascript" id="wdt-frontend-js-extra">
/* <![CDATA[ */
var wdtfrontendobject = {"pluginFolderPath":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-content\/plugins\/","pluginPath":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-content\/plugins\/wedesigntech-portfolio\/","ajaxurl":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-admin\/admin-ajax.php","purchased":"<p>Purchased<\/p>","somethingWentWrong":"<p>Something Went Wrong<\/p>","outputDivAlert":"Please make sure you have added output shortcode.","printerTitle":"Portfolio Printer","pleaseLogin":"Please login","noMorePosts":"No more posts to load!","elementorPreviewMode":"","primaryColor":"#1e306e","secondaryColor":"#2fa5fb","tertiaryColor":"#d2edf8"};
var wdtfrontendobject = {"pluginFolderPath":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-content\/plugins\/","pluginPath":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-content\/plugins\/wedesigntech-portfolio\/","ajaxurl":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-admin\/admin-ajax.php","purchased":"<p>Purchased<\/p>","somethingWentWrong":"<p>Something Went Wrong<\/p>","outputDivAlert":"Please make sure you have added output shortcode.","printerTitle":"Portfolio Printer","pleaseLogin":"Please login","noMorePosts":"No more posts to load!","elementorPreviewMode":"","primaryColor":"#1e306e","secondaryColor":"#2fa5fb","tertiaryColor":"#d2edf8"};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/frontend.js.download" id="wdt-frontend-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/sourcebuster.min.js.download" id="sourcebuster-js-js"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
/* <![CDATA[ */
var wc_order_attribution = {"params":{"lifetime":1.0e-5,"session":30,"base64":false,"ajaxurl":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","utm_source_platform":"current.plt","utm_creative_format":"current.fmt","utm_marketing_tactic":"current.tct","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/order-attribution.min.js.download" id="wc-order-attribution-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/frontend(1).js.download" id="wdt-social-share-frontend-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/core.min.js.download" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/mouse.min.js.download" id="jquery-ui-mouse-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/slider.min.js.download" id="jquery-ui-slider-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/chosen.jquery.min.js.download" id="chosen-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/datepicker.min.js.download" id="jquery-ui-datepicker-js"></script>
<script type="text/javascript" id="jquery-ui-datepicker-js-after">
/* <![CDATA[ */
jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"\u0625\u063a\u0644\u0627\u0642","currentText":"\u0627\u0644\u064a\u0648\u0645","monthNames":["\u064a\u0646\u0627\u064a\u0631","\u0641\u0628\u0631\u0627\u064a\u0631","\u0645\u0627\u0631\u0633","\u0623\u0628\u0631\u064a\u0644","\u0645\u0627\u064a\u0648","\u064a\u0648\u0646\u064a\u0648","\u064a\u0648\u0644\u064a\u0648","\u0623\u063a\u0633\u0637\u0633","\u0633\u0628\u062a\u0645\u0628\u0631","\u0623\u0643\u062a\u0648\u0628\u0631","\u0646\u0648\u0641\u0645\u0628\u0631","\u062f\u064a\u0633\u0645\u0628\u0631"],"monthNamesShort":["\u064a\u0646\u0627\u064a\u0631","\u0641\u0628\u0631\u0627\u064a\u0631","\u0645\u0627\u0631\u0633","\u0623\u0628\u0631\u064a\u0644","\u0645\u0627\u064a\u0648","\u064a\u0648\u0646\u064a\u0648","\u064a\u0648\u0644\u064a\u0648","\u0623\u063a\u0633\u0637\u0633","\u0633\u0628\u062a\u0645\u0628\u0631","\u0623\u0643\u062a\u0648\u0628\u0631","\u0646\u0648\u0641\u0645\u0628\u0631","\u062f\u064a\u0633\u0645\u0628\u0631"],"nextText":"\u0627\u0644\u062a\u0627\u0644\u064a","prevText":"\u0627\u0644\u0633\u0627\u0628\u0642","dayNames":["\u0627\u0644\u0623\u062d\u062f","\u0627\u0644\u0625\u062b\u0646\u064a\u0646","\u0627\u0644\u062b\u0644\u0627\u062b\u0627\u0621","\u0627\u0644\u0623\u0631\u0628\u0639\u0627\u0621","\u0627\u0644\u062e\u0645\u064a\u0633","\u0627\u0644\u062c\u0645\u0639\u0629","\u0627\u0644\u0633\u0628\u062a"],"dayNamesShort":["\u0627\u0644\u0623\u062d\u062f","\u0627\u0644\u0623\u062b\u0646\u064a\u0646","\u0627\u0644\u062b\u0644\u0627\u062b\u0627\u0621","\u0627\u0644\u0623\u0631\u0628\u0639\u0627\u0621","\u0627\u0644\u062e\u0645\u064a\u0633","\u0627\u0644\u062c\u0645\u0639\u0629","\u0627\u0644\u0633\u0628\u062a"],"dayNamesMin":["\u062f","\u0646","\u062b","\u0623\u0631\u0628","\u062e","\u062c","\u0633"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":true});});
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/frontend(2).js.download" id="wdt-search-frontend-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/frontend(3).js.download" id="wdt-media-images-frontend-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/common(1).js.download" id="wdt-comments-common-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/single-page.js.download" id="wdt-modules-singlepage-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/frontend(4).js.download" id="wdt-comments-frontend-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/webpack.runtime.min.js.download" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/frontend-modules.min.js.download" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
/* <![CDATA[ */
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":true,"breakpoints":{"xs":0,"sm":480,"md":480,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":479,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":767,"default_value":880,"direction":"max","is_enabled":true},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1280,"default_value":1200,"direction":"max","is_enabled":true},"laptop":{"label":"Laptop","value":1540,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":true},"version":"3.30.0","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"e_element_cache":true,"home_screen":true,"global_classes_should_enforce_capabilities":true,"cloud-library":true,"e_opt_in_v4_page":true},"urls":{"assets":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-content\/uploads\/sites\/3"},"nonces":{"floatingButtonsClickTracking":"e1d5b35165"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_mobile_extra","viewport_tablet","viewport_tablet_extra","viewport_laptop"],"viewport_mobile":"479","viewport_mobile_extra":"767","viewport_tablet":"1024","viewport_tablet_extra":"1280","viewport_laptop":"1540","global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":15720,"title":"RTL%20GrassRoot%20Site%20%E2%80%93%20Your%20SUPER-powered%20WP%20Engine%20Site","excerpt":"","featuredImage":false}};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/frontend.min.js.download" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/swiper.min(1).js.download" id="swiper-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery.cookie.min.js.download" id="jquery-cookies-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery.magnific-popup.min.js.download" id="jquery-magnific-popup-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/blogcarousel.js.download" id="wdt-blogcarousel-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/select2.full.js.download" id="jquery-select2-js"></script>
<script type="text/javascript" id="post-infinite-js-extra">
/* <![CDATA[ */
var grassroot_urls = {"ajaxurl":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/post-infinite.js.download" id="post-infinite-js"></script>
<script type="text/javascript" id="post-loadmore-js-extra">
/* <![CDATA[ */
var grassroot_urls = {"ajaxurl":"https:\/\/wdtgrassroot.wpengine.com\/rtl-demo\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/post-loadmore.js.download" id="post-loadmore-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/mega-menu.js.download" id="dtplugin-mega-menu-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/script.js.download" id="grassroot-pro-auth-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/isotope.pkgd.js.download" id="isotope-pkgd-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery.bxslider.js.download" id="jquery-bxslider-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery.fitvids.js.download" id="jquery-fitvids-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery.debouncedresize.js.download" id="jquery-debouncedresize-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery.nicescroll.js.download" id="jquery-nicescroll-js"></script>
<script type="text/javascript" id="grassroot-woo-cart-notification-js-after">
/* <![CDATA[ */
jQuery.noConflict();

jQuery(document).ready(function($){
    "use strict";

    // After adding product to cart
    $('body').on('added_to_cart', function(e) {

        if($('.wdt-shop-cart-widget').hasClass('activate-sidebar-widget')) {

            $('.wdt-shop-cart-widget').addClass('wdt-shop-cart-widget-active');
            $('.wdt-shop-cart-widget-overlay').addClass('wdt-shop-cart-widget-active');

            // Nice scroll script

            var winHeight = $(window).height();
            var headerHeight = $('.wdt-shop-cart-widget-header').height();
            var footerHeight = $('.woocommerce-mini-cart-footer').height();

            var height = parseInt((winHeight-headerHeight-footerHeight), 10);

            $('.wdt-shop-cart-widget-content').height(height).niceScroll({ cursorcolor:"#000", cursorwidth: "5px", background:"rgba(20,20,20,0.3)", cursorborder:"none" });

        }

        if($('.wdt-shop-cart-widget').hasClass('cart-notification-widget')) {

            $('.wdt-shop-cart-widget').addClass('wdt-shop-cart-widget-active');
            $('.wdt-shop-cart-widget-overlay').addClass('wdt-shop-cart-widget-active');
            setTimeout( function(){
                $('.wdt-shop-cart-widget').removeClass('wdt-shop-cart-widget-active');
                $('.wdt-shop-cart-widget-overlay').removeClass('wdt-shop-cart-widget-active');
            }, 2400 );

        }

        e.preventDefault();
    });

    $('body').on('click', '.wdt-shop-cart-widget-close-button, .wdt-shop-cart-widget-overlay', function( e ) {
        $('.wdt-shop-cart-widget').removeClass('wdt-shop-cart-widget-active');
        $('.wdt-shop-cart-widget-overlay').removeClass('wdt-shop-cart-widget-active');
        e.preventDefault();
    });

});
/* ]]> */
</script>
<script type="text/javascript" id="grassroot-woo-quantity-plus-minus-js-after">
/* <![CDATA[ */
jQuery.noConflict();

jQuery(document).ready(function($){
    "use strict";

    // Quatity plus & minus button

        jQuery( 'body' ).delegate( '.quantity .plus, .quantity .minus', 'click', function(e) {

            var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                currentVal  = parseFloat( $qty.val() ),
                max         = parseFloat( $qty.attr( 'max' ) ),
                min         = parseFloat( $qty.attr( 'min' ) ),
                step        = $qty.attr( 'step' );

            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = '1';

            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( currentVal >= max ) ) {
                    $qty.val( max );
                } else {
                    $qty.val( currentVal + parseFloat( step ) );
                }
            } else {
                if ( min && ( currentVal <= min ) ) {
                    $qty.val( min );
                } else if ( currentVal > 0 ) {
                    $qty.val( currentVal - parseFloat( step ) );
                }
            }

            $qty.trigger( 'change' );

            e.preventDefault();

        });


});
/* ]]> */
</script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/flatpickr.min.js.download" id="flatpickr-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/site-loader.js.download" id="site-loader-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/go-to-top.js.download" id="go-to-top-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/header-icons.js.download" id="wdt-header-icons-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery.countTo.js.download" id="jquery-countTo-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/script(1).js.download" id="wdt-counter-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/column.js.download" id="wdt-column-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery.cookie.min(1).js.download" id="jquery.cookie-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery.magnific-popup.min(1).js.download" id="jquery.magnific-image-box-popup-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/script(2).js.download" id="wdt-image-box-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/carousel.js.download" id="wdt-carousel-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/script(3).js.download" id="wdt-advanced-toggle-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/script(4).js.download" id="wdt-mailchimp-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/jquery.magnific-popup.min(2).js.download" id="jquery.magnific-popup-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/script(5).js.download" id="wdt-popup-box-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/accordion.min.js.download" id="jquery-ui-accordion-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/script(6).js.download" id="wdt-accordion-and-toggle-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/script(7).js.download" id="wdt-elementor-sections-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/parallax-scroll.min.js.download" id="wdt-parallax-scroll-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/parallax.min.js.download" id="wdt-parallax-js"></script>
<script type="text/javascript" src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/script(8).js.download" id="wdt-elementor-widgets-js"></script>
<a id="back-to-top" href="https://wdtgrassroot.wpengine.com/rtl-demo/#" style="display: none;">
    <span id="back-to-top-hover"></span>
    <span class="back-to-top-icon"><i>
<svg xmlns:xodm="http://www.corel.com/coreldraw/odm/2003" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
<g>
	<g>
		<path class="bts-leaf" d="M2.5,97.5c22,0.9,38.8-12.2,44.9-31.1c-3.9,6.3-11.3,9.5-21.4,7.5c-1.9-10,1.2-17.5,7.5-21.4C14.7,58.7,1.7,75.5,2.5,97.5
			z M33.6,47.5c-6.3-3.9-9.5-11.3-7.5-21.4c10-1.9,17.5,1.2,21.4,7.5C41.3,14.7,24.5,1.7,2.5,2.5C1.7,24.5,14.7,41.3,33.6,47.5z
			 M97.5,2.5c-22-0.9-38.8,12.2-44.9,31.1c3.9-6.3,11.3-9.5,21.4-7.5c1.9,10-1.2,17.5-7.5,21.4C85.3,41.3,98.3,24.5,97.5,2.5z
			 M52.5,66.4c6.1,18.9,22.9,31.9,44.9,31.1c0.9-22-12.2-38.8-31.1-44.9c6.3,3.9,9.5,11.3,7.5,21.4C63.9,75.8,56.4,72.7,52.5,66.4z"></path>
		<path class="bts-arrow" d="M39.1,49.8c-0.1-0.2-0.1-0.5-0.1-0.7s0-0.5,0.1-0.7c0.1-0.2,0.2-0.4,0.4-0.6l9.2-9.2c0.1-0.1,0.2-0.2,0.3-0.2
			c0,0,0.1,0,0.1-0.1c0,0,0,0,0,0l0,0c0,0,0.1-0.1,0.2-0.1c0.1,0,0.1,0,0.2,0l0,0c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0.2,0,0.5,0,0.7,0
			c0,0,0.1,0,0.1,0c0,0,0,0,0,0l0,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0.1l0,0l0,0c0,0,0.1,0,0.1,0.1c0.1,0.1,0.2,0.1,0.3,0.2
			l9.2,9.2c0.3,0.3,0.4,0.6,0.5,1c0.1,0.4,0,0.7-0.1,1.1c-0.1,0.3-0.4,0.6-0.7,0.8c-0.3,0.2-0.7,0.3-1,0.3c-0.2,0-0.5,0-0.7-0.1
			c-0.2-0.1-0.4-0.2-0.6-0.4l-6-6l0,15.7c0,0.5-0.2,1-0.5,1.3C51,61.8,50.5,62,50,62c-0.5,0-1-0.2-1.3-0.5c-0.4-0.3-0.5-0.8-0.5-1.3
			l0-15.7l-6,6c-0.2,0.2-0.4,0.3-0.6,0.4c-0.2,0.1-0.5,0.1-0.7,0.1c-0.2,0-0.5,0-0.7-0.1s-0.4-0.2-0.6-0.4
			C39.3,50.3,39.2,50.1,39.1,49.8z"></path>
	</g>
</g>
</svg>

</i></span>
</a>
<script src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/dialog.min.js.download"></script><script src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/share-link.min.js.download"></script><link rel="stylesheet" href="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/custom-lightbox.min.css"><div class="widget_shopping_cart_live_region screen-reader-text" role="status"></div><div class="wdt-search-form-container"><form method="get" id="searchform" action="https://wdtgrassroot.wpengine.com/rtl-demo/">
	<input id="s" name="s" type="text" value="" placeholder="Enter Keyword" class="text_input">
	<ul class="quick_search_results"></ul>
	<input type="hidden" id="search_security_nonce" name="search_security_nonce" value="c067c495f7">
	<input name="submit" type="submit" value="Go">
</form><div class="wdt-search-form-close"></div></div><svg style="display: none;" class="e-font-icon-svg-symbols"></svg><span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span></body></html>
