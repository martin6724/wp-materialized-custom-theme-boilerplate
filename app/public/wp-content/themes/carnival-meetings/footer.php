<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CarnivalMeetings
 */

?>


<div class="clear"></div>
<!-- .container -->



	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'carnival-meetings' ) ); ?>">

			</a>

		</div><!-- .site-info -->


		<div class="center-align">

			<div class="row center-align">
				<div class="col s12" style="width:100%;height:85px;background-color:#10559a;z-index:-5;padding: unset;">
					<img class="responsive footer-temp left-align" style="min-width:80%;transform: translateY(15%);" src="<?php echo get_template_directory_uri(); ?>/images/CARNIVAL-MEETING-WEBSITE_06.png" alt="temporary footer">

					<div class="col s12" style="height:100px;background-color:white;position: relative;">
						<img class="responsive footer-temp bottom-align" style="min-width:80%;transform: translateY(15%);" src="<?php echo get_template_directory_uri(); ?>/images/CARNIVAL-MEETING-WEBSITE_07.png" alt="temporary footer">
					</div>
				</div>
			</div>
		</div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
