(function($) {
    // fixed-header -Js
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $("header").addClass("fixed-header");
        } else {
            $("header").removeClass("fixed-header");
        }
    });
    $(document).ready(function () {
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

    tl.to(".slide-1", { opacity: 1, display: "none" }).to("#introduction", { opacity: 1, display: "none" });

    // testimonial-active
    const swiper = new Swiper(".testi-slider", {
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

    // Swipper js case study
    const swiper2 = new Swiper(".caseStudy-slider", {
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

    //marque

    const marqueeContent = document.querySelector(".marquee-content");

    marqueeContent.addEventListener("mouseenter", function () {
        marqueeContent.style.animationPlayState = "paused";
    });

    marqueeContent.addEventListener("mouseleave", function () {
        marqueeContent.style.animationPlayState = "running";
    });

})(jQuery)