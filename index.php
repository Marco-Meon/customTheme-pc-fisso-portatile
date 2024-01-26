<?php get_header();?>

<main class="grid">

  <div class="col-100">

  <?php if ( is_search() ) {?>

    <h1>
      <?php esc_html_e( 'Risultato per: ', 'pcfissoportatile');?><?php echo $s;?>
    </h1>

    <?php } else if ( is_category() || is_tag() || is_tax() ) {?>

    <h1><?php echo single_cat_title();?></h1>

    <?php } else if ( is_home() ){?>

    <h1> <?php bloginfo('name');?></h1>

    <form method="get" action="<?php echo esc_url(home_url());?>" class="form-search">
      <input type="text" placeholder="<?php esc_attr_e('Cerca...', 'pcfissoportatile');?>"name="s">
      <button type="submit">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/search-outline.svg" alt="Search">
      </button>
    </form>

    <?php } ?>

    </div>

    <?php if (have_posts()) :?>

    <?php while(have_posts()) : the_post();?>

    <article class="col-33 mt-2">
      <a href="<?php the_permalink();?>" class="text-dark">
        <?php the_post_thumbnail('image-small', array('class' => 'mb-2','alt' => get_the_title()));?>
        <h3><?php the_title();?></h3>
        <?php the_excerpt();?>
      </a>
      <?php the_category(', '); ?>
      <?php the_tags('(', ', ', ')'); ?>
    </article>

    <?php endwhile;?>
    <div clas="col-100"><?php previous_posts_link( 'Nuovi post' );?> <?php next_posts_link( 'Vecchi post' );?></div>
    <?php else :?>
    <div clas="col-100"><?php esc_html_e('Non è stato trovato nessun articolo corrisondente alla tua ricerca, prova a cercare altro', 'pcfissoportatile');?></div>
    <?php endif;?>

</main>


<?php get_footer();?>