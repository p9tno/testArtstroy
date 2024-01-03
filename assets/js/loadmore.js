jQuery(function($){

    function loadMore(btn, this_page) {

        // AJAX загрузка страниц/записей WP 
        $(btn).on('click', function(){
            console.log('click');
    
            let _this = $(this);
            _this.html('<span class="">Загрузка  ...</span>'); // изменение кнопки 
    
            let data = {
                'action': 'loadmore',
                'query': _this.attr('data-param-posts'),
                'page': this_page,
                'tpl': _this.attr('data-tpl')
            }
    
    
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                data: data,
                type: 'POST',
                success:function(data){
                    if (data) {
                        _this.html('<span class="">Показать ещё</span>');
                        _this.parent().parent().find('.loadmore-js').append(data);
    
                        this_page++;                      // увелич. номер страницы +1
                        console.log(this_page);
                        if (this_page == _this.attr('data-max-pages')) {
                            _this.remove();               // удаляем кнопку, если последняя стр. 
                        }
    
                    } else {                              // если закончились посты 
                        _this.remove();                   // удаляем кнопку 
                    }
    
                    addDataGallery();
                    addSliders();
                    showGallery();
                },
                
                
            });
          
        });
    }

    loadMore('.btn-loadmore', this_page);
    loadMore('.btn-loadmore-5', this_page_5);
    loadMore('.btn-loadmore-13', this_page_13);
    loadMore('.btn-loadmore-14', this_page_14);
    loadMore('.btn-loadmore-15', this_page_15);
    loadMore('.btn-loadmore-16', this_page_16);
    loadMore('.btn-loadmore-17', this_page_17);

});



