<?php get_header(); ?>

<main class="main" role="main">
	<!-- section -->
	<section class="single-post-content clear">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1><?php the_title(); ?></a></h1>
			<!-- /post title -->
			<p class="tip-meta"><?php _e( '', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<?php the_content(); // Dynamic Content ?>
			<div class="single-post-rating">
				<h2>Beoordeel deze tip:</h2>
				<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
			</div>
			<div class="related-posts">
			<?php rp4wp_children(); ?>
			</div>
		</article>
		<!-- /article -->

		<?php comments_template(); ?>
		
	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
</main>

<?php get_sidebar(); ?>
<div class="clear"></div>
<?php get_footer(); ?>
