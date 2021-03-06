<?php
  /*
   Template Name: HomePage v3
  */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
  <head>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		      ?>
    </title>

    <!-- We put all javascript hereso that DOM is loaded when JS is called -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquerycurvycorners/jquery-1.3.2.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <!-- http://plugins.jquery.com/project/maphilight -->
    <script src="<?php bloginfo('template_directory'); ?>/js/maphilight/jquery.maphilight.min.js"></script>
    <!-- http://code.google.com/p/jquerycurvycorners/ -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquerycurvycorners/jquery.curvycorners.packed.js"></script>
    <script>
$(function() {
   // start maphilight plugin
   $('img[usemap]').maphilight();
});
	</script>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); /*bloginfo( 'stylesheet_url' );*/ ?>/style-v3.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
?>
  </head>
  <body <?php body_class(); ?>>

    <!--banner_top-->
    <header class="banner_top">
      <!-- Tree header and its image-map -->
      <img class="background center" src="<?php bloginfo('template_directory'); ?>/images/banner_map.gif" width="960" height="511" usemap="#Tree.map" />
      <map name="Tree.map">
        <area shape="poly" coords="330,343,323,411,378,417,386,348" alt="Coffee" href="#"/>
        <area shape="poly" coords="534,380,546,435,591,425,576,372" alt="Books" href="#" />
      </map>
      <!-- /Tree -->
    </header>
    <!--/banner_top-->

    <!--menutop-->
    <nav class="menutop" role="navigation">
      <!-- a href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerplate' ); ?>"><?php _e( 'Skip to content', 'boilerplate' ); ?></a -->
	  <div class="menu-header">
        <ul id="menu-navigation" class="menu left">
          <li class="menu-item">
	        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/home.jpg" width="80" height="78"/></a>
          </li>
          <li class="menu-item">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/about_us.jpg"/></a>
          </li>
          <li class="menu-item">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/services.jpg" /></a>
          </li>
          <li class="menu-item">
            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="<?php bloginfo( 'description' ); ?>"/></a>
          </li>
          <li class="menu-item">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/event.jpg"/></a>
          </li>
          <li class="menu-item">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/libary.jpg"/></a>
          </li>
          <li class="menu-item">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/club.jpg" /></a>
          </li>
        </ul>
		<!-- ?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ? -->
    </nav>
    <!--/menutop-->

    <div class="content">
      <div class="content_in" >
        <aside id="contact">
          <span class="center">
            Số 18, Ngõ 131, Thái Hà, Hà Nội
            ~
            <img src="<?php bloginfo('template_directory'); ?>/images/facebook_favicon.ico" height="12px" width="12px" /> <a href="http://facebook.com/lollybooks">http://facebook.com/lollybooks</a>
            ~
            ✉ <a href="mailto:info@lollybooks.com">info@lollybooks.com</a>
            ~
            ℡ 04.6276.8545 - 0977.910.727 - 0988.172.298
          </span>
        </aside>

        <?php /* END header.php */ ?>
        <?php /* BEGIN sidebar.php */ ?>
           
        <aside class="left_content">
          <ul class="xoxo">
            <?php if ( ! dynamic_sidebar( 'left-widget-area-v3' ) ) :
                  endif; ?>
          </ul>
        </aside> <!-- left_content -->

        <aside class="right_content">
		  <ul class="xoxo">
			<?php if ( ! dynamic_sidebar( 'right-widget-area-v3' ) ) :
                  endif; ?>
          </ul>
        </aside> <!-- right_content -->
        
        <?php /* END sidebar.php */ ?>
        <?php /* BEGIN <i></i>ndex/LB_xxx.php */ ?>

        <section id="content" class="middle_content" role="main">
<?php
           query_posts( array( 'numberposts' => 1, 'tag' => 'homepage', 'orderby' => 'post_date', ) );
   while (have_posts()) : the_post();
?>
          <article>
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

            <div class="entry-content">
              <?php the_content(); ?>
            </div><!-- .entry-content -->

            <p class="link_post_center"><a href="<?php the_permalink(); ?>">Xem chi tiết ...</a></p>
          </article>
<?php
   endwhile;
?>
		</section><!-- #main -->
<?php /* END index/LB_xxx.php */ ?>
<?php /* BEGIN footer.php */ ?>

      </div> <!-- .content_in -->
    </div> <!-- .content -->

    <hr class="frise"/>

	<footer role="contentinfo">
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
//	get_sidebar( 'footer' );
?>
      <div class="footer_in">
        <nav class="menu_footer">
          <ul>
            <li>
              <div class="box_footer1">
       	        <img src="<?php bloginfo('template_directory'); ?>/images/img_footer1.gif" width="67" height="76" />
                <h3>
                  <a href="#">Cảm nhận phim,Cảm nhận sách</a>
                  <p>Có gì mới tại Lollybooks Café?</p>
                </h3>
              </div>
            </li>
            <li>
              <div class="box_footer1">
       	        <img src="<?php bloginfo('template_directory'); ?>/images/img_footer2.gif" width="67" height="76" />
                <h3>
                  <a href="#">Đời sống giới trẻ</a>
                  <p>Có gì mới tại Lollybooks Café?</p>
                </h3>
              </div>
            </li>
            <li>
              <div class="box_footer1">
       	        <img src="<?php bloginfo('template_directory'); ?>/images/img_footer3.gif" width="67" height="76" />
                <h3>
                  <a href="#">Blog</a>
                  <p>Có gì mới tại Lollybooks Café?</p>
                </h3>
              </div>
            </li>
            <li>
              <div class="box_footer1">
       	        <img src="<?php bloginfo('template_directory'); ?>/images/img_footer4.gif" width="67" height="76" />
                <h3>
                  <a href="#">Đối tác</a>
                  <p>Có gì mới tại Lollybooks Café?</p>
                </h3>
              </div>
              
              <div class="box_footer1">
       	        <img src="<?php bloginfo('template_directory'); ?>/images/img_footer5.gif" width="67" height="76" />
                <h3>
                  <a href="#">Liên hệ</a>
                  <p>Có gì mới tại Lollybooks Café?</p>
                </h3>
              </div>
            </li>
          </ul>
        </nav>
        
        <div class="text_footer">
          Copyright © 2010 <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>. All right reserved. Địa chỉ: Số 18, ngõ 131, Thái Hà. Điện thoại: 04.6276.8545 - Email: info@lollybooks.com
        </div>
      </div>
	</footer>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
  </body>
</html>

