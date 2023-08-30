(function($) {
    document.addEventListener( 'DOMContentLoaded', function () {
        if ($('.brand-active.splide').length > 0) {
            function calculatePerPage(windowWidth) {
                if (windowWidth > 1700) {
                    return 7;
                } else if (windowWidth > 1500) {
                    return 6;
                }
                else if (windowWidth > 1300) {
                    return 5;
                }
                    else if (windowWidth > 1100) {
                    return 5;
                }
                    else if (windowWidth > 1000) {
                    return 5;
                }
                    else if (windowWidth > 800) {
                    return 4;
                }
                    else if (windowWidth > 600) {
                    return 3;
                }
                    else if (windowWidth > 570) {
                    return 3;
                }
                    else if (windowWidth > 400) {
                    return 2.5;
                } else {
                    return 2;
                }
            }
            new Splide('.brand-active.splide', {
                type   : 'loop',
                drag   : 'free',
                focus  : 'center',
                pagination: false,
                arrows:false,
                perPage: calculatePerPage($(window).width()),
                autoScroll: {
                    speed: 2,
                },
            }).mount( window.splide.Extensions );
        }
    });
    $(window).on('scroll', function() {
        var scrollPosition = $(window).scrollTop();
        if(scrollPosition >= 70) {
            $('.mobileMenu .mobileMenu-action').css('top', 0 + 'px');
            $('.mobileMenu .mobileMenu-action').css('height', '100%');
        } else {
            $('.mobileMenu .mobileMenu-action').css('top', 70-scrollPosition + 'px');
        }
    })
    //case slider new
    $("[data-background]").each(function () {
        $(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
    });
    /**
     * For indivitual category item
     */
    $('.blog-header-tab .nav-pills .nav-link').on('click', function() {
        $('.uiexpertz-has-archive-default-loaded').removeClass("show active");
    })
    // Loop through the class numbers
    if (typeof uiexpertz_all_cat_ids !== 'undefined') {
        uiexpertz_all_cat_ids.forEach(function (number) {
            document.addEventListener('DOMContentLoaded', function () {
                setTimeout(function() {
                    new Splide(`.splide-blog${number}.splide`, {
                        type   : 'loop',
                        perPage      : 1,
                        autoplay     : true,
                        interval     : 3000, // How long to display each slide
                        pauseOnHover : false, // must be false
                        pauseOnFocus : false, // must be false
                        resetProgress: false,
                    perPage: $(window).width() > 800 ? 1 : 1,
                    }).mount();
                }, 100);
            });
        });
    }

        document.addEventListener('DOMContentLoaded', function () {
            $(document).ready(function () {
                // Check if an element with the class .case.splide exists
                if ($('.case.splide').length > 0) {
                    new Splide('.case.splide', {
                        type: 'loop',
                        drag: 'free',
                        focus: 'center',
                        perPage: $(window).width() > 800 ? 2 : 1,
                        autoScroll: {
                            speed: 3,
                        },
                    }).mount(window.splide.Extensions);
                }
            });
          });
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                // Check if an element with the class .splide-blog.splide exists
                if ($('.splide-blog.splide').length > 0) {
                    new Splide('.splide-blog.splide', {
                        type: 'loop',
                        perPage: 1,
                        autoplay: true,
                        interval: 3000,
                        pauseOnHover: false,
                        pauseOnFocus: false,
                        resetProgress: false,
                        perPage: $(window).width() > 800 ? 1 : 1,
                    }).mount();
                }
            }, 100);
          });
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                // Check if an element with the class .splide-blog1234.splide exists
                if ($('.splide-blog1234.splide').length > 0) {
                    new Splide('.splide-blog1234.splide', {
                        type: 'loop',
                        perPage: 1,
                        autoplay: true,
                        interval: 3000,
                        pauseOnHover: false,
                        pauseOnFocus: false,
                        resetProgress: false,
                        perPage: $(window).width() > 800 ? 1 : 1,
                    }).mount();
                }
            }, 100);
          });


          //testimonial slider 

          document.addEventListener('DOMContentLoaded', function () {
            if (document.querySelector('.testimonial#splide')) {
                new Splide('.testimonial#splide', {
                    gap: '45px',
                    type: 'loop',
                    perPage: 3,
                    autoplay: true,
                    interval: 8000,
                    updateOnMove: true,
                    pagination: false,
                    perMove: 1,
                    breakpoints: {
                        1200: {
                            perPage: 2,
                        },
                        700: {
                            perPage: 1,
                        },
                    }
                }).mount();
            }
        });
    
    //searbar toggle

    
    // searchBar
    $('.search-btn').click(function (e) {
        e.stopPropagation();
        $('.searchBar').slideToggle(200);
    });
    $('.cross-btn').click(function (e) {
        e.stopPropagation();
        $('.searchBar').slideToggle(200);
    });
    $('.searchBar').click(function (e) {
        e.stopPropagation();
    });
    $('body,html').click(function (e) {
        $('.searchBar').slideUp(500);
    });
    // searchBar -end





    // fixed-header -Js
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $("header").addClass("fixed-header");
        } else {
            $("header").removeClass("fixed-header");
        }
    });
    $(".js-text-cursor-block").mousemove(function (e) {
        var t = $(this).offset(),
            n = t.left.toFixed(0),
            t = t.top.toFixed(0),
            n = e.pageX - n,
            e = e.pageY - t;
        $(".js-text-cursor").css({
            transform: "translate3d(".concat(n - 35, "px, ").concat(e - 35, "px, 0px)"),
        });
    }),
    $(".js-text-cursor-block").mouseenter(function () {
        $(this).find('.js-text-cursor').removeClass('d-none');
        $(".js-text-cursor").stop(!0, !0).fadeIn("fast");
    }),
    $(".js-text-cursor-block").mouseleave(function () {
        $(this).find('.js-text-cursor').addClass('d-none');
        $(".js-text-cursor").stop(!0, !0).fadeOut("fast");
    });
    const CaseStudySliderGlobal = new Swiper(".caseStudy-slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".casestudy-swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next-unique",
            prevEl: ".swiper-button-prev-unique",
        },

        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
    var CB_Case_Studies = function($scope, $) {
        $scope.find('.caseStudy-slider').each(function() {
            // Swipper js case study
            const CaseStudySlider = new Swiper(".caseStudy-slider", {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: ".casestudy-swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next-unique",
                    prevEl: ".swiper-button-prev-unique",
                },

                breakpoints: {
                    300: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    991: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        })
        $scope.find('.js-text-cursor-block').each(function() {
            $(".js-text-cursor-block").mousemove(function (e) {
                var t = $(this).offset(),
                    n = t.left.toFixed(0),
                    t = t.top.toFixed(0),
                    n = e.pageX - n,
                    e = e.pageY - t;
                $(".js-text-cursor").css({
                    transform: "translate3d(".concat(n - 35, "px, ").concat(e - 35, "px, 0px)"),
                });
            }),
            $(".js-text-cursor-block").mouseenter(function () {
                $(this).find('.js-text-cursor').removeClass('d-none');
                $(".js-text-cursor").stop(!0, !0).fadeIn("fast");
            }),
            $(".js-text-cursor-block").mouseleave(function () {
                $(this).find('.js-text-cursor').addClass('d-none');
                $(".js-text-cursor").stop(!0, !0).fadeOut("fast");
            });
        })
    }
    var CB_Testimonial = function($scope, $) {
        $scope.find('.testi-slider').each(function() {
            // testimonial-active
            const TestiSlider = new Swiper(".testi-slider", {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next-unique",
                    prevEl: ".swiper-button-prev-unique",
                },

                breakpoints: {
                    300: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    991: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        })
    }
    var CB_Brand = function($scope, $) {
        $scope.find('.uiexpertz-swiper-brand-114').each(function() {
            var UIExpertzBrand114 = new Swiper ('.uiexpertz-swiper-brand-114', {
                autoplay: {     //add
                    delay: 0,   //add
                },
                spaceBetween: 0,
                centeredSlides: true,
                speed: 3000,
                slidesPerView: 7,
                loop: true,
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                      slidesPerView: 2,
                      spaceBetween: 0
                    },
                    480: {
                        slidesPerView: 3
                    },
                    // when window width is >= 576
                    576: {
                      slidesPerView: 3,
                      spaceBetween: 0
                    },
                    // when window width is >= 768
                    768: {
                      slidesPerView: 3,
                      spaceBetween: 0
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 0
                    },
                    1200: {
                        slidesPerView: 5,
                        spaceBetween: 0
                    },
                    1400: {
                        slidesPerView: 6,
                    },
                    1600: {
                        slidesPerView: 7
                    }
                }
            });
            UIExpertzBrand114.el.addEventListener('mouseover', function(){     //add
                UIExpertzBrand114.autoplay.stop()                              //add
            })                                                      //add
            UIExpertzBrand114.el.addEventListener('mouseleave', function(){    //add
                UIExpertzBrand114.autoplay.start()                             //add
            })
        })
    }  
    $(document).ready(function () {
        $("[data-background").each(function(){
            $(this).css("background-image","url("+$(this).attr("data-background") + ") ")
        })
        $("[data-bgcolor").each(function(){
            $(this).css("background-color","#"+$(this).attr("data-bgcolor"));
        })
        //navbar add class
        $(function () {
            if ($(".mobileMenu").length) {
                $(".navbar").on("click", ".navbarToggler", function (e) {
                    e.preventDefault();
                    console.log("i am clicked");
                    $(this).closest(".navbar").find(".mobileMenu-wrapper").toggleClass("mobileMenu-action");
                    $(".menuAction").children(".openMenu").toggle(0);
                    $(".menuAction").children(".closeMenu").toggle(0);
                    // $(this).closest('#header').addClass('myheader');

                    // $(this).closest('#header').toggleClass('d-block');
                });
            }
        });

        $(function () {
            $(document).on("click", function (e) {
                var clickover = $(e.target);
                var _opened = $(".navbar-collapse").hasClass("show");
                if (_opened === true && !clickover.hasClass("navbar-toggler")) {
                    $(".navbar-toggler").click();
                }
            });
        });

        // back to top
        if ($("#backToTop").length) {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 250) {
                    $("#backToTop").fadeIn("slow");
                } else {
                    $("#backToTop").fadeOut("slow");
                }
            });
            $("#backToTop").click(function () {
                $("html, body").animate({ scrollTop: 0 }, 600);
            });
        }

        //faq-start

        $(function () {
            if ($(".accordion-list").length) {
                $(".accordion-list").on("click", ".accordion-list-item", function (e) {
                    e.preventDefault();
                    // remove siblings activities
                    $(this).closest(".accordion-list-item").siblings().removeClass("open").find(".accordion-desc").slideUp();
                    $(this).closest(".accordion-list-item").siblings().find(".ni").addClass("ni-caret-down-fill").removeClass("ni-caret-up-fill");

                    // add slideToggle into this
                    $(this).closest(".accordion-list-item").toggleClass("open").find(".accordion-desc").slideToggle();
                    $(this).find(".ni").toggleClass("ni-caret-down-fill ni-caret-up-fill");
                });
            }
        });

        //faq-end
    });

    

    

    //marque

    const marqueeContent = document.querySelector(".marquee-content");

    if(marqueeContent) {
        marqueeContent.addEventListener("mouseenter", function () {
            marqueeContent.style.animationPlayState = "paused";
        });
    
        marqueeContent.addEventListener("mouseleave", function () {
            marqueeContent.style.animationPlayState = "running";
        });
    }
    $( window ).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction( 'frontend/element_ready/cb-brand.default', CB_Brand );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/cb-testimonial.default', CB_Testimonial );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/cb-case-studies.default', CB_Case_Studies );
    } );
})(jQuery)