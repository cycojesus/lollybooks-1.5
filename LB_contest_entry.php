<?php
  /*
   Template Name: Contest Entry
  */
?>
<?php get_header() ?>

<div id="container" class="contest-entry">
  <div id="content">

    <!-- div id="nav-above" class="navigation">
      <div class="nav-previous"><a href="javascript:history.back(  );">Back to main page</a></div>
    </div -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="intro">

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>

<?php edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
</div>
    <?php
  if($post->post_parent)
  $children = wp_list_pages("sort_column=post_date&sort_order=DESC&title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("sort_column=post_date&sort_order=DESC&title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <ul id="submissions">
  <?php echo $children; ?>
  </ul>
  <?php } ?>
<?php endwhile; ?>
  </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
