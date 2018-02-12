<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class = "titre-page offset-lg-4 offset-md-2 offset-1">
<h1><?php the_field('nom_du_projet'); ?></h1>
</div>



	<section id="primary" class="content-area col-sm-12 col-lg-7 offset-lg-3">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			    the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

<?php[contact-form-7 id="166" title="Untitled"]<?

		</main><!-- #main -->


	<p> <?php the_field('description_du_projet'); ?></p>
	<a href =<?php the_field('lien_vers_le_projet'); ?>>
	<?php

	$image = get_field('aperçu_visuel_du_projet');

	if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</a>
	<?php endif; ?>


	<p>technologies_utilisees :</p>
	<ul> <?php the_field('technologies_utilisees_dans_le_projet'); ?></ul>


	</section><!-- #primary -->





<?php

get_footer();
