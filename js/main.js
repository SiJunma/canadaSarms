$( document ).ready(function() {
    
    $('.nav-main .menu-dropdown').on('click', evt => {
        evt.preventDefault();
        $('#navSub').addClass('visible');

        subMenuOpenDropdown(evt.target.getAttribute('href'));
    });

    $(document).on('click', (evt) => {
        let container = $('.nav');
        if(container.has(evt.target).length === 0) {
            $('#navSub').removeClass('visible');
            subMenuCloseDropdownMobile();
        }
    });

    $('.nav-sub__menu .menu-dropdown').on('click', evt => {
        evt.preventDefault();
        let current = evt.target;
        if(current.classList.contains('current') && $('.nav-main__menu').css('display') == 'none') {
            subMenuCloseDropdownMobile();
        } else {
            $('.nav-sub__menu .menu-dropdown').removeClass('current');
            evt.target.classList.add('current');
            subMenuOpenDropdown(evt.target.getAttribute('href'));
        }
    });

    $('#navSearchInput').focus((evt) => {
        evt.preventDefault();
        searchOpen();

        $(document).on('click', (evt) => {
            let container = $('#navSearch');
            if(container.has(evt.target).length === 0) {
                searchClose();
            }
        });
        
    });

    $('.nav-search__btn').on('click', (evt) => {
        evt.preventDefault();
        searchOpen();
        $('#navSearchInput').focus();

        $(document).on('click', (evt) => {
            let container = $('#navSearch');
            if(container.has(evt.target).length === 0) {
                searchClose();
            }
        });
    });

    $('#navUser').on('click', (evt) => {
        evt.preventDefault();
        $('#userPopup').fadeToggle(300);

        $(document).on('click', (evt) => {
            let container = $('#userPopup');
            let container2 = $('#navUser');
            if(container.has(evt.target).length === 0 && container2.has(evt.target).length === 0) {
                $('#userPopup').fadeOut(300);
            }
        });
    });

    $('.menu__burger-btn').on('click', (evt) => {
        evt.preventDefault();
        $('#navSub').addClass('visible');
        $('.nav-sub__menu .nav-main__menu').css('display', 'flex');
    });

    $('.nav-sub__mobile-nav .btn-close').on('click', (evt) => {
        evt.preventDefault();
        $('#navSub').removeClass('visible');

        subMenuCloseDropdownMobile();
    });

    $('.nav-search .btn-close').on('click', (evt) => {
        evt.preventDefault();
        searchClose();
    });

    $('#navCart').on('click', (evt) => {
        evt.preventDefault();
        $('#cartPopup').fadeToggle(400);

        $(document).on('click', (evt) => {
            let container = $('#cartPopup');
            let container2 = $('#navCart');
            if(container.has(evt.target).length === 0 && container2.has(evt.target).length === 0) {
                $('#cartPopup').fadeOut(300);
            }
        });
        $('#navSub').removeClass('visible');
        subMenuCloseDropdownMobile();
    });

    $('#shopFilterMobileBtn').on('click', (evt) => {
        evt.preventDefault();
        $('#shopFilter').fadeToggle(300);
    });

    $('#btnLogin').on('click', (evt) => {
        evt.preventDefault();
        $('#loginPopup').fadeToggle(300);
    });

    $('#btnLogin2').on('click', (evt) => {
        evt.preventDefault();
        $('#userPopup').fadeOut(300);
        $('#loginPopup').fadeIn(300);
    });

    $(document).on('click', (evt) => {
        let container = $('#btnLogin')[0];
        let container2 = $('#loginPopup');
        let container3 = $('#btnLogin2')[0];
        
        if(container !== evt.target && container2.has(evt.target).length === 0 && container3 !== evt.target) {
            $('#loginPopup').fadeOut(300);
        }
    });

    $('#feedbackPopup .btn-close').on('click', (evt) => {
        evt.preventDefault();
        $('#feedbackPopup').fadeOut(300);
    });

    function searchClose() {
        $('#navSearch').removeClass('search-open');
        $('#whenChange').css('display', 'none');
        $('.nav > .nav-main').removeClass('mobile-search-open');
        setTimeout(function() {
            $('.nav-main .nav-main__menu').removeClass('hiden');
        }, 400);
    }

    function searchOpen() {
        $('#navSub').removeClass('visible');
        $('#navSearch').addClass('search-open');
        $('.nav > .nav-main').addClass('mobile-search-open');

        $('.nav-main .nav-main__menu').addClass('hiden');

        //Search Results
        setTimeout(() => {$('#whenChange').fadeIn(400);}, 500)
    }

    function subMenuOpenDropdown(id) {
        $('.nav-sub__item').removeClass('visible');
        $(`${id}`).addClass('visible');
        $('.nav-sub__menu .menu-dropdown').removeClass('current');
        $(`.nav-sub__menu .menu-dropdown[href="${id}"]`).addClass('current');
        $('.nav-sub__wrapper').addClass('opened');
    };

    function subMenuCloseDropdownMobile() {
        $('.nav-sub__wrapper').removeClass('opened');
        $('.menu-dropdown').removeClass('current');
        $('.nav-sub__item').removeClass('visible');
    }



    //FOR QTY COUNTER 
    function wcqib_refresh_quantity_increments() {
        jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
            var c = jQuery(b);
            c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
        })
    }
    String.prototype.getDecimals || (String.prototype.getDecimals = function() {
        var a = this,
            b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
        return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
    }), jQuery(document).ready(function() {
        wcqib_refresh_quantity_increments()
    }), jQuery(document).on("updated_wc_div", function() {
        wcqib_refresh_quantity_increments()
    }), jQuery(document).on("click", ".plus, .minus", function() {
        var a = jQuery(this).closest(".quantity").find(".qty"),
            b = parseFloat(a.val()),
            c = parseFloat(a.attr("max")),
            d = parseFloat(a.attr("min")),
            e = a.attr("step");
        b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
    });



    //FOR PRICE RANGE FILTER

    var slider = document.getElementById('filterPriceRange');

    if(slider) {
        noUiSlider.create(slider, {
            start: [0, 720],
            connect: true,
            step: 10,
            range: {
                'min': 0,
                'max': 1200
            },
    
            format: {
                // 'to' the formatted value. Receives a number.
                to: function (value) {
                    return Math.round(value) + '$';
                },
                // 'from' the formatted value.
                // Receives a string, should return a number.
                from: function (value) {
                    return Number(Math.round(value));
                }
            }
        });
    
        var snapValues = [
            document.getElementById('rangesliderMin'),
            document.getElementById('rangesliderMax')
        ];
    
        slider.noUiSlider.on('update', function (values, handle) {
            snapValues[handle].innerHTML = values[handle];
        });
    }



    //TABS
    var tabItems = $('.cd-tabs-navigation a'),
    tabContentWrapper = $('.cd-tabs-content');

    tabItems.on('click', function(event){
        event.preventDefault();
        var selectedItem = $(this);
        if( !selectedItem.hasClass('selected') ) {
            var selectedTab = selectedItem.data('content'),
                selectedContent = tabContentWrapper.find('li[data-content="'+selectedTab+'"]'),
                slectedContentHeight = selectedContent.innerHeight();
            
            tabItems.removeClass('selected');
            selectedItem.addClass('selected');
            selectedContent.addClass('selected').siblings('li').removeClass('selected');
            //animate tabContentWrapper height when content changes 
            tabContentWrapper.animate({
                'height': slectedContentHeight
            }, 200);

            setTimeout(() => {tabContentWrapper.css('height', 'auto')}, 300);
        }
    });



    //ACCORDEON
    var acc = document.getElementsByClassName("custom-accordion__btn");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
    }

    //my account switcher
    $('.login-section .js-register').click(evt => {
        evt.preventDefault();
        $('.login-section').removeClass('visible');
        $('.register-section').addClass('visible');
    });

    $('.register-section .js-login').click(evt => {
        evt.preventDefault();
        $('.login-section').addClass('visible');
        $('.register-section').removeClass('visible');
    });



    //SLICK

    $('.header-slider').slick({
        slidesToShow: 1,
        dots: false,
        arrows: false,
        infinite: true,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        adaptiveHeight: true,
    });

    $('.interested__slider').slick({
        slidesToShow: 3,
        arrows: false,
        dots: false,
        slidesToScroll: 1,
        infinite: false,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },

            {
                breakpoint: 430,
                settings: {
                    slidesToShow: 1
                }
            }
        ],
    });

    $('.shop-slider').slick({
        slidesToShow: 4,
        arrows: false,
        dots: false,
        slidesToScroll: 2,
        infinite: false,
        swipeToSlide: true,

        responsive: [
            {
            breakpoint: 1400,
            settings: {
                slidesToShow: 4
                }
            },

            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                dots: true,
                }
            },

            {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                dots: true,
                }
            },

            {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                dots: true,
                }
            },
        ]
    });

    $('.cd-tabs-navigation').slick({
        slidesToShow: 5,
        dots: false,
        arrows: false,
        slidesToScroll: 1,
        swipeToSlide: true,
        infinite: false,
        variableWidth: true,
        responsive: [
            {
            breakpoint: 1400,
            settings: {
                slidesToShow: 5
            }
            },
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4
            }
            },
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
            },

            {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
            },

            {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
            }
        ]
    });

    $('.product-page__slider-single').slick({
        asNavFor: '.product-page__slider-vertical',
        slidesToShow: 1,
        arrows: false,
        dots: false,
        infinite: false,
        fade: true,
        swipeToSlide: true,
    });

    $('.product-page__slider-vertical').slick({
        slidesToShow: 4,
        arrows: false,
        dots: false,
        infinite: false,
        vertical: true,
        verticalSwiping: true,
        asNavFor: '.product-page__slider-single',
        focusOnSelect: true,
        swipeToSlide: true,

        responsive: [
            {
                breakpoint: 465,
                settings: {
                    vertical: false,
                    slidesToShow: 4,
                    swipeToSlide: true,
                    verticalSwiping: false,
                }
            }
        ]
    });

    $('.main-feedback__slider').slick({
        centerMode: true,
        slidesToShow: 3,
        arrows: false,
        dots: true,
        slidesToScroll: 3,
        infinite: true,
        swipeToSlide: true,
        
        responsive: [
            {
            breakpoint: 1400,
            settings: {
                centerMode: false,
                slidesToShow: 3
            }
            },
            {
            breakpoint: 1200,
            settings: {
                centerMode: false,
                slidesToShow: 2
            }
            },
            {
            breakpoint: 992,
            settings: {
                centerMode: false,
                slidesToShow: 1
            }
            }
        ]

    });

});