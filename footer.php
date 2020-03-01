<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="contact">

				<div class="contact-info">

					<h3>Kontaktinformasjon</h3>
					<span class="phone">
						+47 55 54 51 47
					</span>
					
					<span class="email">
						kontakt@srib.no
					</span>

				</div>

				<div class="address">

					<h3>Adresse</h3>
					<span class="address">
						Studentradioen i Bergen <br>
						Studentsenteret, Parkveien 1 <br>
						5007 Bergen
					</span>

				</div>

				<div class="editorial">

					<span class="role">
						Ansvarlig redaktør: Tarjei Elias Valle Kvamme
					</span>
					<span class="role">
						Nettredaktør: Mina Landøy
					</span>
					<span class="role">
						Programmering: Gutta
					</span>
					<span class="copyright">
						&copy; Studentradioen i Bergen <?php echo date("Y"); ?>
					</span>

				</div>

			</div>

			<div class="resources">
				
				<h3>Ressurser</h3>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'resources-menu',
						'menu_class' => 'resources-menu'
					)
				); ?>
				<div class="social">

					<h3>Følg oss på sosiale medier</h3>
					<?php wp_nav_menu(
					array(
						'theme_location'  => 'social-menu',
						'menu_class' => 'social-menu'
					)
				); ?>

				</div>

			</div>

			<div class="sponsor">

				<h3>Med støtte fra Velferdstinget Vest</h3>

			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

