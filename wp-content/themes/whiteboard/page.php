<style>
    #main {
        padding: 5px;
        border-width: 15px 18px 25px 15px;
        -o-border-image: url("<?php bloginfo('stylesheet_directory'); ?> /images/box-4.svg") 15 30 20 15 stretch stretch;
        -icab-border-image: url("<?php bloginfo('stylesheet_directory'); ?> /images/box-4.svg") 15 30 20 15 stretch stretch;
        -khtml-border-image: url("<?php bloginfo('stylesheet_directory'); ?> /images/box-4.svg") 15 30 20 15 stretch stretch;
        -moz-border-image: url("<?php bloginfo('stylesheet_directory'); ?> /images/box-4.svg") 15 30 20 15 stretch stretch;
        -web-kit-border-image: url("<?php bloginfo('stylesheet_directory'); ?> /images/box-4.svg") 15 30 20 15 stretch stretch;
        border-image: url("<?php bloginfo('stylesheet_directory'); ?> /images/box-4.svg") 15 30 20 15 stretch stretch;
    }
</style>
<?php get_header()?>
<?php get_sidebar()?>
<div id="main">

    <?php while(have_posts()): the_post()?>

        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <?php the_content();?>

    <?php endwhile;?>

</div>

<?php get_footer()?>
