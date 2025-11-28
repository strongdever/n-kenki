//#BTNクリックで#MENUを表示.disp {display: none;}
$(function () {
    $(".menuNavi").click(function () {
        $("#menuNavi__menu").toggleClass("icon-menu");
        $("#menuNavi__menu").toggleClass("icon-close");
        $(".mainNavi").toggleClass("menu-open");
    });
});

//Scroll Rules
$(function () {
    if (window.matchMedia("(max-width: 640px)").matches) {
        $(`a[href^="#"]`).click(function () {
            var speed = 500;
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? "html" : href);
            var position = target.offset().top;
            var positionx = position - 50;
            $("html, body").animate({ scrollTop: positionx }, speed, "swing");
            return false;
        });
    } else {
        $(`a[href^="#"]`).click(function () {
            var speed = 500;
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? "html" : href);
            var position = target.offset().top;
            var positionx = position - 100;
            $("html, body").animate({ scrollTop: positionx }, speed, "swing");
            return false;
        });
    }
});

//施工事例(サムネイル固定)
$(function () {
    $(".yao-slider").slick({
        arrows: false,
        fade: true,
        asNavFor: ".yao-thumbnail",
    });
    $(".yao-thumbnail").slick({
        slidesToShow: 6,
        asNavFor: ".yao-slider",
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3, // 画面幅750px以下でスライド3枚表示
                }
            }]
    });
});

//クリックしたら開閉
$(function () {
    $(".click-title").on("click", function () {
        $(this).next().slideToggle(400);
        $(this).toggleClass("close", 400);
    });
});


// YouTubeモーダルここから
document.addEventListener('DOMContentLoaded', (event) => {
    // videoThumbのclass名がつく要素を全取得
    let imgTags = document.getElementsByClassName('videoThumb');
    // ループ
    for (let i = 0; i < imgTags.length; i++) {
        let videoId = imgTags[i].getAttribute('data-video-id');
        imgTags[i].src = `https://img.youtube.com/vi/${videoId}/0.jpg`;
        imgTags[i].addEventListener('click', function () {
            openModal(videoId);
        });
    }

    // モーダルの要素を作成
    let modal = document.createElement('div');
    modal.id = 'modal';
    modal.style.display = 'none';
    modal.style.position = 'fixed';
    modal.style.zIndex = '3';
    modal.style.left = '0';
    modal.style.top = '0';
    modal.style.width = '100%';
    modal.style.height = '100%';
    modal.style.overflow = 'auto';
    modal.style.backgroundColor = 'rgba(0,0,0,0.4)';
    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });
    // modalContentの要素を作成
    let modalContent = document.createElement('div');
    modalContent.className = 'modalContent';
    // iframeのYouTube要素を作成
    let videoPlayer = document.createElement('iframe');
    videoPlayer.id = 'videoPlayer';
    videoPlayer.width = '560';
    videoPlayer.height = '315';
    videoPlayer.frameBorder = '0';
    videoPlayer.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
    videoPlayer.allowFullscreen = true;
    // 閉じるボタンを作成
    let closeBtn = document.createElement('button');
    closeBtn.className = 'closeBtn';
    closeBtn.addEventListener('click', closeModal);

    modalContent.appendChild(videoPlayer);
    modalContent.appendChild(closeBtn);
    modal.appendChild(modalContent);
    document.body.appendChild(modal);
});
// モーダルモーダル関数
function openModal(videoId) {
    let modal = document.getElementById('modal');
    let videoPlayer = document.getElementById('videoPlayer');

    videoPlayer.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
    modal.style.display = 'block';
}
// モーダルを閉じる関数を作成
function closeModal() {
    let modalContent = document.querySelector('.modalContent');
    modalContent.style.animation = "fadeOut 0.7s";

    setTimeout(function () {
        let modal = document.getElementById('modal');
        let videoPlayer = document.getElementById('videoPlayer');

        videoPlayer.src = '';
        modal.style.display = 'none';
        //Reset the animation so it plays on the next open
        modalContent.style.animation = "fadeIn 0.7s";
    }, 700);
}

// YouTubeモーダルここまで


// 画像拡大
$(function () {
    $('.gallery').modaal({
        type: 'image'
    });
});


//---------------pretty-baby code---------------->
$(function () {
    "use strict";

    var isMobile = /iPhone|iPad|iPod|Android|webOS|BlackBerry|Windows Phone/i.test(navigator.userAgent);
    isMobile = isMobile || $(window).width() <= 749

    // AOS.init();
    // Smooth scroll for the navigation menu and links with .scrollto classes
    var scrolltoOffset = $('#header').outerHeight() - 1;

    $(document).on('click', '.nav-menu a, .mobile-nav-menu a, .scrollto, .p-service-index a, .link, #toc_container a', function (e) {

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                e.preventDefault();

                var scrollto = target.offset().top - scrolltoOffset;

                if ($(this).attr("href") == '#header') {
                    scrollto = 0;
                }

                $('html, body').animate({
                    scrollTop: scrollto
                }, 1000);

                if ($(this).parents('.nav-menu, .mobile-nav-menu').length) {
                    $('.nav-menu .active, .mobile-nav-menu .active').removeClass('active');
                    $(this).closest('li').addClass('active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle').toggleClass('toggle-active');
                    // $('.mobile-nav-overly').fadeOut();
                }

                return false;
            }
        }
    });

    // Mobile Navigation
    $('body').prepend('<a class="mobile-nav-toggle"><span class="toggle-icon"><span></span><span></span><span></span></span></a>');
    // $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function (e) {
        $('body').toggleClass('mobile-nav-active');
        $('.mobile-nav-toggle').toggleClass('toggle-active');
        // $('.mobile-nav-overly').toggle();
    });

    $(document).click(function (e) {
        var clickedElement = $(e.target);
        var container = $("body .mobile-nav-toggle");
        var btn_extend = $("#mobile-nav .mobile-nav-container .mobile-nav-menu > li.has_submenu .menu-link .btn-extend");
        // If click is outside the nav toggle and not on the btn_extend
        if (
            !container.is(e.target) &&
            container.has(e.target).length === 0 &&
            !btn_extend.is(e.target) &&
            btn_extend.has(e.target).length === 0
        ) {
            // Close the mobile nav
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
                $('.mobile-nav-toggle').removeClass('toggle-active');
                // $('.mobile-nav-overly').fadeOut();
            }
        }
    });


    $(document).ready(function () {
        //the btn-tag of the table in 料金プラン page
        $('.btn-tag').click(function () {
            if ($(this).find('.hide-pannel').hasClass('show')) {
                $(this).find('.hide-pannel').removeClass('show');
            } else {
                $(this).find('.hide-pannel').addClass('show');
            }
        });

        $('.btn-tag .hide-pannel').click(function (e) {
            e.stopPropagation(); // prevents click from reaching parent
            if ($(this).hasClass('show')) {
                $(this).removeClass('show');
            } else {
                $(this).addClass('show');
            }
        });

        $('.dropdown').hover(
            function () {
                $(this).find('.dropdown-menu').stop(true, true).slideDown(100);
            },
            function () {
                $(this).find('.dropdown-menu').stop(true, true).slideUp(100);
            }
        );

        var lastScrollTop = 0;
        var threshold = 1500; // Distance from bottom to trigger hide (in pixels)
        var $bottomBtns = $('.globalbtn');
        var scrollTop = $(window).scrollTop();
        var documentHeight = $(document).height();
        var windowHeight = $(window).height();
        var distanceFromBottom = documentHeight - (scrollTop + windowHeight);

        // Hide when near bottom and scrolling down
        if (distanceFromBottom < threshold && scrollTop > lastScrollTop) {
            $bottomBtns.hide(400);
        }
        // Show when scrolling up or not near bottom
        else if (distanceFromBottom >= threshold) {
            $bottomBtns.show(400);
        }

        if ($(window).scrollTop() < 500) {
            if ($('body').hasClass('scrolled')) {
                $('body').removeClass('scrolled');
            }
        } else {
            if (!$('body').hasClass('scrolled')) {
                $('body').addClass('scrolled');
            }
        }

        $(window).scroll(function () {
            if ($(this).scrollTop() < 500) {
                if ($('body').hasClass('scrolled')) {
                    $('body').removeClass('scrolled');
                }
            } else {
                if (!$('body').hasClass('scrolled')) {
                    $('body').addClass('scrolled');
                }
            }

            var scrollTop = $(this).scrollTop();
            var documentHeight = $(document).height();
            var windowHeight = $(window).height();
            var distanceFromBottom = documentHeight - (scrollTop + windowHeight);

            // Hide when near bottom and scrolling down
            if (distanceFromBottom < threshold && scrollTop > lastScrollTop) {
                $bottomBtns.hide(400);
            }
            // Show when scrolling up or not near bottom
            else if (distanceFromBottom >= threshold) {
                $bottomBtns.show(400);
            }

            lastScrollTop = scrollTop;
        });

        if (isMobile) {
            $('.trettio-slider').slick({
                dots: false,
                arrows: true,
                speed: 500,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 1,
                slidesToScroll: 1,
            });

            $('.reform-slider').slick({
                dots: false,
                arrows: true,
                speed: 500,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 1,
                slidesToScroll: 1,
            });
        }

        //mw wp form button----------------------
        // Get scroll position from localStorage
        var scrollPos = localStorage.getItem("scrollPos");

        if (scrollPos) {
            $(window).scrollTop(scrollPos);

            // Clear it so it won’t affect future visits
            localStorage.removeItem("scrollPos");
        }

        $("input[name=submitConfirm").on("click", function () {
            // Save current scroll position in localStorage
            localStorage.setItem("scrollPos", $(window).scrollTop());
        });
        $("input[name=submitBack").on("click", function () {
            // Save current scroll position in localStorage
            localStorage.setItem("scrollPos", $(window).scrollTop());
        });
        //mw wp form button----------------------

        // ------------------blog section---------------->
        // Hide all panels except the active one on page load
        $('.blog-panel .items-list').hide();
        $('.news-panel').show(); // Show the news panel by default

        // Handle tab clicks
        $('.blog-tab').on('click', function () {
            // Remove 'active' class from all tabs and add it to the clicked tab
            $('.blog-tab').removeClass('active');
            $(this).addClass('active');

            // Hide all panels
            $('.blog-panel .items-list').hide();

            // Show the panel corresponding to the clicked tab
            if ($(this).hasClass('tab-news')) {
                $('.news-panel').show();
            } else if ($(this).hasClass('tab-column')) {
                $('.column-panel').show();
            } else if ($(this).hasClass('tab-staff')) {
                $('.staff-panel').show(); // Note: Your HTML has 'staff-list' for staff panel
            }
        });
        // <------------------blog section----------------
    });
});

//<---------------pretty-baby code----------------