<?php
/*
Template Name: Recommended Page
*/
?>
<?php get_header(); ?>			
<div id="content">
	<div id="inner-content" class="wrap clearfix">
		<div id="main" class="eightcol first clearfix" role="main">

			<?php
			$args = array( 'numberposts' => 10, 'order'=> 'DESC', 'orderby' => 'post_date', 'category' => '4' );
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post); ?> 

			
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				
				<header class="article-header">
					
					<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					
					<p class="meta"><?php _e('Posted', 'bonestheme'); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time> <span class="amp">&</span> <?php _e('filed under', 'bonestheme'); ?> <?php the_category(', '); ?>.</p>
					
				</header> <!-- end article header -->
				<div class="text-center">
					<?php the_post_thumbnail(); ?>
				</div>
				<section class="post-content">
					<?php the_content(); ?>
				</section> <!-- end article section -->

				<footer class="article-footer">

					<p class="clearfix"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>

				</footer> <!-- end article footer -->

			</article> <!-- end article -->

		<?php endforeach; ?>

	</div> <!-- end #main -->

	<?php get_sidebar(); // sidebar 1 ?>

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>