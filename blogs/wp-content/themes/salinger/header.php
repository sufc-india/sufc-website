<?php

/**

 * The Header template for our theme

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package Salinger

 */



?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width" />

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" type="text/css" href="https://sufcindia.com/blogs/wp-content/themes/salinger/css/footer/style.css" />
<link rel="stylesheet" type="text/css" href="https://sufcindia.com/blogs/wp-content/themes/salinger/css/footer/bootstrap.css" />

<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>



<div id="page" class="hfeed site">

	<?php do_action( 'salinger_before_header' ); ?>



	<header id="masthead" class="site-header" role="banner">
		<p> Hello </p>
		<?php

		if ( get_theme_mod( 'salinger_display_top_bar', 1 ) == 1 ) {



			get_template_part( SALINGER_TEMPLATE_PARTS . 'top-bar' );

			?>

			<div style="position:relative">

				<?php get_template_part( SALINGER_TEMPLATE_PARTS . 'menu-movil' ); ?>

			</div>

			<?php

		}

		?>

		<div class="inner-wrap">

			<div class="header-inner-wrap">

				<div class="site-branding-wrapper">
					<?php

					if ( has_custom_logo() ) {

						the_custom_logo();
					}



					if ( is_home() && is_front_page() ) {

						?>

						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php esc_html( bloginfo( 'name' ) ); ?></a></h1>



						<h2 class="site-description"><?php esc_html( bloginfo( 'description' ) ); ?></h2>

						<?php

					} else {

						?>

						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php esc_html( bloginfo( 'name' ) ); ?></a></p>



						<p class="site-description"><?php esc_html( bloginfo( 'description' ) ); ?></p>

						<?php

					}

					?>

				</div><!-- .site-branding-wrapper -->

				<div class="navbar navbar-main navbar-fixed-top">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
						<div class="info">
							<!-- <h3><a href="news.html" title="" target="_new">News:</a> </h3> -->
							<div class="info-item">
                 <!-- <div><a href="ten-man-bfc-b-edge-south-united-fc.html" target="_new">Ten Man BFC B Edge South United FC</a></div> 
								<div><a href="SUFC-partners-with-tiki-taka.html" target="_new">SUFC Partners with Tiki Taka</a></div>-->
								<!-- <div><a href="https://sufcindia.com/blogs/south-united-back-in-i-league-2-div" target="_new">South United Back in I League-2 DIV</a></div> -->
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<div class="top-sosmed pull-right">
							<a href="https://www.facebook.com/sufcindia" title="" target="_new"><span class="fa fa-facebook"></span></a>
							<a href="https://twitter.com/sufcindia" title="" target="_new"><span class="fa fa-twitter"></span></a>
							<a href="https://www.instagram.com/southunited" title="" target="_new"><span class="fa fa-instagram"></span></a>
							<!-- <span class="fa fa-shopping-cart"></span> -->
							<a href="/blogs/category/news/" title="" target="_new"><span class="fa fa-file-text"></span></a>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><img src="https://sufcindia.com/blogs/wp-content/themes/salinger/css/footer/logo.png" alt="" /></a>

			</div>
			<nav class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://sufcindia.com/index.html">HOME</a></li>
					<li ><a href="http://sufcindia.com/about.html">ABOUT</a></li>
					<li><a href="http://sufcindia.com/sports-schools.html">SPORTS SCHOOLS</a></li>
					<li><a href="http://sufcindia.com/eco-system.html">ECOSYSTEM</a></li>
					<li><a href="http://sufcindia.com/the-team.html">THE TEAM</a></li>
					<li><a href="http://sufcindia.com/gallery.html">GALLERY</a></li>
                    <li><a href="http://sufcindia.com/clients.html">CLIENTS</a></li>
                    <li class="active"><a href="https://sufcindia.com/blogs/">BLOGS</a></li>
					<li><a href="http://sufcindia.com/contact.html">CONTACT</a></li>
				</ul>
			</nav>
		</div>
    </div>

				

					</nav><!-- #site-navigation -->

				</div><!-- .main-navigation-wrapper -->



			</div><!-- header-inner-wrap -->

		</div><!-- .inner-wrap -->


		<p>Hello </p>
		<?php

		if ( get_header_image() ) {

			?>

			<div class="header-image-wrapper">

				<img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />

			</div><!-- .header-image-wrapper -->

			<?php

		}



		if ( get_theme_mod( 'salinger_display_top_bar', 1 ) == '' ) {

			?>

			<div class="boton-menu-movil-sin-top-bar">

			<i class="fa fa-align-justify"></i> <?php esc_html_e( 'MENU', 'salinger' ); ?>

			</div>

			<div style="position:relative">

				<?php get_template_part( SALINGER_TEMPLATE_PARTS . 'menu-movil' ); ?>

			</div>

			<?php

		}

		?>

	</header><!-- #masthead -->



	<?php do_action( 'salinger_after_header' ); ?>



	<div id="main">

		<div class="inner-wrap">

			<div class="content-sidebar-inner-wrap">

