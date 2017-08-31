$(function() {
    // flobal fix window width

    var windowWidth = $(window).width() + 17,
        $textPage = $('.text-page');

    if( !$textPage.find('table').is('[class]')) {
        $textPage.find('table').addClass('responsive-table').cardtable({
            myClass:'resp-table',
            headIndex: 2
        });
    }
    if( !$textPage.find('ul').is('[class]')) {
        $textPage.find('ul').addClass('text-page__ul');
    }
    if( !$textPage.find('ol').is('[class]')) {
        $textPage.find('ol').addClass('text-page__ol');
    }

    ////////////////////////////////// mobile footer ///////////////////////////////////////

    function bindJsOnMobile(windowWidth) {

        var pageFtitle = $('.footer-title');

        if (windowWidth < 768) {
            pageFtitle.unbind('click').click(function () {
                $(this).next().slideToggle();
                $(this).toggleClass('rotate');
            })
        } else {
            pageFtitle.unbind('click');
            pageFtitle.next().removeAttr('style');
            pageFtitle.removeClass('rotate');
        }
    }

    $(window).ready(bindJsOnMobile(windowWidth)).resize(function () {
        bindJsOnMobile(window.innerWidth);
    });


    ///////////////////////////////// top slider //////////////////////////////////////////

    $('.top-slider__for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: '.top-slider__nav'
    });
    $('.top-slider__nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.top-slider__for',
        dots: true,
        arrows: true
    });

    ///////////////////////////////// four item slider goods /////////////////////////////////

    $('.four-item-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: true,
        dots: true,
        infinite: true,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });

    /////////////////////////////////// interactive modals init ////////////////////////////

    $('.interactive-block').on('click', '.image-dot', function (e) {
        e.preventDefault();
        $('.interactive-block__modals').find($(this).attr('href')).addClass('active').siblings().removeClass('active');
    });

    ////////////////////////////// close interactive modals ////////////////////////////////
    $('.goods-close').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.goods').removeClass('active');
    })


    ///////////////////////////// masked input ////////////////////////////////////

    $(".tel-input").mask("(999)999-99-99",{placeholder:"(___) ___-__-__"});

















});