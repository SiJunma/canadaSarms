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
        }
    });

    $('.nav-sub__menu .menu-dropdown').on('click', evt => {
        evt.preventDefault();
        $('.nav-sub__menu .menu-dropdown').removeClass('current');
        evt.target.classList.add('current');

        subMenuOpenDropdown(evt.target.getAttribute('href'));
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

        $(document).on('click', (evt) => {
            let container = $('#navSearch');
            if(container.has(evt.target).length === 0) {
                searchClose();
            }
        });
    });

    $('#whenEmpty').hide();
    $('#whenChange').hide();
    $('#whenEmpty').fadeIn(400);

    $('#navSearchInput').on('input', () => {
        if($('#navSearchInput').val().length >= 1) {
            $('#whenEmpty').hide();

            $('#whenChange').show();
        } else {
            $('#whenEmpty').show().fadeIn(200);
            $('#whenChange').hide();
            //nav-search__result-wrapper appear
            setTimeout(function() {
                
            }, 500);
        }
    });


    function searchClose() {
        $('#navSearch').removeClass('search-open');
        $('.nav-search__result-wrapper').fadeOut(0);
        setTimeout(function() {
            $('.nav-main .nav-main__menu').removeClass('hiden');
        }, 400);
    }

    function searchOpen() {
        $('#navSub').removeClass('visible');
        $('#navSearch').addClass('search-open');

        $('.nav-main .nav-main__menu').addClass('hiden');
    }


    function subMenuOpenDropdown(id) {
        $('.nav-sub__item').removeClass('visible');
        $(`${id}`).addClass('visible');
        $('.nav-sub__menu .menu-dropdown').removeClass('current');
        $(`.nav-sub__menu .menu-dropdown[href="${id}"]`).addClass('current');
    };







});