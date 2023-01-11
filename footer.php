<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
			</main><!-- #main -->
			<aside class="off-canvas">
				<div class="menu-header">
					<div class="search">
						<a href="<?php echo site_url('?s='); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
						</a>
					</div>
					<div class="close">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor">
    						<path d="M17.947 16l7.387 7.387v1.947h-1.947l-7.387-7.387-7.387 7.387h-1.947v-1.947l7.387-7.387-7.387-7.387v-1.947h1.947l7.387 7.387 7.387-7.387h1.947v1.947l-7.387 7.387z"></path>
						</svg>
					</div>
				</div>

				<div class="main-menu">
					<?php 
					    wp_nav_menu( 
					        array( 
					            'theme_location' => 'main-menu'
					        ) 
					    ); 
					?>
				</div>
			</aside>
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'gabbie' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>