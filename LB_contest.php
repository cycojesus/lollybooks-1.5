<?php
  /*
   Template Name: Contest
  */
?>
<?php get_header() ?>

<div id="container" class="contest">
  <div id="content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <h2 class="entry-title"><?php the_title() ?></h2>

    <div id="intro">
    <?php the_content() ?>
    </div>

    <?php
    $children = wp_list_pages('sort_column=post_date&sort_order=DESC&title_li=&child_of='.$post->ID.'&echo=0');
    if ($children) {
    ?>
    <!-- div class="sidebar" -->
       <ul id="submissions">
          <?php echo $children; ?>
       </ul>
    <!-- /div -->
    <?php
    }
    ?>
<?php endwhile; ?>

  </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
