<?php get_header();?>

<main class="main">

  <div class="grid grid--center">

    <div class="col-70">

      <?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

      <article id="post-<?php the_ID();?>"
        <?php post_class();?>>
        <h1><?php the_title();?></h1>
        <p><?php the_time('j M Y ');?> - <?php the_category(', '); ?>
          <?php the_tags('(', ', ', ')'); ?></p>
        <?php the_post_thumbnail('image-big', array('class' => 'mb-2','alt' => get_the_title()));?>
        <?php the_content();?>
        <?php wp_link_pages();?>
      </article>

      <?php endwhile; else :?>

      <p><?php esc_html_e('Non è stato trovato nessun articolo corrisondente alla tua ricerca, prova a cercare altro', 'pcfissoportatile');?></p>

      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer();?>