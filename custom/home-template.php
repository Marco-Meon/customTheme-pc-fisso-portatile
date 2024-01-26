<?php /* Template Name: Home Template */ ?>

<?php get_header();?>

<?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

<?php 
  $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
?>


<section class="cover overflow">
  
  <a href="" class="button">
    <span class="button-upper-1"></span>
    <span class="button-upper-2"></span>
    <span class="button-upper"></span>
    Scoprilo ora
    <span class="button-lower"></span>
    <span class="button-lower-1"></span>
    <span class="button-lower-2"></span>
  </a>

  <img class="cover-img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/image-2.png" alt="">
</section>

<main class="grid grid--center">
  <div class="col-100">
    <?php the_content(); ?>
  </div>
</main>

<?php endwhile; else :?>

<p><?php esc_html_e('Non è stato trovato nessun articolo corrisondente alla tua ricerca, prova a cercare altro', 'pcfissoportatile');?></p>

<?php endif; ?>

<?php get_footer();?>