<?php get_header();?>

<main class="main">

  <div class="grid grid--center">
    <div class="col-100">

      <?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

      <article class="article">
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail('image-big', array('class' => 'mb-2','alt' => get_the_title()));?>
        <?php the_content(); ?>
      </article>

      <?php endwhile; else :?>
      <p><?php esc_html_e('Non è stato trovato nessun articolo corrisondente alla tua ricerca, prova a cercare altro', 'basetheme');?></p>
      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer();?>