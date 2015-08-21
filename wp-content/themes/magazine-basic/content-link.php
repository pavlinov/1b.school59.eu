<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @since 3.0.0
 */
$class = bavotasan_article_class();
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
		<h3 class="post-format">Link</h3>

	    <div class="entry-content">
		    <?php the_content( 'Read more &rarr;' ); ?>
	    </div><!-- .entry-content -->

	    <?php get_template_part( 'content', 'footer' ); ?>

	</article>