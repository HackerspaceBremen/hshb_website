<?php get_header(); ?>

    <div id="content-wrapper">
        <div class="push-top"></div>
        <div id="content">
            <?php dynamic_sidebar( 2 ); 
            ?> 
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
                get_template_part('content');
            endwhile; endif; ?>
            <!--<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>-->

        </div><!-- content -->
        <div id="sidebar">
            <a href="<?php get_home_url(); ?>/"><script type="text/javascript">
            var logo = createLogo(true);
            if(Math.random() < 0.5) {
                $(window).load( function() { logo.showRandom(10, 200) });
            } else {
                $(window).load( function() { logo.showBottomTop(50, 200) });
            }
            </script>
            <noscript><img id="pixel" src="<?php bloginfo('template_directory'); ?>/noscript.png" /></noscript>
            <div id="logo"></div></a>
            <?php dynamic_sidebar( 1 ); ?> 
        </div><!-- sidebar -->
        <div class="push"></div>
        <div class="clear"></div>
    </div><!-- content-wrapper -->
<?php get_footer(); ?>
