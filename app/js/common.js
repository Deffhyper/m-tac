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


});