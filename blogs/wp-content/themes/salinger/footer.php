<?php

/**

 * The template for displaying the footer

 *

 * Contains footer content and the closing of the #main and #page div elements.

 *

 * @package Salinger

 * @since Salinger 1.0

 */



?>

			</div><!-- .content-sidebar-innner-wrap-->

		</div><!-- inner wrap -->

	</div><!-- #main .wrapper -->

	

	<footer id="colophon" class="site-footer" role="contentinfo">

		

		<div class="inner-wrap">

			<div class="footer-inner-wrap">

					<div class="footer">

		<div class="f-desc">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>ABOUT SUFC</h4>
							</div>
							<!-- <p>South United Football Club is a Bangalore-based professional club established in 2012. We currently participate in the BDFA Super Division and Hero 2nd Division League.</p> -->

							<p>
								South United Football Club is a Bangalore-based professional Club established in 2012. South United aims to be the leading creator of a sustainable sporting ecosystem.
							</p>
							
							<div class="footer-sosmed">
								<a href="https://www.facebook.com/sufcindia" title="" target="_new">
									<div class="item">
										<i class="fa fa-facebook"></i>
									</div>
								</a>
								<a href="https://twitter.com/sufcindia" title="" target="_new">
									<div class="item">
										<i class="fa fa-twitter"></i>
									</div>
								</a>
								<a href="https://www.instagram.com/southunited" title="" target="_new">
									<div class="item">
										<i class="fa fa-instagram"></i>
									</div>
								</a>								

								<a href="/blogs/category/news/" title="" target="_new">
									<div class="item">
										<i class="fa fa-file-text"></i>
									</div>
								</a>

							</div>
						</div>
					</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="footer-item">
								<div class="footer-title">
									<h4>RECENT NEWS</h4>
								</div>
								<div class="footer-blog-item">
									<div class="footer-blog-lead">
										<a href="blogs/2019-20-bdfa-super-division-south-united-fc-run-riot-in-4-0-win-against-ade-fc/" title="">2019/20 BDFA Super Division: South United FC run riot in 4-0 win against ADE FC</a>
									</div>
									<div class="footer-blog-date">
										Dec 16, 2019
									</div>
								</div>
								<div class="footer-blog-item">
									<div class="footer-blog-lead">
										<a href="blogs/2019-20-bdfa-super-division-south-united-fc-script-last-minute-1-0-win-against-income-tax/" title="">2019-20 BDFA Super Division: South United FC script last-minute 1-0 win against Income Tax</a>
									</div>
									<div class="footer-blog-date">
										Dec 16, 2019
									</div>
								</div>
	
							</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>INFORMATION</h4>
							</div>
							<ul class="sitemap">
								<li><a href="index.html" title="">Home</a></li>
								<li><a href="about.html" title="">About</a></li>
								<li><a href="the-team.html" title="">The Team</a></li>
								<li><a href="gallery.html" title="">Gallery</a></li>
								<li><a href="/blogs/category/news/" title="">News</a></li>
								<li>Shop</li>
								<li><a href="contact.html" title="">Contact</a></li>
								<li><a href="#" title="">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>NEWSLETTER</h4>
							</div>
							<div class="footer-form">
								<form action="#">
								<p>Are you an <b>SUFC</b> Fan? Subscribe to the newsletter and keep up to date with all the latest news! </p>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-default">SEND</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p class="ftex">&copy; 2019 South United FC - All Rights Reserved |Maintained by <a href="https://licious.design" title="Licious Design"target="_new">Licious Design & Digital</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

				<?php

				if ( is_active_sidebar( 'salinger-sidebar-footer-1' ) || is_active_sidebar( 'salinger-sidebar-footer-2' ) || is_active_sidebar( 'salinger-sidebar-footer-3' ) || is_active_sidebar( 'salinger-sidebar-footer-4' ) ) {

					?>



					<div class="wrapper-widget-area-footer">

						<div class="widget-area-footer-1">

							<?php

							if ( is_active_sidebar( 'salinger-sidebar-footer-1' ) ) {

								dynamic_sidebar( 'salinger-sidebar-footer-1' );

							}

							?>

						</div>



						<div class="widget-area-footer-2">

							<?php

							if ( is_active_sidebar( 'salinger-sidebar-footer-2' ) ) {

								dynamic_sidebar( 'salinger-sidebar-footer-2' );

							}

							?>

						</div>



						<div class="widget-area-footer-3">

							<?php

							if ( is_active_sidebar( 'salinger-sidebar-footer-3' ) ) {

								dynamic_sidebar( 'salinger-sidebar-footer-3' );

							}

							?>

						</div>



						<div class="widget-area-footer-4">

							<?php

							if ( is_active_sidebar( 'salinger-sidebar-footer-4' ) ) {

								dynamic_sidebar( 'salinger-sidebar-footer-4' );

							}

							?>

						</div>

					</div><!-- .wrapper-widget-area-footer -->

					<?php

				} // if is active widget areas ;

				?>



				<div class="site-info">

				

				</div>
				
				<!-- .site-info -->



				<?php

				if ( '' == get_theme_mod( 'salinger_hide_credits', '' ) ) {

					?>

	<div class="salinger-theme-credits">

	

	<!--Theme <a href="<?php echo SALINGER_THEME_URI; ?>"><?php echo SALINGER_NAME; ?></a>

	<?php esc_html_e( 'by', 'salinger' ); ?> GalussoThemes |

	<?php esc_html_e( 'Powered by', 'salinger' ); ?> 

	<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'salinger' ) ); ?>"

	title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'salinger' ); ?>">WordPress</a> -->

	

	<p class="ftex">© 2020 South United FC - All Rights Reserved | Managed by

	<a href="https://licious.design" title="Licious Design and Digital" target="_new">Licious Design &amp; Digital</a></p>

	
				
	

					</div><!-- .credits-blog-wp -->

					<?php

				}

				?>

			</div><!-- .footer-inner-wrap -->

		</div><!-- inner-warp -->

	</footer><!-- #colophon -->



	<?php

	if ( get_theme_mod( 'salinger_back_to_top_button', 1 ) == 1 ) { ?>

		<div class="ir-arriba"><i class="fa fa-arrow-up"></i></div>

	<?php } ?>



	</div><!-- #page -->



	<?php wp_footer(); ?>



</body>

</html>

