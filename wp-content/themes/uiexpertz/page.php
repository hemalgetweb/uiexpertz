
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uiexpertz
 */

get_header();
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
$uiexpertz_base_url = explode("/",$current_url);
?>

<div class="<?php echo esc_attr($section_class); ?>">
    <div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="uiexpertz-page-content">
					<?php
						if ( have_posts() ):
							while ( have_posts() ): the_post();
								get_template_part( 'post-formates/content', 'page' );
							endwhile;
						else:
							get_template_part( 'post-formates/content', 'none' );
						endif;
					?>
				</div>
			</div>
		</div>
    </div>
</div>

<?php
get_footer();
