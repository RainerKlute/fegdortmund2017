<div id="header-box-4">
	<img alt="BN-800"
		src="<?php echo get_bloginfo('template_directory'); ?>/images/BN-800.jpg">
</div>
<div id="header-box-5">
	<h2>Aktuell</h2>
	<p>Heute 19.30 Uhr</p>
	<p>Schulungsabend</p>
	<p>Schutz vor Gewalt und Missbrauch</p>
	<p>Mi, 25. Jan 2017, 17.00 – 19.00 Uhr</p>
	<p>Offenes Pastorenbüro</p>
	<p>So, 29. Jan 2017, 17.00 Uhr</p>
	<p>Lighthouse</p>
	<p>Der (etwas) andere Gottesdienst</p>
</div>
<div id="contents-box">
	<p class="navigation">
		<a href="<?php echo get_bloginfo( 'wpurl' ); ?>">Start</a>
	</p>

	<div class="blog-post">
		<h1 class="blog-post-title"><?php the_title(); ?></h1>
		<?php if (!is_page()): ?>
			<p class="blog-post-meta">Veröffentlicht am <?php the_date(); ?> von <a href="#"><?php the_author(); ?></a></p>
		<?php endif ?>
        <?php the_content(); ?>
    </div>
</div>
