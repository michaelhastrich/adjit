<?php 
/*
	Template Name: Seminars pagina
*/
get_header(); ?>

	<main class="main" role="main">
		<section class="product-intro clear">
				<?php 
					$page_slug = $post->post_name;
					$args = array(
						'post_type' => 'seminars',
						'posts_per_page' => 1,
						'meta_query' => array(
							array(
								'key' => 'next_event',
								'value' => '1',
								'compare' => '=='
								))
					);
				?>
				<?php $seminar = new WP_Query( $args ); ?>

				<?php if ( $seminar->have_posts() ): ?>
				<?php while ( $seminar->have_posts() ) : $seminar->the_post(); ?>
					<div class="date">
						<p>Eerstvolgende mogelijkheid:</p>
						<h2><?php the_field('date');?> | <?php the_field('place');?></h2>
						<a class="cta-bttn-sml book-bttn" href="<?php the_field('cta_url');?>" target="_blank"><?php the_field('cta_txt');?></a>
					</div>
					<div class="location">
						<div class="product-image seminar">
							<?php the_post_thumbnail(); ?>
							<?php the_field('location');?>
						</div>
						
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else:  ?>
					<!--<p><?php _e( 'Geen locatie gevonden' ); ?></p>-->
				<?php endif; ?>
				
				<div class="product-incentives">
					<h1><?php the_title(); ?></h1>
					<p class="product-meta"><?php the_field('date');?></p>
					<?php the_field('incentives');?>
				<div>
			</section>

			<h2>Andere mogelijkheden om dit seminar te volgen zijn:</h2>
			<section class="all-seminars">

				<?php 
						$page_slug = $post->post_name;
						$args = array(
							'post_type' => 'seminars',
							'orderby' => 'date',
							'order' => 'ASC',
							'posts_per_page' => -1,
							'meta_query' => array(
								array(
									'key' => 'next_event',
									'value' => '0',
									'compare' => '=='
									))
						);
					?>
					<?php $all_seminar = new WP_Query( $args ); ?>

					<?php if ( $all_seminar->have_posts() ): ?>
					<?php while ( $all_seminar->have_posts() ) : $all_seminar->the_post(); ?>
						<div class="seminar-info">
							<h3><?php the_field('date');?> | <?php the_field('place');?></h2>
							<?php the_post_thumbnail(); ?>
							<?php the_field('location');?>
							<a class="cta-bttn-sml book-bttn" href="<?php the_field('cta_url');?>" target="_blank"><?php the_field('cta_txt');?></a>
						</div>
					<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else:  ?>
						<!--<p><?php _e( 'Geen locatie gevonden' ); ?></p>-->
					<?php endif; ?>
			</section>

			<section class="main-product-info clear">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('main-product-content'); ?>>
				<div class="product-image seminar">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php the_content(); ?>

				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
				<div class="main-product-cta">
					<?php the_field('cta_description');?>
					<?php 
   					$cta_url = get_field('cta_url');
   					$cta_form = get_field('cta_form');

  				if( $cta_url != '' ){ ?>

   					<a class="cta-bttn-sml" href="<?php the_field('cta_url'); ?>"><?php the_field('cta_txt'); ?></a>

 					<?php } else { ?>

 						<?php echo $cta_form; ?>

					<?php } ?>
				</div>
			</section>
			<section class="product-persuasion clear">
				<article class="persuasion-text">
					<?php the_field('persuasions'); ?>
				</article>
				<div class="product-testimonials">
					<?php 
						$page_slug = $post->post_name;
						$args = array(
							'post_type' => 'testimonial',
							'category_name' => $page_slug,
							'posts_per_page' => 1,
							'orderby' => 'rand'
						);
					?>
					<?php $posts = new WP_Query( $args ); ?>

					<?php if ( $posts->have_posts() ): ?>
					<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
					<article class="product-testimonial">
						<span class="portrait">
							<?php if (has_post_thumbnail() ){
								the_post_thumbnail( array(200, 200));
							}?>
						</span>
						<span><?php the_title();?></span>
						<?php the_content();?>
					</article>	
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else:  ?>
						<!--<p><?php _e( 'Geen testimonial gevonden' ); ?></p>-->
					<?php endif; ?>
				</div>
			</section>
			<section class="practicals">
				<article class="pract-1 practical">
					<?php the_field('practical_1');?>
				</article>
				<article class="pract-2 practical">
					<?php the_field('practical_2');?>
				</article>
				<article class="pract-3 practical">
					<?php the_field('practical_3');?>
					<!-- <a class="cta-bttn-sml" href="<?php the_field('cta_url'); ?>"><?php the_field('cta_txt'); ?></a> -->
					<?php 
   					$cta_url = get_field('cta_url');
   					$cta_form = get_field('cta_form');

  				if( $cta_url != '' ){ ?>

   					<a class="cta-bttn-sml" href="<?php the_field('cta_url'); ?>"><?php the_field('cta_txt'); ?></a>

 					<?php } else { ?>

 						<?php echo $cta_form; ?>

					<?php } ?>
				</article>
			</section>

			<section class="all-seminars repeat">
				<?php 
						$page_slug = $post->post_name;
						$args = array(
							'post_type' => 'seminars',
							'orderby' => 'date',
							'order' => 'ASC',
							'posts_per_page' => -1
						);
					?>
					<?php $all_seminar = new WP_Query( $args ); ?>

					<?php if ( $all_seminar->have_posts() ): ?>
					<?php while ( $all_seminar->have_posts() ) : $all_seminar->the_post(); ?>
						<div class="seminar-info">
							<h3><?php the_field('date');?> | <?php the_field('place');?></h2>
							<?php the_field('location');?>
							<a class="cta-bttn-sml book-bttn" href="<?php the_field('cta_url');?>" target="_blank"><?php the_field('cta_txt');?></a>
						</div>
					<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else:  ?>
						<!--<p><?php _e( 'Geen locatie gevonden' ); ?></p>-->
					<?php endif; ?>
			</section>
			<br class="clear">
	</main>
<?php get_footer(); ?>
