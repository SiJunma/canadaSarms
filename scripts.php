<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>

<script type="text/javascript">
    
    $(document).ready(function(){

        $('.header-slider').slick({
            slidesToShow: 1,
            dots: false,
            arrows: false,
            infinite: true,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
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
</script>

<script src="js/main.js"></script>