<?php get_header(); ?>
<h1 class="titre-page offset-lg-4">Mes projets</h1>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="projets col-sm-12 col-lg-5 offset-lg-1">
      <article class="projet">
        <?php the_post_thumbnail( 'thumbnail' ); ?>



          <?php the_content(); ?>

        <a href =<?php the_field('lien_vers_le_projet'); ?>> <h3> <?php the_field('nom_du_projet'); ?></h3></a>


        <?php

        $image = get_field('aperçu_visuel_du_projet');

        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>







        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
