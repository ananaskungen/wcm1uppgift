
<body>


<?php var_dump(get_bloginfo('name')); ?>
<?php var_dump(get_bloginfo('post_title')); ?>
<?php var_dump( get_bloginfo('description', 'display')); ?>
<?php wp_nav_menu(['theme_location' => 'footer']); ?>

<img src="<?php echo get_theme_file_uri($file) ?>" alt="" />

<?php 
if ( have_posts() ) : 
  while ( have_posts() ) : the_post();
      the_title();
  endwhile;
else :
  _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
<h1>Test</h1>

<?php echo get_footer() ?>