<?php get_header(); ?>

<?php $tags = get_tags(['hide_empty' => false]); ?>

<?php if( ! empty( $tags ) ) : ?>
	<div class="tag-feed">
		<?php foreach( $tags as $tag ) : ?>
			<div class="single-tag" style="background-image:url('<?php echo get_field( 'featured_image', $tag ); ?>')">
				
				<div class="overlay"></div>

				<div class="tag-info">
					<h2><?php echo $tag->name; ?></h2>
					<p><?php echo $tag->description; ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>