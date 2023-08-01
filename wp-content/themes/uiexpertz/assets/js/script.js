(function($) {
    // fixed-header -Js
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $("header").addClass("fixed-header");
        } else {
            $("header").removeClass("fixed-header");
        }
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
    tl = gsap.timeline({
        defaults: {
            duration: 1.2,
            ease: "expo.inOut",
            delay: 1,
        },
    });
    if(hasClass('.slide-1') && hasClass('#introduction')) {
        tl.to(".slide-1", { opacity: 1, display: "none" }).to("#introduction", { opacity: 1, display: "none" });
    }

    

    

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