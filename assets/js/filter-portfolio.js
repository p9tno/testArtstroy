$(document).ready(function() {
    let data_price_min = parseInt($('.js-slide-price').attr('data-min'));
    let data_price_max = parseInt($('.js-slide-price').attr('data-max'));

    function changeSlide() {
        $( ".js-slide-price" ).slider({
            range: "min",
            value: data_price_max,
            min: data_price_min,
            max: data_price_max,
            // step: 50000,
            slide: function( event, ui ) {
                $( "#slide-price-max" ).text( thousandSeparator(ui.value) );
                $( "#priceMax" ).val( ui.value );
            },
            change: function( event, ui ) {
            },
            stop: function( event, ui ) {
                my_filter_get_posts();
            },
        });

        let data_square_min = parseInt($('.js-slide-square').attr('data-min'));
        let data_square_max = parseInt($('.js-slide-square').attr('data-max'));

        $( ".js-slide-square" ).slider({
            range: "min",
            value: data_square_max,
            min: data_square_min,
            max: data_square_max,
            // step: 10,
            slide: function( event, ui ) {
                $( "#slide-square-max" ).text( thousandSeparator(ui.value) );
                $( "#squareMax" ).val( ui.value );
            },
            change: function( event, ui ) {
            },
            stop: function( event, ui ) {
                my_filter_get_posts();
            },
        });
    };
    changeSlide();

    function thousandSeparator(str) {
        var parts = (str + '').split('.'),
        main = parts[0],
        len = main.length,
        output = '',
        i = len - 1;

        while(i >= 0) {
            output = main.charAt(i) + output;
            if ((len - i) % 3 === 0 && i > 0) {
                output = ' ' + output;
            }
            --i;
        }

        if (parts.length > 1) {
            output += '.' + parts[1];
        }
        return output;
    };



    //Запуск фильтра
    $(".portfolio__filters :checkbox").click(function() {
        // console.log('checkbox change');
        my_filter_get_posts();
    });

    $(document).on("click",".pagination_filter > .page-numbers",function(e){
        e.preventDefault();
        console.log('click page-numbers');

        let top = $('#portfolio').offset().top - 40;
        $('body,html').animate({scrollTop: top}, 700);
        

        var url = $(this).attr('href'); //Grab the URL destination as a string
        var paged = url.split('&paged='); //Split the string at the occurance of &paged=

        if(~url.indexOf('&paged=')){
            paged = url.split('&paged=');
        } else {
            paged = url.split('/page/');
        }
        my_filter_get_posts(paged[1]); //Load Posts (feed in paged value)
    });

    //Получаем данные
    function getHousesCats()
    {
        let cats = []; //Setup empty array

        $(".filter-houses-cat-js input:checked").each(function() {
            let val = $(this).val();
            cats.push(val); //Push value onto array
        });
        // console.log(cats);
        return cats; //Return all of the selected genres in an array
    }

    function getHousesFloor()
    {
        let cats = []; //Setup empty array

        $(".filter-houses-floor-js input:checked").each(function() {
            let val = $(this).val();
            cats.push(val); //Push value onto array
        });

        // console.log(cats);
        return cats; //Return all of the selected genres in an array
    }

    function getHousesBedroom()
    {
        let cats = []; //Setup empty array

        $(".filter-houses-bedroom-js input:checked").each(function() {
            let val = $(this).val();
            cats.push(val); //Push value onto array
        });

        // console.log(cats);
        return cats; //Return all of the selected genres in an array
    }

    function getPricesMin(){
        return $('#priceMin').val();
    }

    function getPriceMax(){
        return $('#priceMax').val();
    }

    function getSquareMin(){
        return $('#squareMin').val();
    }

    function getSquareMax(){
        return $('#squareMax').val();
    }

    function my_filter_get_posts(paged)
    {
        // console.log('get_posts');
        let paged_value = paged; //Store the paged value if it's being sent through when the function is called
        let ajax_url = '/wp-admin/admin-ajax.php';

        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
                action: 'my_custom_filter',
                category: getHousesCats,
                floor: getHousesFloor,
                bedroom: getHousesBedroom,
                min: getPricesMin,
                max: getPriceMax,
                squareMin: getSquareMin,
                squareMax: getSquareMax,
                paged: paged_value, //If paged value is being sent through with function call, store here
            },

            beforeSend: function ()
            {
                initPreloder();
            },
            complete: function(){
                destroyPreloder();
            },
            success: function(data)
            {
                $('.portfolio__grid').html(data);
                $('.show_more_house_js').parent().addClass('d-none');
                const otherProjects = new Swiper(".otherProjects-swiper-js", {
                    slidesPerView: 1,
                    allowTouchMove: false,
                    loop: true,
            
                    observer: true, //обязательно
                    observeParents: true, //обязательно
                    observeSlideChildren: true, //обязательно
            
                    navigation: {
                        nextEl: '.icon_arrow_right',
                        prevEl: '.icon_arrow_left',
                    },
            
                    pagination: {
                        el: '.otherProjects__dotted',
                    },
            
            
                });

                showModal();
            },
            error: function()
            {
                $(".portfolio__grid").html('<p>There has been an error</p>');
            }
        });
    }

    function my_filter_reset_posts()
    {
        // console.log('reset_posts');
        let ajax_url = '/wp-admin/admin-ajax.php';
        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
                action: 'my_custom_reset_filter',
            },
            beforeSend: function ()
            {
                initPreloder();
            },
            complete: function(){
                destroyPreloder();
            },

            success: function(data)
            {
                $('.portfolio__grid').html(data);
                // $('.show_more_house_js').parent().removeClass('d-none');
                // showMoreHouse('.otherProjects__item', '.show_more_house_js');

                const otherProjects = new Swiper(".otherProjects-swiper-js", {
                    slidesPerView: 1,
                    allowTouchMove: false,
                    loop: true,
            
                    observer: true, //обязательно
                    observeParents: true, //обязательно
                    observeSlideChildren: true, //обязательно
            
                    navigation: {
                        nextEl: '.icon_arrow_right',
                        prevEl: '.icon_arrow_left',
                    },
            
                    pagination: {
                        el: '.otherProjects__dotted',
                    },
            
            
                });
            },
            error: function()
            {
                $(".portfolio__grid").html('<p>There has been an error</p>');
            }
        });
    }

    function resetFilter() {
        let reset = $('#portfolio-reset');
        reset.on('click', function(event) {
            event.preventDefault();
            location.reload(true);            
            // add go to top

            // let data_price_min = parseInt($('.js-slide-price').attr('data-min'));
            // $('.js-slide-price').slider("value", data_price_min);
            // $( "#slide-price-min" ).text( thousandSeparator(data_price_min) );

            // let data_square_min = parseInt($('.js-slide-square').attr('data-min'));
            // $('.js-slide-square').slider("value", data_square_min);
            // $( "#slide-square-min" ).text( thousandSeparator(data_square_min) );

            // $(".portfolio__filters :checkbox").each(function() {
            //     $(this).prop('checked', false);
            // });

            // my_filter_reset_posts();
        });
    }
    resetFilter();

    function initPreloder() {
        $('.preloaderFilter-js').show();
    }

    function destroyPreloder() {
        setTimeout( () => {
            $('.preloaderFilter-js').hide();
        },300);
    }

    // start modal
    function showModal() {
        $('.show_js').on('click', function (e) {
            e.preventDefault();
            let id  = $(this).attr('href');
            $(id).modal('show');
        });
    }
    

    // function showMoreHouse(classItem, btn) {
    //     let item = $(''+ classItem +'');
    //     let count = item.length;
    //     let start = 4;
    //     let show = 100;

    //     item.addClass('d-none');
    //     $('' + classItem + ':lt(' + start + ')').removeClass('d-none');

    //     $(btn).click(function(e) {
    //         e.preventDefault();
    //         $(this).addClass('loading');

    //         let load = $(this).data('load');
    //         let more = $(this).data('more');

    //         start = (start + show <= count) ? start + show : count;

    //         $(this).text(load);

    //         setTimeout(() => {
    //             $(''+ classItem +':lt(' + start + ')').removeClass('d-none');

    //             if ($(''+ classItem +':not(.d-none)').length == count) {
    //                 // $(this).parent().remove();
    //                 $(this).parent().addClass('d-none');
    //             }

    //             $(this).removeClass('loading');
    //             $(this).text(more);
    //         }, 500);
    //     });
    // }
    // showMoreHouse('.otherProjects__item', '.show_more_house_js');

});
