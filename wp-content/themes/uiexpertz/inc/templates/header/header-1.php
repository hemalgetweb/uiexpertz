<?php
    $cbtoolkit_header_main_right_switch_1 = get_theme_mod('cbtoolkit_header_main_right_switch_1', false);
    $cbtoolkit_side_support_number_text_1 = get_theme_mod('cbtoolkit_side_support_number_text_1', __('(347) 619-3312', 'uiexpertz'));
    $cbtoolkit_side_support_number_link_1 = get_theme_mod('cbtoolkit_side_support_number_link_1', __('+3476193312', 'uiexpertz'));
    $cbtoolkit_header_btn_text = get_theme_mod('cbtoolkit_header_btn_text', __('CONTACT US', 'uiexpertz'));
    $cbtoolkit_header_btn_link = get_theme_mod('cbtoolkit_header_btn_link', __('#', 'uiexpertz'));
?>


    <!-- mobile menu -->
    <div class="mobileMenu d-block d-xl-none" id="mobileHeader">
        <nav class="navbar p-0">
            <div class="mobileMenu-container">
                <div class="mobileMenu-header d-flex align-items-center gap-4 justify-content-between">
                    <a class="navbar-brand" href="index.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="logo" class="img-fluid">
                    </a>
                    <div class="navbarToggler  border-0 text-decoration-none">
                        <div class="menuAction">
                            <a href="#" class="navbar-toggler-icons openMenu">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.svg" alt="bar icon" class="img-fluid">
                            </a>
                            <a href="#" class="navbar-toggler-icons closeMenu">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" alt="bar icon" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mobileMenu-wrapper d-flex align-items-center justify-content-between flex-column">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 py-3 py-xl-0">
                        <li class="nav-item ms-xl-4 ms-0">
                            <a class="nav-link fs-14 fw-bold text-uppercase text-clr-skyBlue active" aria-current="page"
                                href="index.html">Home</a>
                        </li>
                        <li class="nav-item ms-xl-4 ms-0 custom-dropdown">
                            <a class="nav-link fs-14 fw-bold text-uppercase text-clr-skyBlue dropdown-toggle position-relative"
                                href="#">
                                <span>
                                    Services
                                </span>
                                <div class="dropArrow position-absolute text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drop-up-arrow.svg" alt="drop arrow" class="img-fluid">
                                </div>
                            </a>
                            <ul class="custom-dropdown-menu mega-menu1 border-0">
                                <div class="">
                                    <div class="m-menu-widget">
                                        <ul class="widget-menu-list list-unstyled mb-0">
                                            <li class="mb-3">
                                                <a href="social-media-marketing.html" class="text-decoration-none ">
                            
                                                    <span class="fs-13 fw-semi-bold text-clr-blue text-uppercase">Social
                                                        Media Marketing</span>
                                                </a>
                                            </li>
                                            <li class="mb-3">
                                                <a href="search-engine-optimization.html" class="text-decoration-none ">
                            
                                                    <span class="fs-14 fw-semi-bold text-clr-blue text-uppercase">Search
                                                        Engine Optimization</span>
                                                </a>
                                            </li>
                                            <li class="mb-3">
                                                <a href="advertisement.html" class="text-decoration-none ">
                            
                                                    <span class="fs-14 fw-semi-bold text-clr-blue text-uppercase">Pay
                                                        Per Click Advertisement</span>
                                                </a>
                                            </li>
                                            <li class="mb-3">
                                                <a href="uiux-design.html" class="text-decoration-none ">
                            
                                                    <span class="fs-14 fw-semi-bold text-clr-blue text-uppercase">Ui
                                                        Ux Design</span>
                                                </a>
                                            </li>
                                            <li class="mb-3">
                                                <a href="web-development.html" class="text-decoration-none ">
                            
                                                    <span class="fs-14 fw-semi-bold text-clr-blue text-uppercase">Web
                                                        Development</span>
                                                </a>
                                            </li>
                            
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </li>

                        <li class="nav-item ms-xl-4 ms-0">
                            <a class="nav-link fs-14 fw-bold text-uppercase text-clr-skyBlue"
                                href="case-studies.html">About</a>
                        </li>
                        <li class="nav-item ms-xl-4 ms-0">
                            <a class="nav-link fs-14 fw-bold text-uppercase text-clr-skyBlue"
                                href="case-studies.html">Case Studies</a>
                        </li>
                        <li class="nav-item ms-xl-4 ms-0">
                            <a class="nav-link fs-14 fw-bold text-uppercase text-clr-skyBlue"
                                href="blog.html">Contact</a>
                        </li>
                    </ul>
                    <div
                        class="navbar-right btn-wrap d-flex flex-wrap justify-content-between align-content-center w-100 gap-3 gap-lg-4">
                        <a class="link-text text-decoration-none pe-4 fs-18 text-white fw-semi-bold d-flex gap-2 align-items-center"
                            href="tel:+88 012 458 368">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="icon" class="img-fluid">
                            +88 012 458 368
                        </a>
                        <a class="text-decoration-none fw-extraBold nav-bg-btn d-flex align-items-center justify-content-center bg-clr-sky text-uppercase py-2 px-4 border-0 text-clr-blue fs-13 fw-bold"
                            href="#">Lets’s talk </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- / Mobile menu -->

    <!-- header -->
    <header id="header" class="m-auto position-fixed top-0 start-0 end-0 d-xl-block d-none" style="background-color: var(--blue)">
        <nav class="navbar navbar-expand-xl py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="logo" class="img-fluid">
                </a>
                <button class="navbar-toggler p-2 border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icons">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-bar.png" alt="bar icon" class="img-fluid">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php uiexpertz_header_menu(); ?>
                    <div class="navbar-right btn-wrap d-flex flex-wrap gap-3 gap-lg-4">
                        <a class="link-text ms-4 text-decoration-none pe-4 fs-5 text-white d-flex gap-2 align-items-center"
                            href="tel:+88 012 458 368">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="icon" class="img-fluid">
                            +88 012 458 368
                        </a>
                        <a class="text-decoration-none fw-extraBold nav-bg-btn d-flex align-items-center justify-content-center bg-clr-sky text-uppercase py-2 px-4 border-0 text-clr-blue fs-13 fw-bold"
                            href="#">Lets’s talk </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--/ header -->
