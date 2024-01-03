$(document).ready(function() { 
    function submitForm() {
        $('form').on('submit', function(e){ 
            // console.log('click');
            e.preventDefault();
        
            let form = $(this).closest('.form');
            let notspam = form.find('[name="notspam"]');
            notspam.val('Not spam');
        
            let url = form.attr('action');
            let formData = new FormData(this);
            // let formData = form.serialize();


            // let file = form.attr('data-download');
            // if (typeof file !== "undefined") {
            //     let link = document.createElement('a');
            //     link.setAttribute('href', file);
            //     link.setAttribute('download', '');
            //     link.click();
            // } 

            // console.log(form);
            // console.log('url: ' . url);
            // console.log(url);
            // console.log(formData);
            
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                processData: false,
                contentType: false,

                beforeSend: function () {},
                success: function (response) {
                    // location.href = '<?php echo get_page_link(619) ?>';
                    document.location.href = "/thanks/";
                    // console.log('success');
                    // console.log(formData);
                    // console.log(url);
                },
                error: function (responce) {
                    // console.log('error');
                    // console.log(formData);
                    // console.log(url);
                    document.location.href = "/thanks/";
                    
                    // modal.modal('show');
                    // message.html('Произошла ошибка при отправке. <br> Попробуйте отправить форму позже.');
                },
                complete: function() {
                    let file = form.attr('data-download');
                    if (typeof file !== "undefined") {
                        let link = document.createElement('a');
                        link.setAttribute('href', file);
                        link.setAttribute('download', '');
                        link.click();
                    } 
                },
            });
    
        });

    }
    submitForm();

    function disabledButton() {
        $('.check_checked_js').on('change', function () {
            if ( $(this).prop('checked') ) {
                $(this).closest('.form').find('.btn_didisabled_js').attr('disabled', false);
    
            } else {
                $(this).closest('.form').find('.btn_didisabled_js').attr('disabled', true);
            }
        });
    
    }
    disabledButton();
})


