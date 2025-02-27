<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>

<section class="section_def_content">
  <div class="container">
    <header>
      <h1 class="page-title screen-reader-text"> // single_post_title(); </h1>
    </header>
    <?php
    while (have_posts()):
      the_post();

      get_template_part('template-parts/content', 'page');

      // If comments are open or we have at least one comment, load up the comment template.
      if (comments_open() || get_comments_number()):
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>
  </div>
</section>

<?php get_footer(); ?>