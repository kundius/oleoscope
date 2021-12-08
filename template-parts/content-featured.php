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
  <?php if ( !is_singular() ) : ?>
	  <?php oleoscope_featured_thumbnail(); ?>
	<?php endif; ?>
	<header class="entry-header">
		<?php
		if ( is_singular() && in_array(get_post_type(), ['news', 'page', 'partners', 'events', 'analytics', 'interview']) ) :
			?>
			<div class="entry-meta">
				111
				<?php
				if ($event_date = get_field('event_date')) {
					echo $event_date;
					// $time_string = '<time class="entry-date" datetime="%1$s">%2$s</time>';
					// $time_string = sprintf( $time_string,
					// 	esc_attr( get_the_date( DATE_W3C ) ),
					// 	esc_html( get_the_date() )
					// );
					// $posted_on = sprintf(
					// 	esc_html_x( '%s', 'post date', 'oleoscope' ),
					// 	'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
					// );
					// echo '<span class="posted-on">' . $posted_on . '</span>';
				} else {
					oleoscope_posted_on();
				}
		    if ( is_singular() ) :
				  oleoscope_posted_by();
	      endif;
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


  <?php if ( is_singular() ): ?>
	<div class="entry-content">
		<?php
    if( has_excerpt() ) {
	    oleoscope_excerpt();
    }

    the_content( sprintf(
      wp_kses(
      /* translators: %s: Name of current post. Only visible to screen readers */
        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'oleoscope' ),
        array(
          'span' => array(
            'class' => array(),
          ),
        )
      ),
      get_the_title()
    ) );


		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'oleoscope' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
  <?php endif; ?>

	<footer class="entry-footer">
		<?php
	  if ( is_singular() ) :
      oleoscope_entry_footer();
    endif;
	  ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
