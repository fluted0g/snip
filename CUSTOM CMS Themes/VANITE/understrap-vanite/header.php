<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">

	<meta name="description" content="Vanité es un centro de estética y spa situado en Albacete. Ofrecemos numerosos servicios para tu bienestar y que te ayudarán a sentirte mejor.">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,500|Raleway:300,700" rel="stylesheet">

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": ["LocalBusiness","BeautySalon","DaySpa","NailSalon"],
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Albacete",
    "addressRegion": "Castilla-la Mancha",
    "postalCode": "02001",
    "streetAddress": "Plaza de la Constitución, Nº5"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "38.9949914",
    "longitude": "-1.858733"
  },
  "hasMap": "https://www.google.es/maps/place/Vanit%C3%A9/@38.9949914,-1.856539,15z/data=!4m2!3m1!1s0x0:0xbec3466c2caaac3d?sa=X&ved=0ahUKEwiSr9GJ8JrYAhVMWxQKHWHtDpUQ_BIIcDAK",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "reviewCount": "43"
  },
  "name": "Vanité - Spa, Sun & Beauty",
  "description": "Vanité es un centro de estética y spa situado en Albacete. Ofrecemos numerosos servicios para tu bienestar y que te ayudarán a sentirte mejor.", 
  "logo":"https://vaniteonline.es/wp-content/uploads/2017/12/LOGO-VANITÉ-WEB-01.png",
  "image":"https://vaniteonline.es/wp-content/uploads/2017/12/vanite-image.png",
  "openingHours": [
    "Mo-Fr 09:30-20:30"
  ],
  "OpeningHoursSpecification":
  [
    {
      "@type": "OpeningHoursSpecification",
      "validFrom": "2017-12-24",
      "validThrough": "2025-05-01",
      "closes": ["2017-05-01", "2017-12-25", "2018-01-01"]
    }
  ],
  "priceRange": "$$$",
  "currenciesAccepted": "EUR",
  "paymentAccepted": ["Cash","Credit Card"],
  "telephone": "(+34) 967 521 633",
  "url": "https://www.vaniteonline.es",
  "founder": {
    "@type": "Person",
    "name": "Ana Victoria Recio Jareño"
  },
  "numberOfEmployees": 2,
  "employees": [
    {
      "@type": "Person",
      "name": "Ana Aglae Iniesta"
    },
    {
      "@type": "Person",
      "name": "Miriam Herreros Marín"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/Vanite-Spa-Sun-Beauty-328713200654770/",
    "https://twitter.com/vanitealbacete"
  ]
}
</script>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
		<div class="nav-bg-layer"></div>

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>
 
		<nav class="navbar navbar-expand-md"> <!-- removed classes: navbar-dark bg-dark -->

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-2x fa-bars" aria-hidden="true"></i>
					</span>
				</button>

						
				<div class="pidecita" data-toggle="modal" data-target="#bookingModal"><i class="fa fa-calendar"></i>SOLICITAR UNA CITA</div>
				
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
