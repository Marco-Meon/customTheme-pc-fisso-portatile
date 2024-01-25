<?php /* Template Name: Custom Template */ ?>

<?php get_header();?>

<main class="main">

  <div class="grid grid--center">
    <div class="col-100">

      <?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

        <?php the_content(); ?>

      <?php endwhile; else :?>

      <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'basetheme');?></p>

      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer();?>