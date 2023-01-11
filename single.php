<?php get_header(); ?>

<div class="post-heading parallax" style="background-image: url('<?php echo get_featured_or_first_image_url( get_the_ID() ); ?>');">
	<div class="overlay"></div>
	<div class="post-info">
		<h1><?php the_title(); ?></h1>

		<div class="post-meta">
			<?php the_field( 'original_publish_date' ); ?> • <?php echo get_publication_name() ?? ''; ?>
		</div>
	</div>
</div>

<div class="main-content">
	<?php the_content(); ?>
</div>

<?php get_footer(); ?>