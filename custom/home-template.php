<?php /* Template Name: Home Template */ ?>

<?php get_header();?>

<?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

<?php 
  $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
?>


<!-- CODE -->


<main class="grid grid--center">
  <div class="col-100">
    <?php the_content(); ?>
  </div>
</main>

<?php endwhile; else :?>

<p><?php esc_html_e('Non è stato trovato nessun articolo corrisondente alla tua ricerca, prova a cercare altro', 'basetheme');?></p>

<?php endif; ?>

<?php get_footer();?>