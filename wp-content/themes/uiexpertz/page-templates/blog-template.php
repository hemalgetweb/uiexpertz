<?php
// Template name: blog template
get_header(); ?>


<!-- blog-header-tab -->
<div class="blog-header-tab mt-5 pt-5">
    <div class="container">
        <div class="blog-tab-list position-relative">
            <ul class="nav nav-pills align-items-center justify-content-center mb-0 pb-3 pb-md-0" id="pills-tab"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active py-3 py-xl-4 d-flex align-items-center gap-2 text-clr-gray fs-6 fw-bold"
                        id="pills-Neueste-tab" data-bs-toggle="pill" data-bs-target="#pills-Neueste" type="button"
                        role="tab">

                        Latest Blogs
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link py-3 py-xl-4 d-flex align-items-center gap-2 text-clr-gray fs-6 fw-bold"
                        id="pills-webdesign-tab" data-bs-toggle="pill" data-bs-target="#pills-webdesign" type="button"
                        role="tab">

                        UX/UI Design
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link py-3 py-xl-4 d-flex align-items-center gap-2 text-clr-gray fs-6 fw-bold"
                        id="pills-maintenance-tab" data-bs-toggle="pill" data-bs-target="#pills-maintenance"
                        type="button" role="tab">

                        Wordpress Development
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link py-3 py-xl-4 d-flex align-items-center gap-2 text-clr-gray fs-6 fw-bold"
                        id="pills-SEO-tab" data-bs-toggle="pill" data-bs-target="#pills-SEO" type="button" role="tab">
                        Support and Maintenance
                    </button>
                </li>

                <li class="nav-item ms-lg-auto">
                    <button type="button" class="border-0 bg-transparent search-btn p-0 me-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-search.svg"
                            alt="about image" class="img-fluid">
                    </button>
                </li>
            </ul>
            <!-- search-wrap -->
            <div class="searchBar position-absolute ">
                <div class="search-wrap position-relative">
                    <input type="text" class="form-control px-4 text-clr-gray fs-14 fw-normal" placeholder="Search..">
                    <button type="submit" class="cross-btn border-0 bg-transparent position-absolute">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.svg" alt="about image"
                            class="img-fluid cross-search me-3">
                    </button>
                </div>
            </div>
            <!-- search-wrap -End -->
        </div>
    </div>
</div>
<!--/ blog-header-tab -->
<!-- blog-main -->
<main class="blog-main pb-5 bg-clr-lightGray">
    <div class="slider-container">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-Neueste" role="tabpanel" tabindex="0">
                <div class="blogCart-section-title">
                    <h4 class="fs-2 fw-normal text-clr-blue">
                        Latest Blogs
                    </h4>
                </div>


                <!-- blog-slide-active -->


                <!-- blog-slide-active -->
                <div class="blog-slide-active radius-12">

                    <div class="splide-blog splide">
                        <div class="splide__track" id="splide-track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="single-blog bg-white">
                                        <div class="featured-image">
                                            <div class="case-study-img text-center">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-slider1.png"
                                                    alt="about image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div
                                            class="blog-info ps-3 pe-4 pt-3 d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <h6
                                                    class="sub-title fs-12 fw-medium text-clr-darkBlue bg-clr-lightPink radius-4 px-2 d-inline-block mb-3">
                                                    UX/UI Design
                                                </h6>
                                                <h3 class="mb-4">
                                                    <a href="#"
                                                        class="blog-title text-clr-blue fs-2 fw-bold text-decoration-none">
                                                        How to handle complex apps & B2B interface design
                                                    </a>
                                                </h3>
                                                <p class="fs-14 text-clr-gray fw-normal mb-1">
                                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                                    fugit, sed quia
                                                    consequuntur ma
                                                </p>
                                            </div>
                                            <div class=" py-3">
                                                <a href=""
                                                    class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
                                                    <span>
                                                        <h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
                                                    </span>
                                                    <span>
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z"
                                                                fill="#384973" />
                                                        </svg>


                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="single-blog bg-white">
                                        <div class="featured-image">
                                            <div class="case-study-img text-center">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-slider1.png"
                                                    alt="about image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div
                                            class="blog-info ps-3 pe-4 pt-3 d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <h6
                                                    class="sub-title fs-12 fw-medium text-clr-darkBlue bg-clr-lightPink radius-4 px-2 d-inline-block mb-3">
                                                    UX/UI Design
                                                </h6>
                                                <h3 class="mb-4">
                                                    <a href="#"
                                                        class="blog-title text-clr-blue fs-2 fw-bold text-decoration-none">
                                                        How to handle complex apps & B2B interface design
                                                    </a>
                                                </h3>
                                                <p class="fs-14 text-clr-gray fw-normal mb-1">
                                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                                    fugit, sed quia
                                                    consequuntur ma
                                                </p>
                                            </div>
                                            <div class=" py-3">
                                                <a href=""
                                                    class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
                                                    <span>
                                                        <h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
                                                    </span>
                                                    <span>
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z"
                                                                fill="#384973" />
                                                        </svg>


                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="single-blog bg-white">
                                        <div class="featured-image">
                                            <div class="case-study-img text-center">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-slider1.png"
                                                    alt="about image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div
                                            class="blog-info ps-3 pe-4 pt-3 d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <h6
                                                    class="sub-title fs-12 fw-medium text-clr-darkBlue bg-clr-lightPink radius-4 px-2 d-inline-block mb-3">
                                                    UX/UI Design
                                                </h6>
                                                <h3 class="mb-4">
                                                    <a href="#"
                                                        class="blog-title text-clr-blue fs-2 fw-bold text-decoration-none">
                                                        How to handle complex apps & B2B interface design
                                                    </a>
                                                </h3>
                                                <p class="fs-14 text-clr-gray fw-normal mb-1">
                                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                                    fugit, sed quia
                                                    consequuntur ma
                                                </p>
                                            </div>
                                            <div class=" py-3">
                                                <a href=""
                                                    class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
                                                    <span>
                                                        <h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
                                                    </span>
                                                    <span>
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z"
                                                                fill="#384973" />
                                                        </svg>


                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>




                </div>
                <!-- blog-slide-active -END -->


                <!-- blogs-post  -->
                <div>
                    <div class="">
                        <div class="blogCart-section-title">
                            <h4 class="fs-2 fw-normal text-clr-blue">
                                All blogs
                            </h4>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">

                                    <a href="" class="js-text-cursor d-none">
                                        <img src="https://i.postimg.cc/ncTnpvFc/arrow.png" class="" alt="">
                                    </a>
                                    <div>
                                        <div class="p-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-blog-image.png"
                                                alt="visual-design " class="img-fluid">
                                        </div>
                                        <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap  px-4 pt-4">
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                App</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                Fitness</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                UI/ux design
                                            </li>
                                        </ul>
                                        <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                            <h4 class="text-clr-blue fs-5 fw-bold mb-3">How to Handle Complex Apps and
                                                B2B Interface
                                                Design</h4>
                                            <p class="fs-6 text-clr-gray mb-3">Nemo enim ipsam voluptatem quia voluptas
                                                sit aspernatur
                                                aut odit aut fugit, sed quia consequuntur ma</p>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                        <span>
                                            <h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
                                        </span>
                                        <span>
                                            <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                            </svg>

                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">

                                    <a href="" class="js-text-cursor d-none">
                                        <img src="https://i.postimg.cc/ncTnpvFc/arrow.png" class="" alt="">
                                    </a>
                                    <div>
                                        <div class="p-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-blog-image.png"
                                                alt="visual-design " class="img-fluid">
                                        </div>
                                        <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap  px-4 pt-4">
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                App</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                Fitness</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                UI/ux design
                                            </li>
                                        </ul>
                                        <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                            <h4 class="text-clr-blue fs-5 fw-bold mb-3">How to Handle Complex Apps and
                                                B2B Interface
                                                Design</h4>
                                            <p class="fs-6 text-clr-gray mb-3">Nemo enim ipsam voluptatem quia voluptas
                                                sit aspernatur
                                                aut odit aut fugit, sed quia consequuntur ma</p>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                        <span>
                                            <h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
                                        </span>
                                        <span>
                                            <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                            </svg>

                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">

                                    <a href="" class="js-text-cursor d-none">
                                        <img src="https://i.postimg.cc/ncTnpvFc/arrow.png" class="" alt="">
                                    </a>
                                    <div>
                                        <div class="p-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-blog-image.png"
                                                alt="visual-design " class="img-fluid">
                                        </div>
                                        <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap  px-4 pt-4">
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                App</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                Fitness</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                UI/ux design
                                            </li>
                                        </ul>
                                        <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                            <h4 class="text-clr-blue fs-5 fw-bold mb-3">How to Handle Complex Apps and
                                                B2B Interface
                                                Design</h4>
                                            <p class="fs-6 text-clr-gray mb-3">Nemo enim ipsam voluptatem quia voluptas
                                                sit aspernatur
                                                aut odit aut fugit, sed quia consequuntur ma</p>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                        <span>
                                            <h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
                                        </span>
                                        <span>
                                            <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                            </svg>

                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">

                                    <a href="" class="js-text-cursor d-none">
                                        <img src="https://i.postimg.cc/ncTnpvFc/arrow.png" class="" alt="">
                                    </a>
                                    <div>
                                        <div class="p-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-blog-image.png"
                                                alt="visual-design " class="img-fluid">
                                        </div>
                                        <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap  px-4 pt-4">
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                App</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                Fitness</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                UI/ux design
                                            </li>
                                        </ul>
                                        <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                            <h4 class="text-clr-blue fs-5 fw-bold mb-3">How to Handle Complex Apps and
                                                B2B Interface
                                                Design</h4>
                                            <p class="fs-6 text-clr-gray mb-3">Nemo enim ipsam voluptatem quia voluptas
                                                sit aspernatur
                                                aut odit aut fugit, sed quia consequuntur ma</p>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                        <span>
                                            <h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
                                        </span>
                                        <span>
                                            <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                            </svg>

                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">

                                    <a href="" class="js-text-cursor d-none">
                                        <img src="https://i.postimg.cc/ncTnpvFc/arrow.png" class="" alt="">
                                    </a>
                                    <div>
                                        <div class="p-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-blog-image.png"
                                                alt="visual-design " class="img-fluid">
                                        </div>
                                        <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap  px-4 pt-4">
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                App</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                Fitness</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                UI/ux design
                                            </li>
                                        </ul>
                                        <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                            <h4 class="text-clr-blue fs-5 fw-bold mb-3">How to Handle Complex Apps and
                                                B2B Interface
                                                Design</h4>
                                            <p class="fs-6 text-clr-gray mb-3">Nemo enim ipsam voluptatem quia voluptas
                                                sit aspernatur
                                                aut odit aut fugit, sed quia consequuntur ma</p>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                        <span>
                                            <h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
                                        </span>
                                        <span>
                                            <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                            </svg>

                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">

                                    <a href="" class="js-text-cursor d-none">
                                        <img src="https://i.postimg.cc/ncTnpvFc/arrow.png" class="" alt="">
                                    </a>
                                    <div>
                                        <div class="p-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-blog-image.png"
                                                alt="visual-design " class="img-fluid">
                                        </div>
                                        <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap  px-4 pt-4">
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                App</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                Fitness</li>
                                            <li
                                                class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">
                                                UI/ux design
                                            </li>
                                        </ul>
                                        <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                            <h4 class="text-clr-blue fs-5 fw-bold mb-3">How to Handle Complex Apps and
                                                B2B Interface
                                                Design</h4>
                                            <p class="fs-6 text-clr-gray mb-3">Nemo enim ipsam voluptatem quia voluptas
                                                sit aspernatur
                                                aut odit aut fugit, sed quia consequuntur ma</p>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                        <span>
                                            <h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
                                        </span>
                                        <span>
                                            <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                            </svg>

                                        </span>
                                    </div>

                                </div>
                            </div>

                        </div>




                    </div>
                </div>
                <!--/ blogs-post  -->

                <!-- case-studies -->
                <h1>case study</h1>
                <!--/ case-studies -->


            </div>
            <div class="tab-pane fade" id="pills-webdesign" role="tabpanel" tabindex="0">
                <h2>Webdesign</h2>
            </div>
            <div class="tab-pane fade" id="pills-maintenance" role="tabpanel" tabindex="0">
                <h2>Maintenance</h2>
            </div>
            <div class="tab-pane fade" id="pills-SEO" role="tabpanel" tabindex="0">
                <h2>SEO</h2>
            </div>

        </div>
    </div>
</main>
<!--/ blog-main -->


<?php get_footer();