<?php
$uiexpertz_content_padding_top = empty(has_post_thumbnail()) ? '' : '';
$uiexpertz_audio_url = function_exists('get_field') ? get_field('fromate_style') : NULL;
$categories = get_the_terms($post->ID, 'category');
$cbtoolkit_blog_btn_switch = get_theme_mod('cbtoolkit_blog_btn_switch', true);
$cbtoolkit_blog_meta_switch = get_theme_mod('cbtoolkit_blog_meta_switch', true);
$cbtoolkit_blog_author_switch = get_theme_mod('cbtoolkit_blog_author_switch', true);
$cbtoolkit_blog_date_switch = get_theme_mod('cbtoolkit_blog_date_switch', true);
$cbtoolkit_blog_comments_switch = get_theme_mod('cbtoolkit_blog_comments_switch', true);
$cbtoolkit_blog_btn_text = get_theme_mod('cbtoolkit_blog_btn_text', __('Read More', 'uiexpertz'));
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-blog format-audio mb-40'); ?>>
    <div class="uiexpertz-fz-blog-thumbnail-content-wrapper-main-448">
    <?php if (!empty($uiexpertz_audio_url)) : ?>
        <div class="postbox__audio embed-responsive embed-responsive-16by9 uiexpertz-fz-thumbnail-image uiexpertz-fz-blog-thumbnail-447">
            <?php echo wp_oembed_get($uiexpertz_audio_url); ?>
            <?php if (!empty($cbtoolkit_blog_date_switch)) : ?>
                <div class="uiexpertz-blog-caption-date-447">
                    <span class="day"><?php print esc_html(get_the_date('d', get_the_ID())); ?></span>
                    <span class="month"><?php print esc_html(get_the_date('M', get_the_ID())); ?></span>
                </div>
            <?php endif; ?>
            <?php if (!empty($cbtoolkit_blog_meta_switch)) : ?>
                <div class="uiexpertz-blog-meta-in-box-447 d-none d-sm-flex">
                    <?php if (!empty($cbtoolkit_blog_author_switch)) : ?>
                        <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo get_avatar(get_the_author_meta('ID')); ?><?php print esc_html(get_the_author()); ?></a>
                    <?php endif; ?>
                    <?php if(!empty($first_cat_name)) : ?>
                        <a href="<?php echo esc_url($first_cat_url) ? esc_url($first_cat_url): ''; ?>"><?php echo esc_html($first_cat_name); ?></a>
                    <?php endif; ?>
                    <?php if (!empty($cbtoolkit_blog_comments_switch)) : ?>
                        <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
        <?php if (!empty(get_the_content())) : ?>
            <div class="uiexpertz-fz-blog-details-contant-main-wrap-448 uiexpertz-fz-blog-content-447 <?php echo esc_attr($uiexpertz_content_padding_top); ?>">
                <?php if (get_the_title()) : ?>
                <h4 class="uiexpertz-fz-blog-title-447"><?php the_title(); ?></h4>
            <?php endif; ?>

            <?php if (!empty($cbtoolkit_blog_meta_switch)) : ?>
                <div class="uiexpertz-fz-blog-meta-wrap-447 mb-15 d-sm-none">
                    <?php if (!empty($cbtoolkit_blog_author_switch)) : ?>
                        <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><i class="fal fa-user"></i><?php print esc_html(get_the_author()); ?></a>
                    <?php endif; ?>
                    <?php if(!empty($first_cat_name)) : ?>
                        <a href="<?php echo esc_url($first_cat_url) ? esc_url($first_cat_url): ''; ?>"><i class="fal fa-tag"></i><?php echo esc_html($first_cat_name); ?></a>
                    <?php endif; ?>
                    <?php if (!empty($cbtoolkit_blog_comments_switch)) : ?>
                        <a href="<?php comments_link(); ?>"><i class="fal fa-comments"></i><?php comments_number(); ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
                <?php the_content(); ?>
                <?php
                wp_link_pages([
                    'before'      => '<div class="page-links">' . esc_html__('Pages:', 'uiexpertz'),
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                ]);
                ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="uiexpertz-blog-details-tag pt-40">
        <div class="row align-items-center">
            <div class="col-12">
                <?php if(has_category( '', get_the_ID() )) : ?>
                <div class="uiexpertz-fz-has-category mb-15">
                    <span class="uiexpertz-fz-tagcloud-label-448 mr-25"><?php echo esc_html__('Category:', 'uiexpertz'); ?> </span><?php echo get_the_category_list(', ', '', get_the_ID()); ?>
                </div>
                <?php endif; ?>
                <?php if (!empty(uiexpertz_get_tag())) : ?>
                <?php print uiexpertz_get_tag(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</article>