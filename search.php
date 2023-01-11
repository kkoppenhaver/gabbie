<?php get_header(); ?>

<div class="search-container">
	<h1>Looking for something?</h1>

	<?php echo get_search_form(); ?>

	<div class="post-container">
		<?php if( have_posts() && ! empty( get_query_var('s') ) ) : ?>
			<?php while( have_posts() ) : the_post(); ?>
				<div class="single-post">
					<a href="<?php the_permalink(); ?>">
						<div class="featured-image" style="background-image: url('<?php echo get_featured_or_first_image_url( get_the_ID() ); ?>');">
						</div>

						<div class="post-info">
							<h2><?php the_title(); ?></h2>

							<p class="excerpt"><?php echo get_the_excerpt(); ?></p>

							<div class="read-more">
								<?php if( get_publication_image_url() ) : ?>
									<div class="publication-logo" style="background-image: url('<?php echo get_publication_image_url(); ?>');"></div>
								<?php endif; ?>

								<p class="read-more-link">
									Read More

									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="16" height="16" fill="currentColor">
    									<path d="M5.333 14.667v2.667h16l-7.333 7.333 1.893 1.893 10.56-10.56-10.56-10.56-1.893 1.893 7.333 7.333h-16z"></path>
									</svg>
								</p>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if( ! empty( get_query_var('s') ) ) : ?>
			<div class="pagination-container">
				<?php the_posts_pagination([
					'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20" fill="currentColor"><path d="M26.667 14.667v2.667h-16l7.333 7.333-1.893 1.893-10.56-10.56 10.56-10.56 1.893 1.893-7.333 7.333h16z"></path></svg>',
					'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20" fill="currentColor"><path d="M5.333 14.667v2.667h16l-7.333 7.333 1.893 1.893 10.56-10.56-10.56-10.56-1.893 1.893 7.333 7.333h-16z"></path></svg>'
				]); ?>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>