<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div id="scroll-up">
		<i class="fa fa-2x fa-chevron-up" aria-hidden="true"></i>
	</div>

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row align-center">

			<div class="col-md-9 auto-align">

				<footer class="site-footer" id="colophon">

					<!--<div class="site-info align-center">
						 UNDERSTRAP FOOTER
							<a href="<?php  echo esc_url( __( 'http://wordpress.org/','understrap' ) ); ?>"><?php printf( 
							/* translators:*/
							esc_html__( 'Proudly powered by %s', 'understrap' ),'WordPress' ); ?></a>
								<span class="sep"> | </span>
					
							<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Theme: %1$s by %2$s.', 'understrap' ), $the_theme->get( 'Name' ),  '<a href="'.esc_url( __('http://understrap.com', 'understrap')).'">understrap.com</a>' ); ?> 
				
							(<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Version: %1$s', 'understrap' ), $the_theme->get( 'Version' ) ); ?>)
							</div> -->
							<!-- .site-info -->

							<div class="left-footer">
								© Copyright: Vanité 2017 - Diseño: 
								<a class="iv-link" href="https://www.identidadvisual.com/">
									<strong>Identidad Visual.</strong>
								</a>
								Recomendamos: 
								<a class="guest-link" href="https://www.elchollon.com">
									<strong>El Chollón</strong>
								</a>
								-
								<a class="guest-link" href="https://www.camisetasbaratasonline.com">
									<strong>Camisetas Baratas Online</strong>
								</a>
							</div>
							<div class="right-footer">
								<a href="https://www.facebook.com/Vanite-Spa-Sun-Beauty-328713200654770/">
									<i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
								</a>
								<a href="https://twitter.com/vanitealbacete">
									<i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
								</a>
							</div>
						</footer><!-- #colophon -->

					</div><!--col end -->
					<div class="col-md-9 auto-align small-links">
						<a href="https://vaniteonline.es/politica-de-privacidad">Política de privacidad</a>
						<a href="https://vaniteonline.es/aviso-legal">Aviso Legal</a>
					</div>

				</div><!-- row end -->

			</div><!-- container end -->

		</div><!-- wrapper end -->

	</div><!-- #page we need this extra closing tag here -->

	<?php wp_footer(); ?>

	<script type="text/javascript" defer>

		function lightClick($order) {
			var $this = jQuery.find('.lightbox-trigger[data-order="'+$order+'"]');
			var $href = jQuery($this).data('image');
			var $alt = jQuery($this).data('alt');
			var $max = jQuery.find('.gallery-item').length-1;

			if ($order == $max) {
				var $next = 0;
			} else {
				var $next = $order + 1;
			}

			if ($order == 0) {
				var $prev = $max;
			} else {
				var $prev = $order -1;
			}

			if (jQuery('#lightbox').length > 0) { // #lightbox exists

				//place href as img src value
				jQuery('#lightbox').html(					
					'<span class="prev-chev" onclick="lightClick('+ $prev +')">' +
					'<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>' +
					'</span>' +
					'<div id="lightbox-content">' + //insert clicked link's href into img src
					'<span class="close-x" onclick="lightHide()">&times;</span>' +
					'<img src="' + $href +'" />' +
					'<div class="alt-display">'+$alt+'</div>' +
					'</div>' +	
					'<span class="next-chev" onclick="lightClick('+ $next +')">' +
					'<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>' +
					'</span>');
				//show lightbox window - you could use .show('fast') for a transition

			}
			else { //#lightbox does not exist - create and insert (runs 1st time only)
				//create HTML markup for lightbox window
				var lightbox = 
				'<div id="lightbox">' +
				'<span class="prev-chev" onclick="lightClick('+ $prev +')">' +
				'<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>' +
				'</span>' +
					'<div id="lightbox-content">' + //insert clicked link's href into img src
					'<p class="close-x" onclick="lightHide()">&times;</p>' +
					'<img src="' + $href +'" />' +
					'<div class="alt-display">'+$alt+'</div>' +
					'</div>' +	
					'<span class="next-chev" onclick="lightClick('+ $next +')">' +
					'<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>' +
					'</span>' +
					'</div>';				
				//insert lightbox HTML into page
				jQuery('body').append(lightbox);
			}

			jQuery('#lightbox').show();
		};

		function lightHide() {
			jQuery('#lightbox').hide();
		};

		jQuery(document).ready(function($){			

			/* this activates slider auto-sliding (10000 miliseconds each slide)
			$('.slider-wrapper').ready(function(){
				setInterval(function () {
					moveRight();
				}, 10000);
			});
			*/

			var slideCount = $('.slider-wrapper .slider-ul .slider-slide').length;
			var slideWidth = $('.slider-wrapper .slider-ul .slider-slide').width();
			var slideHeight = $('.slider-wrapper .slider-ul .slider-slide').height();
			var sliderUlWidth = slideCount * slideWidth;

			$('.slider-wrapper').css({ width: slideWidth, height: slideHeight });

			$('.slider-wrapper .slider-ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

			$('.slider-wrapper .slider-ul .slider-slide:last-child').prependTo('.slider-wrapper .slider-ul');

			function moveLeft() {
				$('.slider-wrapper .slider-ul').animate({
					left: + slideWidth
				}, 200, function () {
					$('.slider-wrapper .slider-ul .slider-slide:last-child').prependTo('.slider-wrapper .slider-ul');
					$('.slider-wrapper .slider-ul').css('left', '');
				});
			};

			function moveRight() {
				$('.slider-wrapper .slider-ul').animate({
					left: - slideWidth
				}, 200, function () {
					$('.slider-wrapper .slider-ul .slider-slide:first-child').appendTo('.slider-wrapper .slider-ul');
					$('.slider-wrapper .slider-ul').css('left', '');
				});
			};

			$('.slider-prev').click(function () {
				moveLeft();
			});

			$('.slider-next').click(function () {
				moveRight();
			});








			//Spinner Preloader
			jQuery(window).on('load', function() {
				preloaderFadeOutTime = 500;
				function hidePreloader() {
					var preloader = jQuery('.spinner-wrapper');
					preloader.fadeOut(preloaderFadeOutTime);
				}
				hidePreloader();
			});

			/*scrollers*/
			jQuery('.scroll-button').on('click', function(e) {
				e.preventDefault();
				jQuery('html, body').animate({ scrollTop: jQuery(jQuery(this)).offset().top}, 500, 'linear');
			});
			jQuery('#scroll-up').hide();
			jQuery(window).scroll(function () {
				if (jQuery(this).scrollTop() > 100) {
					jQuery('#scroll-up').fadeIn();
				} else {
					jQuery('#scroll-up').fadeOut();
				}
			});
			jQuery('#scroll-up').on('click', function() {
				jQuery('html, body').animate({ scrollTop: 0}, 800, 'linear');
				return false;
			});
			/*form-fanciness*/
			var $wraps = jQuery.find(".wpcf7-form-control-wrap");
			var $labels = jQuery.find(".group > .dynamic-label");
			if ($wraps.length != 0) {
				for (i = 0; i<4; i++) {
					$wraps[i].append($labels[i]);
				}
			}
			var $inputs = jQuery.find(".fancy-input");
			var $textarea = jQuery.find(".fancy-textarea");
			jQuery($inputs).on("focus", function() {
				var $label = jQuery(this).find("~ .dynamic-label");
				$label.addClass("activated");
			});
			jQuery($textarea).on("focus", function() {
				var $label = jQuery(this).find("~ .dynamic-label");
				$label.addClass("activated");
			});

			/* fill the item gallery */
			var $gallery = jQuery.find('.gallery-item');
			$($gallery).each( function() {
				var $href = $(this).find('.op-layer').data("image");
				$(this).css('background','url("'+$href+'") no-repeat center center');
				$(this).css('background-size','cover');
			});

			//Click anywhere on the page to get rid of lightbox window
			$('body').on('click','#lightbox', function() {
				$('#lightbox').hide();
			});

			// detects if ESC key is pressed
			document.onkeydown = function(evt) {
				evt = evt || window.event;
				var isEscape = false;
				if ("key" in evt) {
					isEscape = (evt.key == "Escape" || evt.key == "Esc");
				} else {
					isEscape = (evt.keyCode == 27);
				}
				if (isEscape) {
					$('#lightbox').hide();
				}
			};

			var isHome = $.find('.home');
			if (isHome.length > 0) {
				var $nav = $.find('.navbar-nav>li:first-child');
				if ( $nav.length > 0)  {
					$($nav).hide();
				}
			}
		}); /* (end $document.ready) */
	</script>
</body>
</html>