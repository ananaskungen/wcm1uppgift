<article <?php
post_class(); ?> id="post-<?php
the_ID(); ?>">

    <div id="our-post-thumbnail">
        <?php the_post_thumbnail('wcm-gallery'); ?>
    </div>
	<?php
    the_content();

	the_shortlink(); ?>
</article>
