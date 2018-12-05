<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pine-alpha
 */

$sidebar_poisition = ( metadata_exists( 'post', get_the_ID(), '_pine_alpha_sidebar_poisition' )  ? get_post_meta( get_the_ID(), '_pine_alpha_sidebar_poisition', true ) : 'right' );

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="post-comment
	<?php if( $sidebar_poisition != 'none' ) {
		echo 'is-one-col';
	} ?>
">
<?php if( $sidebar_poisition == 'none' ) : ?>
	<div class="container">
		<div class="row">
<?php endif; ?>
			<div class="comment-list-col<?php if( $sidebar_poisition == 'none' ) { echo 'col-12 col-md-6'; } ?>">	
				<?php
					// You can start editing here -- including this comment!
					if ( have_comments() ) :
						?>
						<h3 class="comment-title">
							<?php
							$pine_alpha_comment_count = get_comments_number();
							if ( '1' === $pine_alpha_comment_count ) {
								printf(
									/* translators: 1: title. */
									esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'pine-alpha' ),
									'<span>' . get_the_title() . '</span>'
								);
							} else {
								printf( // WPCS: XSS OK.
									/* translators: 1: comment count number, 2: title. */
									esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $pine_alpha_comment_count, 'comments title', 'pine-alpha' ) ),
									number_format_i18n( $pine_alpha_comment_count ),
									'<span>' . get_the_title() . '</span>'
								);
							}
							?>
						</h3>

						<?php the_comments_navigation(); ?>
						
						<ul class="comment-list">
							<?php
							wp_list_comments( array(
								'style'      => 'ul',
								'short_ping' => true,
							) );
							?>
						</ul>

						<?php
						the_comments_navigation();

						// If comments are closed and there are comments, let's leave a little note, shall we?
						if ( ! comments_open() ) :
							?>
							<?php esc_html_e( 'Comments are closed.', 'pine-alpha' ); ?>
							<?php
						endif;
					endif; // Check for have_comments().
				?>
			</div>
			<div class="comment-form-col <?php if( $sidebar_poisition == 'none' ) { echo 'col-12 col-md-6'; } ?>">
				<?php comment_form(); ?>
			</div>
<?php if( $sidebar_poisition == 'none' ) : ?>
		</div>
	</div>
<?php endif; ?>
</div>