<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ikebana
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php ikebana_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ikebana' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ikebana' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
<!--		--><?php //ikebana_entry_footer(); ?>


		<?php
		$args = array(
			'number'        => 0
		,'offset'       => 0
		,'orderby'      => 'id'
		,'order'        => 'ASC'
		,'hide_empty'   => true
		,'fields'       => 'all'
		,'slug'         => ''
		,'hierarchical' => true
		,'name__like'   => ''
		,'pad_counts'   => false
		,'get'          => ''
		,'child_of'     => 0
		,'parent'       => ''
		);

		$tags = get_tags($args);

		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
