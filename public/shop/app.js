const app = document.querySelector(".app");
const header = document.querySelector(".header");
const topBar = document.querySelector(".topbar");
const iconSearch = document.querySelector(".icon__search");
const iconCart = document.querySelector(".icon__cart");
const iconMenu = document.querySelector(".header__action-menu");
const siteNav = document.querySelector(".site__nav");
const siteNavSearch = document.querySelector(".site__nav-search");
const siteNavCart = document.querySelector(".site__nav-cart");
const siteNavMenu = document.querySelector(".site__nav-menu");
const siteOverlay = document.querySelector(".site__overlay");
const siteClose = document.querySelector(".site__nav-close.btn__close");
const iconSubnavLevel0 = document.querySelector(".menu__item > .icon__subnav");
const listIconSubnavLevel1 = document.querySelectorAll(
    ".submenu2__level1 .icon__subnav"
);

setTimeout(function () {
    scrollTop();
}, 100);

function scrollTop() {
    document.onscroll = function () {
        const heightHeaderScroll = header.offsetHeight + topBar.offsetHeight;
        if (document.documentElement.scrollTop > heightHeaderScroll) {
            header.classList.add("header__scroll");
        } else {
            header.classList.remove("header__scroll");
        }
    };
}

function plusQuantity() {
    if (jQuery('input[name="quantity"]').val() != undefined) {
        var currentVal = parseInt(jQuery('input[name="quantity"]').val());
        if (!isNaN(currentVal)) {
            jQuery('input[name="quantity"]').val(currentVal + 1);
        } else {
            jQuery('input[name="quantity"]').val(1);
        }
    } else {
        console.log(
            "error: Not see elemnt " + jQuery('input[name="quantity"]').val()
        );
    }
}

function minusQuantity() {
    if (jQuery('input[name="quantity"]').val() != undefined) {
        var currentVal = parseInt(jQuery('input[name="quantity"]').val());
        if (!isNaN(currentVal) && currentVal > 1) {
            jQuery('input[name="quantity"]').val(currentVal - 1);
        }
    } else {
        console.log(
            "error: Not see elemnt " + jQuery('input[name="quantity"]').val()
        );
    }
}

iconSearch.onclick = function () {
    app.classList.add("sidebar__move");
    siteNav.classList.add("active");
    siteNavSearch.classList.add("active");
    siteOverlay.classList.add("active");
};

iconCart.onclick = function () {
    app.classList.add("sidebar__move");
    siteNav.classList.add("active");
    siteNavCart.classList.add("active");
    siteOverlay.classList.add("active");
};

iconMenu.addEventListener("click", function () {
    app.classList.add("sidebar__move");
    siteNav.classList.add("active");
    siteNavMenu.classList.add("active");
    siteOverlay.classList.add("active");
});

$(document).ready(function () {
    // changeImageDetail('thumb-one');

    // MenuMain Sidebar
    $(document).on("click", "span.icon__subnav", function () {
        if ($(this).parent().hasClass("active")) {
            $(this).parent().removeClass("active");
            // SlideUp() form display: block(height: auto) to display: none(height: 0)
            $(this).siblings("ul").slideUp();
        } else {
            if (
                $(this).parent().hasClass("level0") ||
                $(this).parent().hasClass("subnav__level1")
            ) {
                $(this).parent().siblings().find("ul").slideUp();
                $(this).parent().siblings().removeClass("active");
            }
            $(this).parent().addClass("active");
            // SlideUp() form display: none(height: 0) to display: block(height: auto)
            $(this).siblings("ul").slideDown();
        }
    });

    // Fotter Mobile
    $(document).on("click", ".footer__main .footer__title", function () {
        if ($(window).width() < 740) {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).siblings(".footer__content").slideUp();
            } else {
                $(this).addClass("active");
                $(this).siblings(".footer__content").slideDown();
            }
        }
    });

    // Swatch size product
    $(document).on("click", ".swatch__element label", function () {
        if ($(this).hasClass("")) {
            $(".swatch__element label.sd").removeClass("sd");

            $(this).addClass("sd");
            // $('#pro__code').text('SKU: SP000474');

            if ($(this).siblings().val() == "S") {
                $("#pro__code").text("SKU: SP000469");
            } else if ($(this).siblings().val() == "M") {
                $("#pro__code").text("SKU: SP000479");
            } else if ($(this).siblings().val() == "L") {
                $("#pro__code").text("SKU: SP000489");
            } else {
                $("#pro__code").text("SKU: SP000499");
            }
        }
    });
});

siteOverlay.onclick = function () {
    app.classList.remove("sidebar__move");
    siteNav.classList.remove("active");
    siteNavSearch.classList.remove("active");
    siteNavCart.classList.remove("active");
    siteNavMenu.classList.remove("active");
    siteOverlay.classList.remove("active");
};

siteClose.onclick = function () {
    app.classList.remove("sidebar__move");
    siteNav.classList.remove("active");
    siteNavSearch.classList.remove("active");
    siteNavCart.classList.remove("active");
    siteNavMenu.classList.remove("active");
    siteOverlay.classList.remove("active");
};

$(".slider.owl-carousel").owlCarousel({
    loop: true,
    // nav: true,
    dots: true,
    // autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});

$(".new__latest-content.owl-carousel").owlCarousel({
    loop: true,
    // dots: true,
    nav: true,
    // autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 3,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 3,
        },
    },
});
