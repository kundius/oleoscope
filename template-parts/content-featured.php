<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OleoScope
 */

?>
<!-- CONTENT INTERVIEW -->
<!-- All posts and feeds except the Interview -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php oleoscope_featured_thumbnail(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
