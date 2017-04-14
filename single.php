<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ikebana
 */

get_header(); ?>
	<section>
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<div class="blog-page">
						<div class="col-md-8">
							<div class="single-page">

								<?php
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/content', get_post_format() );
									the_content();

									the_post_navigation( array(
										'screen_reader_text' => '',
										'next_text' => '' .
											'<span class="post-title">%title</span>' .
											'<span class="screen-reader-text"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> ' ,
										'prev_text' => '' .
											'<span class="screen-reader-text"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span> ' .
											'<span class="post-title">%title</span>',

									) );
								?>
									<ul class="commentlist">

										<?php
										$comments = get_comments(array(
											'post_id' => $id,
											'status' => 'approve' // комментарии прошедшие модерацию
										));

										$bomaComm = __('comments', 'momino');
										echo "<div class='head-title-comments'><h2>$bomaComm</h2></div>";

										$args = array(
											'walker'            => null,
											'max_depth'         => '',
											'style'             => 'ul',
											'callback'          => null,
											'end-callback'      => null,
											'type'              => 'all',
											'reply_text'        => 'Reply',
											'page'              => '',
											'per_page'          => '',
											'avatar_size'       => 64,
											'reverse_top_level' => null,
											'reverse_children'  => '',
											'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
											'short_ping'        => false,    // С версии 3.6,
											'echo'              => true,     // true или false
										);

										wp_list_comments( $args, $comments );
										?>
									</ul>

									<?php
									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :

										$comment_args = array( 'title_reply'=>'Got Something To Say:',

											'fields' => apply_filters( 'comment_form_default_fields', array(

												'author' => '<p class="comment-form-author">' .  ( $req ? '<span>*</span>' : '' ) .
													'<input id="author" name="author" placeholder="Name" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
												'email'  => '<p class="comment-form-email">' .
													( $req ? '<span>*</span>' : '' ) .
													'<input id="email" name="email" placeholder="Email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

												'ur	l'    => '' ) ),

											'comment_field' =>
												'<p>' .
												'<textarea id="comment" name="comment" cols="45" rows="6" aria-required="true" placeholder="Comment"></textarea>' .
												'</p>',

											'comment_notes_after' => '',

											'submit_button'			=> '<input name="%1$s" type="submit" id="%2$s" class="comment-btn" value="Leave a comment" />'

										);

								 		comment_form($comment_args);



									endif;

								endwhile; // End of the loop.
								?>

							</div>
						</div>

						<div class="col-md-4">
							<?php get_sidebar();?>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>

<?php get_footer();?>
