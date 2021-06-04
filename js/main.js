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
        $('.nav-sub__item').removeClass('visible');
        $('.menu-dropdown').removeClass('current');
    })

    function searchClose() {
        $('#navSearch').removeClass('search-open');
        $('#whenChange').css('display', 'none');
        setTimeout(function() {
            $('.nav-main .nav-main__menu').removeClass('hiden');
        }, 400);
    }

    function searchOpen() {
        $('#navSub').removeClass('visible');
        $('#navSearch').addClass('search-open');

        $('.nav-main .nav-main__menu').addClass('hiden');

        //Search Results
        setTimeout(() => {$('#whenChange').fadeIn(400);}, 500)
    }

    function subMenuOpenDropdown(id) {
        $('.nav-sub__item').removeClass('visible');
        $(`${id}`).addClass('visible');
        $('.nav-sub__menu .menu-dropdown').removeClass('current');
        $(`.nav-sub__menu .menu-dropdown[href="${id}"]`).addClass('current');
    };








});