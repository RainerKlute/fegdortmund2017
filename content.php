<div id="contents-box">
    <p class="navigation">
        <a href="<?php echo get_bloginfo( 'wpurl' ); ?>">Start</a>
    </p>

    <div class="blog-post">
        <h1 class="blog-post-title"><?php the_title(); ?></h1>
        <?php if (!is_page()): ?>
            <p class="blog-post-meta">Veröffentlicht am <?php the_date(); ?> von
                <a href="#"><?php the_author(); ?></a></p>
        <?php endif ?>
        <?php the_content(); ?>
    </div>
</div>
