<?php get_header(); ?>

	<main class="main" role="main">
		<!-- section -->
		<section class="main-section clear">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">
				<div class="main-lhs">

					<!-- video -->
					<div class="videowrapper">
						<iframe src="<?php the_field('video_url');?>"></iframe>
					</div>
					<!-- /video -->

					<!-- primary testimonial -->
					<div class="testimonial">
						<?php the_field('prim-test'); ?>
					</div>
				<!-- /testimonial -->
				</div>
				<!-- main-lhs -->
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

		<div class="main-rhs">
			<p class="counter">Al door <?php the_field('cntr-box');?> managers<br>gedownload</p>
			<h2>Gratis Handleiding<br>Weekreview</h2>
			<p>Fluitend het weekend in!
			Met behulp van jouw persoonlijke checklist in een uur overzicht, focus en grip.</p>

			<form accept-charset="UTF-8" action="https://fm295.infusionsoft.com/app/form/process/4be1eac3764075349a4cae7b98ea4226" class="infusion-form" method="POST">
			   <input name="inf_form_xid" type="hidden" value="4be1eac3764075349a4cae7b98ea4226" />
			   <input name="inf_form_name" type="hidden" value="Optin formulier" />
			   <input name="infusionsoft_version" type="hidden" value="1.62.0.53" />
			   <div class="infusion-field">
			       <label for="inf_field_FirstName">Je voornaam*</label>
			       <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" placeholder="Voornaam" />
			   </div>
			   <div class="infusion-field">
			       <label for="inf_field_Email">Je e-mailadres*</label>
			       <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" placeholder="E-mailadres" />
			   </div>
			   <div class="infusion-submit">
			       <input type="submit" value="Download de gratis handleiding" />
			   </div>
			</form>
			<script type="text/javascript" src="https://fm295.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=0e8e84aad17720d17d1431513fede33b"></script>

		</div>

		</section>
		<!-- /main-section -->

		<section class="pos-section clear">
			<article>
				<h1><?php the_field('product_home_title', 15095);?></h1>
				<?php the_field('product_home_intro', 15095); ?>
			</article>
			<article>
				<img class="img-placeholder" src="<?php the_field('product_home_img', 13); ?>" />
				<h1><?php the_field('product_home_title', 13); ?></h1>
				<?php the_field('product_home_intro', 13);?>
				<!-- secondary testimonial -->
					<div class="testimonial">
						<?php the_field('sec-test'); ?>
					</div>
				<!-- /testimonial -->
			</article>
		</section>
		<!-- /pos-section -->

		<section class="products-section clear">
			<article>
				<h1><?php the_field('product_home_title', 15); ?></h1>
				<?php the_field('product_home_intro', 15);?>
			</article>
			<article>
				<h1><?php the_field('product_home_title', 17); ?></h1>
				<?php the_field('product_home_intro', 17);?>

			</article>
			<article>
				<h1><?php the_field('product_home_title', 19); ?></h1>
				<?php the_field('product_home_intro', 19);?>
			</article>
		</section>
		<!-- /products-section -->

		<section class="clients-section clear">
			<h2>Organisaties die Adjustintime inzetten voor het verhogen van de managementproductiviteit.</h2>
			<div class="clients">
				<?php the_field('logo_bar', false, false); ?>
			</div>
		</section>

		<section class="add-section clear">
			<div class="tips-list">
				<h1>Top Tips</h1>
				<a href="<?php echo home_url(); ?>/tips" class="blog-link">Bekijk alle tips</a>

				<?php if (function_exists('get_highest_rated')): ?>
    				<ul>
        				<?php get_highest_rated('post', 0, 3); ?>
    				</ul>
				<?php endif; ?>
			</div>
			<div class="tips-mail">
				<h2>Top Tips in je mailbox?</h2>
				<p>Laat je naam en e-mailadres hier achter en je ontvangt iedere vrijdag nieuwe tips in je mailbox waarmee je je productiviteit kunt verhogen. Daarnaast kun je gelijk de <a href="#">Handleiding ‘Weekreview’</a> downloaden.</p>

				<form accept-charset="UTF-8" action="https://fm295.infusionsoft.com/app/form/process/4be1eac3764075349a4cae7b98ea4226" class="infusion-form" method="POST">
					<input name="inf_form_xid" type="hidden" value="4be1eac3764075349a4cae7b98ea4226" />
					<input name="inf_form_name" type="hidden" value="Optin formulier" />
					<input name="infusionsoft_version" type="hidden" value="1.62.0.53" />
					<div class="infusion-field">
					   <label for="inf_field_FirstName">Je voornaam*</label>
					   <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" placeholder="Voornaam" />
					</div>
					<div class="infusion-field">
					   <label for="inf_field_Email">Je e-mailadres*</label>
					   <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" placeholder="E-mailadres" />
					</div>
					<div class="infusion-submit">
					   <input type="submit" value="Verstuur om te abonneren" />
					</div>
				</form>
				<script type="text/javascript" src="https://fm295.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=0e8e84aad17720d17d1431513fede33b"></script>
			</div>
		</section>
	</main>


<?php get_footer(); ?>
