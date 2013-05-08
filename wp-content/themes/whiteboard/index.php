<?php get_header()?>
<?php get_sidebar()?>
<?php get_sidebar('left')?>
<div id="main">

    <?php while(have_posts()): the_post()?>

        <div id="post">
            <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
            <p>
               By <?php echo get_the_author_link();?>
            </p>
            <?php the_content(__('Continue Reading'));?>
        </div>
    <?php endwhile;?>

</div>

<?php get_footer()?>
