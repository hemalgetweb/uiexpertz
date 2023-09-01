<?php
    $cbtoolkit_header_main_right_switch_1 = get_theme_mod('cbtoolkit_header_main_right_switch_1', false);
    $cbtoolkit_side_support_number_text_1 = get_theme_mod('cbtoolkit_side_support_number_text_1', __('+88 012 458 368', 'uiexpertz'));
    $cbtoolkit_side_support_number_link_1 = get_theme_mod('cbtoolkit_side_support_number_link_1', __('+88012458368', 'uiexpertz'));
    $cbtoolkit_header_btn_text = get_theme_mod('cbtoolkit_header_btn_text', __('Lets’s talk', 'uiexpertz'));
    $cbtoolkit_header_btn_link = get_theme_mod('cbtoolkit_header_btn_link', __('/contact', 'uiexpertz'));
?>


    <!-- mobile menu -->
    <div class="mobileMenu d-block d-xl-none" id="mobileHeader">
        <nav class="navbar p-0">
            <div class="mobileMenu-container">
                <div class="mobileMenu-header d-flex align-items-center gap-4 justify-content-between">
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img width="158" height="42" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="logo" class="img-fluid">
                    </a>
                    <div class="navbarToggler  border-0 text-decoration-none">
                        <div class="menuAction">
                            <button class="navbar-toggler-icons openMenu  bg-transparent border-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.svg" alt="bar icon" class="img-fluid">
                            </button>
                            <button class="navbar-toggler-icons closeMenu bg-transparent border-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" alt="bar icon" class="img-fluid">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mobileMenu-wrapper d-flex align-items-center justify-content-between flex-column">
                    <div class="uiexpertz-mobile-menu-header-top-114">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mobile.svg" alt="mobile logo">
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <button class="uiexpertz-mobile-cross-menu">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"> <path d="M0.293029 1.70697L1.70703 0.292969L7.00003 5.58597L12.293 0.292969L13.707 1.70697L8.41403 6.99997L13.707 12.293L12.293 13.707L7.00003 8.41397L1.70703 13.707L0.293029 12.293L5.58603 6.99997L0.293029 1.70697Z" fill="white"/> </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php uiexpertz_header_menu(); ?>
                    <div
                        class="navbar-right btn-wrap d-flex flex-wrap justify-content-between align-content-center w-100 gap-3 gap-lg-4">
                        <?php if(!empty($cbtoolkit_side_support_number_text_1)) : ?>
                        <a class="link-text text-decoration-none pe-4 fs-18 text-white fw-semi-bold d-flex gap-2 align-items-center"
                            href="tel:<?php echo esc_attr($cbtoolkit_side_support_number_link_1) ? esc_attr($cbtoolkit_side_support_number_link_1) : ''; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="icon" class="img-fluid">
                            <?php echo esc_html($cbtoolkit_side_support_number_text_1); ?>
                        </a>
                        <?php endif; ?>
                        <?php if(!empty($cbtoolkit_header_btn_text)) : ?>
                        <a class="text-decoration-none fw-extraBold nav-bg-btn d-flex align-items-center justify-content-center bg-clr-sky  py-2 px-4 border-0 text-clr-blue fs-13 fw-bold"
                            href="<?php echo $cbtoolkit_header_btn_link ? esc_url($cbtoolkit_header_btn_link): ''; ?>"><?php echo esc_html($cbtoolkit_header_btn_text); ?> </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- / Mobile menu -->

    <!-- header -->
    <header id="header" class="m-auto position-fixed top-0 start-0 end-0 d-xl-block d-none uiexpertz-header-menu-for-pc-114" style="background-color: var(--blue)">
        <nav class="navbar navbar-expand-xl py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img width="158" height="42" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="logo" class="img-fluid">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php uiexpertz_header_menu(); ?>
                    <div class="navbar-right btn-wrap d-flex flex-wrap gap-3 gap-lg-4">
                        <?php if(!empty($cbtoolkit_side_support_number_text_1)) : ?>
                        <a class="link-text ms-4 text-decoration-none pe-4 fs-5 text-white d-flex gap-2 align-items-center"
                            href="tel:<?php echo $cbtoolkit_side_support_number_link_1 ? esc_attr($cbtoolkit_side_support_number_link_1): ''; ?>">
                            <img width="18" height="18" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="icon" class="img-fluid">
                            <?php echo esc_html($cbtoolkit_side_support_number_text_1); ?>
                        </a>
                        <?php endif; ?>
                        <?php if(!empty($cbtoolkit_header_btn_text)) : ?>
                        <a class="text-decoration-none fw-extraBold nav-bg-btn d-flex align-items-center justify-content-center bg-clr-sky  py-2 px-4 border-0 text-clr-blue fs-13 fw-bold"
                            href="<?php echo $cbtoolkit_header_btn_link ? esc_url($cbtoolkit_header_btn_link): ''; ?>"><?php echo esc_html($cbtoolkit_header_btn_text); ?> </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--/ header -->
