<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uiexpertz
 */
get_header();

$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 8;
$sidebar_class = is_active_sidebar( 'blog-sidebar' ) ? 'theme-has-blog-sidebar' : 'theme-has-blog-no-sidebar';
$cbblog_layout = get_theme_mod('cbblog_layout') ? get_theme_mod('cbblog_layout') : 'right-sidebar';
if(isset($_GET['s'])) {
	$search = $_GET['s'];
}
$sidebar_space = '';
if($cbblog_layout == 'right-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? 'ml-50' : '';
} else if($cbblog_layout == 'left-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? 'mr-50' : '';
} else {
	$blog_column = 8;
}

// Get all categories for the "post" post type
$categories = get_categories(array(
    'taxonomy' => 'category', // Specify the taxonomy (category in this case)
    'hide_empty' => true,    // Set to false to include categories with no posts
	'post_type' => 'post'
));


?>
<!-- blog-pots -->
<section class="service section-padding bg-clr-lightGray">
    <div class="container">
        <div class=" text-start mb-5">
            <h1 class="fs-40 text-clr-blue py-2">Explore our key experience</h1>
            <p class="text-clr-gray">Each case studies are unique, just like our clients.</p>
        </div>
		<?php
			if ( have_posts() && is_home() ):
		?>
        <div class="explore-experience">
            <div class="search-experience">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="d-flex justify-content-center gap-3">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected="">All Services</option>
                                <option value="1">Service1</option>
                                <option value="2">Service2</option>
                                <option value="3">Service3</option>
                            </select>
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected="">All Industries</option>
                                <option value="1">Industries 1</option>
                                <option value="2">Industries 2</option>
                                <option value="3">Industries 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="blog-search">
                            <input type="search" placeholder="Search" class="search-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row">
					<?php
						while(have_posts()) :
						the_post();
						$is_featured = function_exists('get_field') ? get_field('featured_post'): false;
						$category = get_the_category(get_the_ID());
						$cat_id = '';
						$cat_name = '';
					?>
					<div class="col-lg-4 col-md-6">
                        <div class="service-item service-item-wrap bg-white mb-4 pb-3">
                            <div>
                                <div class="p-1">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="portfolio" class="img-fluid w-100">
                                </div>
                                <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap  px-4 pt-4">
									<?php
									if($category) {
										foreach($category as $index => $cat) {
											$cat_id = $category ? $category[$index]->term_id: '';
											$cat_name = $category ? $category[$index]->name : '';?>
											<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue"><?php echo esc_html($cat_name); ?></li>
										<?php }
									}
									?>
                                </ul>
                                <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                    <h4 class="text-clr-blue fs-5 fw-bold mb-3"><a href="<?php the_permalink(get_the_ID()); ?>"><?php echo wp_trim_words( get_the_title(),9); ?></a></h4>
                                    <p class="fs-6 text-clr-gray mb-3"><?php echo wp_trim_words(get_the_excerpt( get_the_ID() ), 16); ?></p>
                                </div>
                            </div>
                            <a href="<?php the_permalink(get_the_ID()); ?>"
                                class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                <span>
                                    <span class="fs-14 fw-semi-bold text-clr-gray">Read more</span>
                                </span>
                                <span>
                                    <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z">
                                        </path>
                                    </svg>

                                </span>
                            </a>

                        </div>
                    </div>
					<?php endwhile; ?>
                </div>

                <nav aria-label="Page navigation example">
				<?php uiexpertz_pagination( '<svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <mask id="path-1-inside-1_508_1073" fill="white"> <path d="M7.69372 16L1.35572 9.65333C0.919626 9.21519 0.674805 8.62218 0.674805 8.004C0.674805 7.38582 0.919626 6.79281 1.35572 6.35467L7.70105 0L9.11305 1.414L2.76772 7.768C2.70523 7.83051 2.67012 7.91528 2.67012 8.00367C2.67012 8.09206 2.70523 8.17682 2.76772 8.23933L9.10505 14.586L7.69372 16Z"> </path> </mask> <path d="M7.69372 16L1.35572 9.65333C0.919626 9.21519 0.674805 8.62218 0.674805 8.004C0.674805 7.38582 0.919626 6.79281 1.35572 6.35467L7.70105 0L9.11305 1.414L2.76772 7.768C2.70523 7.83051 2.67012 7.91528 2.67012 8.00367C2.67012 8.09206 2.70523 8.17682 2.76772 8.23933L9.10505 14.586L7.69372 16Z" fill="#5648FF"></path> <path d="M7.69372 16L-7.40153 31.0746L7.69765 46.1945L22.7929 31.0707L7.69372 16ZM1.35572 9.65333L-13.7646 24.7029L-13.7521 24.7154L-13.7395 24.728L1.35572 9.65333ZM1.35572 6.35467L-13.7403 -8.71919L-13.7524 -8.70703L-13.7646 -8.69485L1.35572 6.35467ZM7.70105 0L22.7967 -15.0743L7.70064 -30.1917L-7.39498 -15.0739L7.70105 0ZM9.11305 1.414L24.2083 16.4886L39.262 1.41438L24.2087 -13.6603L9.11305 1.414ZM2.76772 7.768L17.8549 22.8507L17.863 22.8426L2.76772 7.768ZM2.76772 8.23933L17.8638 -6.83451L17.8549 -6.84333L2.76772 8.23933ZM9.10505 14.586L24.2042 29.6567L39.2496 14.5829L24.2011 -0.487842L9.10505 14.586ZM22.789 0.925365L16.451 -5.4213L-13.7395 24.728L-7.40153 31.0746L22.789 0.925365ZM16.476 -5.39619C20.0191 -1.83647 22.0081 2.98156 22.0081 8.004H-20.6585C-20.6585 14.2628 -18.1798 20.2669 -13.7646 24.7029L16.476 -5.39619ZM22.0081 8.004C22.0081 13.0264 20.0191 17.8445 16.476 21.4042L-13.7646 -8.69485C-18.1798 -4.25885 -20.6585 1.74521 -20.6585 8.004H22.0081ZM16.4517 21.4285L22.7971 15.0739L-7.39498 -15.0739L-13.7403 -8.71919L16.4517 21.4285ZM-7.39457 15.0743L-5.98257 16.4883L24.2087 -13.6603L22.7967 -15.0743L-7.39457 15.0743ZM-5.98219 -13.6606L-12.3275 -7.30665L17.863 22.8426L24.2083 16.4886L-5.98219 -13.6606ZM-12.3195 -7.31467C-16.3813 -3.25163 -18.6632 2.25836 -18.6632 8.00367H24.0035C24.0035 13.5722 21.7918 18.9126 17.8549 22.8507L-12.3195 -7.31467ZM-18.6632 8.00367C-18.6632 13.7489 -16.3813 19.2589 -12.3195 23.322L17.8549 -6.84333C21.7918 -2.90528 24.0035 2.43517 24.0035 8.00367H-18.6632ZM-12.3283 23.3132L-5.99099 29.6598L24.2011 -0.487842L17.8638 -6.83451L-12.3283 23.3132ZM-5.99412 -0.484702L-7.40546 0.929298L22.7929 31.0707L24.2042 29.6567L-5.99412 -0.484702Z" fill="#5648FF" mask="url(#path-1-inside-1_508_1073)"></path> </svg>', '<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <mask id="path-1-inside-1_508_574" fill="white"> <path d="M1.418 16L7.756 9.65333C8.19209 9.21519 8.43691 8.62218 8.43691 8.004C8.43691 7.38582 8.19209 6.79281 7.756 6.35467L1.41067 0L0 1.414L6.34533 7.768C6.40782 7.83051 6.44293 7.91528 6.44293 8.00367C6.44293 8.09206 6.40782 8.17682 6.34533 8.23933L0.00666682 14.586L1.418 16Z"> </path> </mask> <path d="M1.418 16L7.756 9.65333C8.19209 9.21519 8.43691 8.62218 8.43691 8.004C8.43691 7.38582 8.19209 6.79281 7.756 6.35467L1.41067 0L0 1.414L6.34533 7.768C6.40782 7.83051 6.44293 7.91528 6.44293 8.00367C6.44293 8.09206 6.40782 8.17682 6.34533 8.23933L0.00666682 14.586L1.418 16Z" fill="#5648FF"></path> <path d="M1.418 16L-13.6812 31.0707L1.41406 46.1945L16.5132 31.0746L1.418 16ZM7.756 9.65333L22.8512 24.728L22.8638 24.7154L22.8763 24.7029L7.756 9.65333ZM7.756 6.35467L22.8763 -8.69485L22.8642 -8.70703L22.852 -8.71919L7.756 6.35467ZM1.41067 0L16.5067 -15.0739L1.40394 -30.1988L-13.6921 -15.0671L1.41067 0ZM0 1.414L-15.1027 -13.6531L-30.1418 1.4215L-15.0952 16.4886L0 1.414ZM6.34533 7.768L-8.74991 22.8426L-8.74189 22.8507L6.34533 7.768ZM6.34533 8.23933L-8.74189 -6.84334L-8.74912 -6.83609L6.34533 8.23933ZM0.00666682 14.586L-15.0878 -0.489428L-30.1395 14.5813L-15.0925 29.6567L0.00666682 14.586ZM16.5132 31.0746L22.8512 24.728L-7.33925 -5.4213L-13.6772 0.925365L16.5132 31.0746ZM22.8763 24.7029C27.2915 20.2668 29.7702 14.2628 29.7702 8.004H-12.8964C-12.8964 2.98157 -10.9074 -1.83646 -7.36429 -5.39619L22.8763 24.7029ZM29.7702 8.004C29.7702 1.74522 27.2915 -4.25885 22.8763 -8.69485L-7.36429 21.4042C-10.9074 17.8445 -12.8964 13.0264 -12.8964 8.004H29.7702ZM22.852 -8.71919L16.5067 -15.0739L-13.6854 15.0739L-7.34003 21.4285L22.852 -8.71919ZM-13.6921 -15.0671L-15.1027 -13.6531L15.1027 16.4811L16.5134 15.0671L-13.6921 -15.0671ZM-15.0952 16.4886L-8.7499 22.8426L21.4406 -7.30665L15.0952 -13.6606L-15.0952 16.4886ZM-8.74189 22.8507C-12.6787 18.9126 -14.8904 13.5722 -14.8904 8.00367H27.7763C27.7763 2.25836 25.4944 -3.25163 21.4326 -7.31467L-8.74189 22.8507ZM-14.8904 8.00367C-14.8904 2.43518 -12.6788 -2.90528 -8.74189 -6.84333L21.4326 23.322C25.4944 19.2589 27.7763 13.7489 27.7763 8.00367H-14.8904ZM-8.74912 -6.83609L-15.0878 -0.489428L15.1011 29.6614L21.4398 23.3148L-8.74912 -6.83609ZM-15.0925 29.6567L-13.6812 31.0707L16.5172 0.929302L15.1058 -0.484698L-15.0925 29.6567Z" fill="#5648FF" mask="url(#path-1-inside-1_508_574)"></path> </svg>', '', ['class' => ''] );?>
                    <ul class="pagination justify-content-center mt-4">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">
                                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-inside-1_508_1073" fill="white">
                                            <path
                                                d="M7.69372 16L1.35572 9.65333C0.919626 9.21519 0.674805 8.62218 0.674805 8.004C0.674805 7.38582 0.919626 6.79281 1.35572 6.35467L7.70105 0L9.11305 1.414L2.76772 7.768C2.70523 7.83051 2.67012 7.91528 2.67012 8.00367C2.67012 8.09206 2.70523 8.17682 2.76772 8.23933L9.10505 14.586L7.69372 16Z">
                                            </path>
                                        </mask>
                                        <path
                                            d="M7.69372 16L1.35572 9.65333C0.919626 9.21519 0.674805 8.62218 0.674805 8.004C0.674805 7.38582 0.919626 6.79281 1.35572 6.35467L7.70105 0L9.11305 1.414L2.76772 7.768C2.70523 7.83051 2.67012 7.91528 2.67012 8.00367C2.67012 8.09206 2.70523 8.17682 2.76772 8.23933L9.10505 14.586L7.69372 16Z"
                                            fill="#5648FF"></path>
                                        <path
                                            d="M7.69372 16L-7.40153 31.0746L7.69765 46.1945L22.7929 31.0707L7.69372 16ZM1.35572 9.65333L-13.7646 24.7029L-13.7521 24.7154L-13.7395 24.728L1.35572 9.65333ZM1.35572 6.35467L-13.7403 -8.71919L-13.7524 -8.70703L-13.7646 -8.69485L1.35572 6.35467ZM7.70105 0L22.7967 -15.0743L7.70064 -30.1917L-7.39498 -15.0739L7.70105 0ZM9.11305 1.414L24.2083 16.4886L39.262 1.41438L24.2087 -13.6603L9.11305 1.414ZM2.76772 7.768L17.8549 22.8507L17.863 22.8426L2.76772 7.768ZM2.76772 8.23933L17.8638 -6.83451L17.8549 -6.84333L2.76772 8.23933ZM9.10505 14.586L24.2042 29.6567L39.2496 14.5829L24.2011 -0.487842L9.10505 14.586ZM22.789 0.925365L16.451 -5.4213L-13.7395 24.728L-7.40153 31.0746L22.789 0.925365ZM16.476 -5.39619C20.0191 -1.83647 22.0081 2.98156 22.0081 8.004H-20.6585C-20.6585 14.2628 -18.1798 20.2669 -13.7646 24.7029L16.476 -5.39619ZM22.0081 8.004C22.0081 13.0264 20.0191 17.8445 16.476 21.4042L-13.7646 -8.69485C-18.1798 -4.25885 -20.6585 1.74521 -20.6585 8.004H22.0081ZM16.4517 21.4285L22.7971 15.0739L-7.39498 -15.0739L-13.7403 -8.71919L16.4517 21.4285ZM-7.39457 15.0743L-5.98257 16.4883L24.2087 -13.6603L22.7967 -15.0743L-7.39457 15.0743ZM-5.98219 -13.6606L-12.3275 -7.30665L17.863 22.8426L24.2083 16.4886L-5.98219 -13.6606ZM-12.3195 -7.31467C-16.3813 -3.25163 -18.6632 2.25836 -18.6632 8.00367H24.0035C24.0035 13.5722 21.7918 18.9126 17.8549 22.8507L-12.3195 -7.31467ZM-18.6632 8.00367C-18.6632 13.7489 -16.3813 19.2589 -12.3195 23.322L17.8549 -6.84333C21.7918 -2.90528 24.0035 2.43517 24.0035 8.00367H-18.6632ZM-12.3283 23.3132L-5.99099 29.6598L24.2011 -0.487842L17.8638 -6.83451L-12.3283 23.3132ZM-5.99412 -0.484702L-7.40546 0.929298L22.7929 31.0707L24.2042 29.6567L-5.99412 -0.484702Z"
                                            fill="#5648FF" mask="url(#path-1-inside-1_508_1073)"></path>
                                    </svg>

                                </span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-inside-1_508_574" fill="white">
                                            <path
                                                d="M1.418 16L7.756 9.65333C8.19209 9.21519 8.43691 8.62218 8.43691 8.004C8.43691 7.38582 8.19209 6.79281 7.756 6.35467L1.41067 0L0 1.414L6.34533 7.768C6.40782 7.83051 6.44293 7.91528 6.44293 8.00367C6.44293 8.09206 6.40782 8.17682 6.34533 8.23933L0.00666682 14.586L1.418 16Z">
                                            </path>
                                        </mask>
                                        <path
                                            d="M1.418 16L7.756 9.65333C8.19209 9.21519 8.43691 8.62218 8.43691 8.004C8.43691 7.38582 8.19209 6.79281 7.756 6.35467L1.41067 0L0 1.414L6.34533 7.768C6.40782 7.83051 6.44293 7.91528 6.44293 8.00367C6.44293 8.09206 6.40782 8.17682 6.34533 8.23933L0.00666682 14.586L1.418 16Z"
                                            fill="#5648FF"></path>
                                        <path
                                            d="M1.418 16L-13.6812 31.0707L1.41406 46.1945L16.5132 31.0746L1.418 16ZM7.756 9.65333L22.8512 24.728L22.8638 24.7154L22.8763 24.7029L7.756 9.65333ZM7.756 6.35467L22.8763 -8.69485L22.8642 -8.70703L22.852 -8.71919L7.756 6.35467ZM1.41067 0L16.5067 -15.0739L1.40394 -30.1988L-13.6921 -15.0671L1.41067 0ZM0 1.414L-15.1027 -13.6531L-30.1418 1.4215L-15.0952 16.4886L0 1.414ZM6.34533 7.768L-8.74991 22.8426L-8.74189 22.8507L6.34533 7.768ZM6.34533 8.23933L-8.74189 -6.84334L-8.74912 -6.83609L6.34533 8.23933ZM0.00666682 14.586L-15.0878 -0.489428L-30.1395 14.5813L-15.0925 29.6567L0.00666682 14.586ZM16.5132 31.0746L22.8512 24.728L-7.33925 -5.4213L-13.6772 0.925365L16.5132 31.0746ZM22.8763 24.7029C27.2915 20.2668 29.7702 14.2628 29.7702 8.004H-12.8964C-12.8964 2.98157 -10.9074 -1.83646 -7.36429 -5.39619L22.8763 24.7029ZM29.7702 8.004C29.7702 1.74522 27.2915 -4.25885 22.8763 -8.69485L-7.36429 21.4042C-10.9074 17.8445 -12.8964 13.0264 -12.8964 8.004H29.7702ZM22.852 -8.71919L16.5067 -15.0739L-13.6854 15.0739L-7.34003 21.4285L22.852 -8.71919ZM-13.6921 -15.0671L-15.1027 -13.6531L15.1027 16.4811L16.5134 15.0671L-13.6921 -15.0671ZM-15.0952 16.4886L-8.7499 22.8426L21.4406 -7.30665L15.0952 -13.6606L-15.0952 16.4886ZM-8.74189 22.8507C-12.6787 18.9126 -14.8904 13.5722 -14.8904 8.00367H27.7763C27.7763 2.25836 25.4944 -3.25163 21.4326 -7.31467L-8.74189 22.8507ZM-14.8904 8.00367C-14.8904 2.43518 -12.6788 -2.90528 -8.74189 -6.84333L21.4326 23.322C25.4944 19.2589 27.7763 13.7489 27.7763 8.00367H-14.8904ZM-8.74912 -6.83609L-15.0878 -0.489428L15.1011 29.6614L21.4398 23.3148L-8.74912 -6.83609ZM-15.0925 29.6567L-13.6812 31.0707L16.5172 0.929302L15.1058 -0.484698L-15.0925 29.6567Z"
                                            fill="#5648FF" mask="url(#path-1-inside-1_508_574)"></path>
                                    </svg>

                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
		<?php endif; ?>
        <?php
			if ( have_posts() ):
			if ( is_home() && !is_front_page() ):
		?>
        <?php
			while(have_posts()) :
			the_post();
			$is_featured = function_exists('get_field') ? get_field('featured_post'): false;
			$category = get_the_category(get_the_ID());
			$cat_id = $category ? $category[0]->term_id: '';
			$cat_name = $category ? $category[0]->name : '';
		?>
        <?php if($is_featured) : ?>
        <div class="blog-featured bg-white p-4 p-xl-5 radius-12 mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="featured-img h-100">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="image"
                            class="img-fluid w-100 h-100">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="featured-info px-3 d-flex flex-column justify-content-between h-100">
                        <div class="feature-top">
                            <span
                                class="section-tag fs-12 fw-bold text-uppercase text-clr-dark4 d-inline-flex gap-2 align-items-center mb-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-process-icon.svg"
                                    alt="icon" class="img-fluid">
                                <?php echo esc_html($cat_name); ?>
                            </span>
                            <h3 class="blog-title fs-28 fw-semi-bold">
                                <a href="<?php echo get_the_permalink(get_the_ID()); ?>"
                                    class="text-decoration-none text-clr-dark1">
                                    <?php echo wp_trim_words(get_the_title(get_the_ID()), 7); ?>
                                </a>
                            </h3>
                            <div class="blog-intro fs-6 text-clr-dark2 mb-0">
                                <p class="">
                                    <?php echo get_the_excerpt(get_the_ID()); ?>
                                </p>
                            </div>
                        </div>
                        <span class="uiexpertz-has-blog-date-114"><?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endwhile; endif; endif; ?>
        <div class="articles pt-7" id="home-filtered-blog-post-114">
            <div class="row">
                <div class="col-12">
                    <?php
						if ( have_posts() ):
						if ( is_home() && !is_front_page() ):
					?>
                    <div class="row">
                        <?php 
					$category = get_categories();
					while ( have_posts() ): the_post();
					?>
                        <?php
						if(is_single()) {
							get_template_part( 'post-formates/single-post/content', get_post_format() );
						} else {
							get_template_part( 'post-formates/content', get_post_format() );
						}
						?>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; endif; ?>
                    <div class="item-pagination my-4 pb-3 pb-xl-0">
                        <nav aria-label="Page navigation example">
                            <?php uiexpertz_pagination( '<img src="'.get_template_directory_uri().'/assets/img/pagination--left.svg" class="img-fluid mb-1" alt="paginate-left">', '<img src="'.get_template_directory_uri().'/assets/img/pagination-right.svg" class="img-fluid mb-1" alt="pagination-right">', '', ['class' => ''] );?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ blog-pots -->

<?php
get_footer();