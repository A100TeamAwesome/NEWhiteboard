<?php get_header()?>
<?php get_sidebar()?>
<div id="main">

    <?php while(have_posts()): the_post()?>

        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <?php the_content();?>

    <?php endwhile;?>

    <?php comments_template('', true);?>

</div>

<?php get_footer()?>
