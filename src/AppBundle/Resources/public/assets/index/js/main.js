/** Navigation logic */
$('.navigation-dropdown').on('click', function () {
    if ($(this).hasClass('navigation-dropdown-active')) {
        $(this).removeClass('navigation-dropdown-active');
        $(this).find('.navigation-dropdown-content').removeClass('show-dropdown');
    } else {
        var allNavigationLinks = $('.navigation-dropdown');
        allNavigationLinks.removeClass('navigation-dropdown-active');
        allNavigationLinks.find('.navigation-dropdown-content').removeClass('show-dropdown');
        $(this).addClass('navigation-dropdown-active');
        $(this).find('.navigation-dropdown-content').addClass('show-dropdown');
    }
});

$(function() {
    var top = $('#menu').offset().top - parseFloat($('#menu').css('marginTop').replace(/auto/, 0));
    var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));

    var maxY = footTop - $('#menu').outerHeight();

    $(window).scroll(function(evt) {
        var y = $(this).scrollTop();
        if (y > top) {
            if (y < maxY) {
                $('#menu').addClass('fixed').removeAttr('style');
            } else {
                $('#menu').removeClass('fixed').css({
                    position: 'absolute',
                    top: (maxY - top) + 'px'
                });
            }
        } else {
            $('#menu').removeClass('fixed');
        }
    });


    // Cards
    $('.no-touch .project-list li:nth-child(3), .no-touch .project-list li:nth-child(8)').hover(function(e) {
        $(this).parents('.client-meta').next('.overflow-wrapper').find('img:nth-child(1)').toggleClass('show-image');
    });

    $('.no-touch .project-list li:nth-child(4), .no-touch .project-list li:nth-child(9)').hover(function(e) {
        $(this).parents('.client-meta').next('.overflow-wrapper').find('img:nth-child(2)').toggleClass('show-image');
    });

    $('.no-touch .project-list li:nth-child(5), .no-touch .project-list li:nth-child(9)').hover(function(e) {
        $(this).parents('.client-meta').next('.overflow-wrapper').find('img:nth-child(3)').toggleClass('show-image');
    });

    $('.no-touch .project-list li:nth-child(6), .no-touch .project-list li:nth-child(10)').hover(function(e) {
        $(this).parents('.client-meta').next('.overflow-wrapper').find('img:nth-child(4)').toggleClass('show-image');
    });

    $('.no-touch .project-list li:nth-child(7), .no-touch .project-list li:nth-child(11)').hover(function(e) {
        $(this).parents('.client-meta').next('.overflow-wrapper').find('img:nth-child(5)').toggleClass('show-image');
    });

    // Reset
    $('.touch .client-wrap').click(function(event){
        var target = $( event.target );
        if ( target.hasClass( "client-close" ) ) {
            $('.client-wrap div.client').addClass('reset');
        }
        else{
            $('.client-wrap div.client').removeClass('reset');
        }
    });

    // White BG for client top
    $('.no-touch .project-list li').hover(function(e) {
        $(this).parents('.client-meta').next('.overflow-wrapper').toggleClass('white-bg');
        $('.touch .client-wrap').toggleClass('.solid');
    });

    // David Walsh simple lazy loading
    [].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
        img.setAttribute('src', img.getAttribute('data-src'));
        img.onload = function() {
            img.removeAttribute('data-src');
        };
    });

    // Slider
    var mySwiper = new Swiper(".swiper-container", {
        direction: "vertical",
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            }
        },
        grabCursor: true,
        speed: 1000,
        paginationClickable: true,
        parallax: true,
        autoplay: false,
        effect: "slide"
    });
});

// Back to top button
(function() {
    $(document).ready(function() {
        return $(window).scroll(function() {
            return $(window).scrollTop() > 100 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
        }), $("#back-to-top").click(function() {
            return $("html,body").animate({
                scrollTop: "0"
            })
        })
    })
}).call(this);

$(document).ready(function () {
    $('[rel="tooltip"]').tooltip();
});

function rotateCard(btn) {
    var $card = $(btn).closest('.card-container');
    console.log($card);
    if ($card.hasClass('hover')) {
        $card.removeClass('hover');
    } else {
        $card.addClass('hover');
    }
}