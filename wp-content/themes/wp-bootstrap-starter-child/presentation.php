<?php
/**
* Template Name: Presentation
*/

get_header(); ?>

<section id="primary" class="content-area col-sm-12">

	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

	<div class="content-formation">
		<h2 class="titre"><?php the_field('titre-form'); ?></h2>
	<p class="formation"><?php the_field('formation'); ?></p>
</div>
	<div class="row">
	<div class="content-formation competences col-lg-4 offset-lg-1">
		<h2 class= "titre"><?php the_field('titre-presentation'); ?></h2>
		<ul>

			<li> <?php the_field('competence1'); ?></li>
			<li> <?php the_field('competence2'); ?></li>
			<li> <?php the_field('competence3'); ?></li>
			<li> <?php the_field('competence4'); ?></li>
			<li> <?php the_field('competence5'); ?></li>
			<li> <?php the_field('competence6'); ?></li>
		</ul>
	</div>
	<div class=" content-formation col-lg-4 offset-lg-2">
	<h2 class="titre"><?php the_field('titre-experience_proffessionelle'); ?></h2>

		<ul>
<li><?php the_field('experience_pro1'); ?></li>
<li><?php the_field('experience_pro2'); ?></li>
<li><?php the_field('experience_pro3'); ?></li>
<li><?php the_field('experience_pro4'); ?></li>
<li><?php the_field('experience_pro5'); ?></li>

		</ul>
	</div>
</div>

</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
