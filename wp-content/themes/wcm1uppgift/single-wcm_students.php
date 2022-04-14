<?php

get_header(); ?>
<h1>Student</h1>
<div class="">
	<?php

	

	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
            <article <?php
			post_class(); ?> id="post-<?php
			the_ID(); ?>">
                <a href="<?php
				the_permalink(); ?>"><h2><?php
						the_title(); ?></h2></a>
                <div id="our-post-thumbnail">
					<?php
					the_post_thumbnail( 'student-gallery' ); ?>
                </div>
				<?php
				the_excerpt(); ?>
				<h1>Testar om det går</h1>
            </article>
	
		<?php
		$studentId = the_ID();
		endwhile;

		if ( is_single() ) :
			previous_post_link();
			next_post_link();
		endif;
	else :
		_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	endif;

	$posts = get_posts(array(
		'numberposts'	=> -1,
		'post_type'		=> 'post',
		'meta_key'		=> 'student',
		'meta_value'	=> $studentId 
	));

	if( $posts ): ?>
	
		<ul>
			
		<?php foreach( $posts as $post ): 
			
			setup_postdata( $post );
			
			?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
		
		<?php endforeach; ?>
		
		</ul>
		
		<?php wp_reset_postdata(); ?>
	
	<?php endif; ?>
</div>
<?php
get_footer(); ?>
