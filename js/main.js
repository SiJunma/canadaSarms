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
            if(container.has(evt.target).length === 0 & container2.has(evt.target).length === 0) {
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
            if(container.has(evt.target).length === 0 & container2.has(evt.target).length === 0) {
                $('#cartPopup').fadeOut(300);
            }
        });
        $('#navSub').removeClass('visible');
        subMenuCloseDropdownMobile();
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


});