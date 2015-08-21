<?php
/**
 * The template for displaying Search Results pages.
 *
 * @since 3.0.0
 */
get_header(); ?>

	<section id="primary" <?php bavotasan_primary_attr(); ?> role="main">

		<?php if ( have_posts() ) : ?>

			<h1 id="search-header" class="page-title">
				<?php
				global $wp_query;
			    $num = $wp_query->found_posts;
				printf( '%1$s "%2$s"',
				    $num . __( ' search results for', 'magazine-basic'),
				    get_search_query()
				);
				?>
			</h1>

			<?php
			while ( have_posts() ) : the_post();
		    	global $mb_content_area;
		    	$mb_content_area = 'main';

		    	get_template_part( 'content', get_post_format() );
			endwhile;

			bavotasan_pagination();

		else :
			get_template_part( 'content', 'none' );
		endif;
		?>

	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>