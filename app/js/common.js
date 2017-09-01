$(function () {
    // flobal fix window width

    var windowWidth = $(window).width() + 17,
        $textPage = $('.text-page');

    if (!$textPage.find('table').is('[class]')) {
        $textPage.find('table').addClass('responsive-table').cardtable({
            myClass: 'resp-table',
            headIndex: 2
        });
    }
    if (!$textPage.find('ul').is('[class]')) {
        $textPage.find('ul').addClass('text-page__ul');
    }
    if (!$textPage.find('ol').is('[class]')) {
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

        if(!$('.interactive-block__modals').hasClass('active')) {
            $('.interactive-block__modals').addClass('active');
            $('html').addClass('uk-modal-page');
        }
        $('.interactive-block__modals').find($(this).attr('href')).addClass('active').siblings().removeClass('active');
    });

    ////////////////////////////// close interactive modals ////////////////////////////////
    $('.goods-close').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.goods').removeClass('active');
        $('.interactive-block__modals').removeClass('active');
        $('html').removeClass('uk-modal-page');
    });

    $(document).on('click', '.interactive-block__modals.active', function (e) {

        $('.interactive-block__modals').removeClass('active');
        $('.interactive-block__modals').find('.goods.active').removeClass('active');
        $('html').removeClass('uk-modal-page');

    });


    ///////////////////////////// masked input ////////////////////////////////////

    $(".tel-input").mask("(999)999-99-99", {placeholder: "(___) ___-__-__"});


    ////////////////////////////////////// tablet menu scripts ///////////////////////////////////////////

    var $body = $('body');
    var $pageHeader = $('.page-header');
    var $desctopModalMenu = $('#desktop-modal-menu');
    var $mobTriggerMenu = $('.mobile-menu-trigger');
    var $bottomMenu = $('.page-header-bottom__menu');

    var menuBlur = $('<div/>', {
        class: 'menu-blur'
    });
    var tabletMenu = $('<div/>', {
        id: 'tablet-menu',
        class: 'tablet-menu-block'
    });

    var tabletMenuWrapper = $('<div/>', {
        class: 'container',
        id: 'tablet-menu-wrapper'
    });

    $pageHeader.append(tabletMenuWrapper);
    $(tabletMenuWrapper).append(tabletMenu);
    $('.page-header-top__language').clone().appendTo(tabletMenu);
    $desctopModalMenu.find('.main-top-menu__item').clone().appendTo(tabletMenu);
    $desctopModalMenu.find('.main-top-menu__for-user').clone().appendTo(tabletMenu);
    $(tabletMenu).find('#for-tablet-menu-clone').children().remove();
    $bottomMenu.children('li').clone().appendTo($(tabletMenu).find('#for-tablet-menu-clone'));



    $mobTriggerMenu.on('click', function (e) {
        e.preventDefault();
        if (!$body.hasClass('main-menu-open')) {
            $body.addClass('main-menu-open');
            $body.append(menuBlur);
            $(tabletMenu).addClass('active');
            $mobTriggerMenu.addClass('active');

        } else {
            $('#tablet-menu').removeClass('active');
            $body.removeClass('main-menu-open');
            $('.menu-blur').remove();
            $mobTriggerMenu.removeClass('active');

            $('#tablet-menu').find('.modal-menu-link-list').removeClass('open');
            $('#tablet-menu').find('.tablet-menu-block').removeClass('open');
        }
    });


    $(document).on('click', '.menu-blur', function () {
        $body.removeClass('main-menu-open');
        $('#tablet-menu').removeClass('active open');
        $('#tablet-menu').find('.modal-menu-link-list').removeClass('open');
        $('.menu-blur').remove();
        $mobTriggerMenu.removeClass('active');
    });

    $(document).on('click', '#tablet-menu', function (e) {
        var $target = $(e.target);
        if($target.hasClass('modal-menu-title')){
            $target.next().addClass('open');
            $('#tablet-menu').removeClass('active');
        }
        if($target.closest('li').hasClass('level-one')) {
            $target.closest('.modal-menu-link-list').removeClass('open');
            $target.closest('.modal-menu-link-list').addClass('close');
            $target.next('.level-two').addClass('open');
            $target.closest('li').addClass('close');
        }

        if($target.closest('li').hasClass('back-link')) {

            // if($target.closest('.modal-menu-link-list')){
            //     alert('level-one');
            // }
            // if($target.closest('.level-one')){
            //     alert('level-two');
            // }

            $target.closest('.modal-menu-link-list').removeClass('open');
            $target.closest('.level-two').removeClass('open');
            $target.closest('.modal-menu-link-list').removeClass('close');
            $('#tablet-menu').addClass('active');

        }
    });

    //////////////////////////////////// mobile search //////////////////////////////////////

    $('.mobile-search-trigger').on('click', function (e) {
       e.preventDefault();

       var searchBlur = $('<div>', {
           class: 'search-blur'
       });

       if($('body').hasClass('main-menu-open')) {
           $('.mobile-menu-trigger').trigger('click');
       }
       if(!$('.page-header-search__form').hasClass('active')) {
           $('.page-header-search__form').addClass('active');
           $('.page-header-search__form').find('input').focus();
           $('body').append(searchBlur);
       } else {
           $('.page-header-search__form').removeClass('active');
           $('body').find('.search-blur').remove();
       }
    });

    // close

    $(document).on('click', '.search-blur', function () {
        $('.mobile-search-trigger').trigger('click');
    });


    /////////////////////////////////////////////////// scroll to top ///////////////////////

    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#scroll-up').fadeIn();
        } else {
            $('#scroll-up').fadeOut();
        }
    });

    $('#scroll-up').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });


});