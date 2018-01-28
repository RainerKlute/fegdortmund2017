<?php get_header(); ?>

<div id="contents-box">
    <p class="navigation">
        <a href="<?php echo get_bloginfo( 'wpurl' ); ?>">Start</a>
    </p>

    <h1>Suchergebnis:</h1>

    <?php
    if (have_posts ()) :
    ?>
        <ul class="search-result">
    <?php
        while (have_posts () ) :
            the_post ();
    ?>
            <li><p class="search-result-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <div class="search-result-thumbnail"><?php the_post_thumbnail(); ?></div>
            <div class="search-result-excerpt"><?php the_excerpt(); ?></div>
    <?php
        endwhile;
    ?>
        </ul>
    <?php
    else :
        _e( 'Nichts gefunden, sorry!', 'textdomain' );
    endif;
?>

    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>