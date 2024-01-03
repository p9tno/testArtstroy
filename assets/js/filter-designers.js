$(document).ready(function() {

    // console.log('init filter For Designers');

    function filterForDesigners() {
    
        function showMoreD(classItem, btn) {
            let item = $(''+ classItem +'');
            let count = item.length;
            let start = 6;
            let show = 3;
    
            item.addClass('d-none');
            $('' + classItem + ':lt(' + start + ')').removeClass('d-none');
    
            $(btn).click(function(e) {
                e.preventDefault();
                $(this).addClass('loading');
    
                let load = $(this).data('load');
                let more = $(this).data('more');
    
                start = (start + show <= count) ? start + show : count;
    
                $(this).text(load);
    
                setTimeout(() => {
                    $(''+ classItem +':lt(' + start + ')').removeClass('d-none');
    
                    if ($(''+ classItem +':not(.d-none)').length == count) {
                        $(this).parent().remove();
                    }
    
                    $(this).removeClass('loading');
                    $(this).text(more);
                }, 500);
            });
            
            // console.log(count);
            // console.log(start);

            if (count < start || count == start ) {
                // console.log('remove');
                $('.load_more').parent().remove();
            }
        }
        // showMoreD('.levelDesign__item', '.show_more_d_js');
    

        let category = [];
    
        $('.filter_reset_js').click(function(e) {
            e.preventDefault();

            // console.log('filter_reset_js')
    
            $("#filter :checkbox").each(function() {
                $(this).prop('checked', false);
                category = [];
            });

            $.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                dataType: 'html',
                data: {
                  action: 'filter_designers',
                  category: category,
                },
                beforeSend: function () {
                    initPreloder();
                },
                complete: function(){
                    destroyPreloder();
                },
                success: function(res) {
                  $('.filter__result').html(res);                  
                }
            })

        });
    
        
        $("#filter :checkbox").click(function() {
            // console.log('#filter :checkbox');
            let el = $(this);
            let value = el.val()

            if (el.is(':checked')) {
                // console.log('checked add array');
                category.push(value);
                // console.log(category);
                
            } else {
                // console.log('remove el on array');
                category.splice(category.indexOf(value), 1);
            }

            $.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                dataType: 'html',
                data: {
                  action: 'filter_designers',
                  category: category,
                },
                beforeSend: function () {
                    initPreloder();
                },
                complete: function(){
                    destroyPreloder();
                },
                success: function(res) {
                  $('.filter__result').html(res);                  
                }
            })

        });
    
    }
    filterForDesigners();



    function initPreloder() {
        $('.preloaderFilter-js').show();
    }

    function destroyPreloder() {
        setTimeout( () => {
            $('.preloaderFilter-js').hide();
        },1200);
    }

} );




