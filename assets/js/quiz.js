$(document).ready(function() {

    //quiz
    let total = 0;


    $('.quiz-question').each(function(indexInArray, valueOfElement) {
        let questionBlock = indexInArray + 1;
        $(this).attr('data-q', questionBlock);
        // console.log($(this).attr('data-q', questionBlock));
        // $(this).find('input').attr('name', 'q-' + questionBlock)
        total = total + 1;
        $('.quiz-line-step_total').text(total);

    });

    let lineStep = 100 / total;
    let line;




    // let quizScroll;
    // if ($(window).width() < 600) {
    //     quizScroll = $("#quiz").offset().top - 120
    //
    // } else {
    //     quizScroll = $("#quiz").offset().top - 70
    // }
    //

    let quizBox = $('#quiz');
    let quizCaptionHeight = $('.quiz__caption').innerHeight() + 100;

    // console.log(quizCaptionHeight);
    // console.log(quizBox);

    if (quizBox.length) {
        if ($(window).width() < 769) {
            quizScroll = quizBox.offset().top + 70;
        } else {
            quizScroll = quizBox.offset().top + quizCaptionHeight;
        }
    }

    let questionNumber = 1;
    let inputNumber;

    let elem = $('.quiz-form').find("input");


    $(elem).on('change', function() {
        $('.quiz-arrow__next').removeAttr('disabled');
    });

    $('.quiz-question label').click(function() {
        let answerNumber = $(this).find('input').attr('name');
        if ($(this).find('input').attr('type') == 'radio') {
            $('.quiz-question input[name="' + answerNumber + '"').parent('label').removeClass('active');
            $(this).addClass('active');
        } else if ($(this).find('input').attr('type') == 'checkbox') {
            if ($(this).find('input').is(':checked')) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        }

    });

    let valid = {};

    $('.quiz-arrow__next, .quiz-question input[type="radio"], .quiz-question__slider-input input[type="checkbox"]').click(function() {
        $('.quiz-hint').hide();
        $('.quiz-arrow__prev').css('display', 'flex');

        // console.log('click quiz')

        if (questionNumber < total) {
            setTimeout(() => {
                questionNumber++;


                $('.quiz-arrow__next').attr('disabled', 'true')
                validNumber = questionNumber - 1
                valid['quiestion-' + validNumber] = true;

                if (valid['quiestion-' + questionNumber] == true) {
                    $('.quiz-arrow__next').removeAttr('disabled');
                }
                
                $('.quiz-question.active').hide();
                $('.quiz-question.active').removeClass('active');
                $('.quiz-arrow__next.active').removeClass('active');

                // console.log($(this).attr('next'))

                if (typeof($(this).attr('next')) === 'undefined') {
                    setTimeout(() => {
                        $('.quiz-container').hide();
                        $('.quiz-result').show();

                        $('.quiz-line__bg').css('width', 100 + '%');
                        $('.quiz-line-step_current').text(100);

                        // console.log('hide');
        
                    }, 0);
                }

                if ($(this).attr('next').length !== 0 ) {
                    // console.log($(this).attr('next'))
                    // console.log($(this).attr('data-line'))
                    $('.quiz-question-' + $(this).attr('next')).fadeIn('slow');
                    $('.quiz-question-' + $(this).attr('next')).addClass('active');
                    $('.quiz-button-' + $(this).attr('next')).addClass('active');

                } else {
                    setTimeout(() => {
                        $('.quiz-container').hide();
                        $('.quiz-result').show();

                        console.log('hide');
        
                    }, 500);
                }
                // $('.quiz-question[data-q=' + questionNumber + ']').addClass('active');
                $('html, body').animate({
                    scrollTop: quizScroll
                }, 0);
                lineWidth($(this).attr('data-line'))
            }, 500);
       
        } else {
            setTimeout(() => {
                $('html, body').animate({
                    scrollTop: quizScroll
                }, 0);

                lineWidth($(this).attr('data-line'))
       
                setTimeout(() => {
                    $('.quiz-container').hide();
                    $('.quiz-result').show();
       
                }, 500);
       
            }, 500);
        }

    });


    $('.quiz-arrow__prev').click(function() {
        if (questionNumber > 2) {
            questionNumber--;
            if (valid['quiestion-' + questionNumber] == true) {
                $('.quiz-arrow__next').removeAttr('disabled');
                // console.log('valid')
            }
            // $('.quiz-arrow__next').removeAttr('disabled');
            $('.quiz-question.active').hide();
            $('.quiz-question.active').removeClass('active');
            $('.quiz-question[data-q=' + questionNumber + ']').fadeIn('slow')
            $('.quiz-question[data-q=' + questionNumber + ']').addClass('active');

            $('html, body').animate({
                scrollTop: quizScroll
            }, 0);
        } else if (questionNumber == 2) {
            $('html, body').animate({
                scrollTop: quizScroll
            }, 0);
            questionNumber--;
            $('.quiz-arrow__next').removeAttr('disabled');
            $('.quiz-question.active').hide();
            $('.quiz-question.active').removeClass('active');
            $('.quiz-question[data-q=' + questionNumber + ']').fadeIn('slow')
            $('.quiz-question[data-q=' + questionNumber + ']').addClass('active');
            $('.quiz-hint').css('display', 'flex');
            $('.quiz-arrow__prev').hide();
        }
        // lineWidth($(this).attr('data-line'))
    });

    let lineCurrent;

    function lineWidth(persent) {
       
        // console.log(persent);
        // lineCurrent = Math.round(questionNumber / total * 100)
        // $('.quiz-line__current').text(lineCurrent + '%');
        $('.quiz-line__bg').css('width', persent + '%');
        // line = lineStep * (questionNumber);
        // line = 'calc(' + line + '% )';
        // $('.quiz-line__bg').css('width', line)
        // $('.quiz-line-step_current').text(questionNumber);
        $('.quiz-line-step_current').text(persent);
        // $('.quiz-line-step_total').text(dataLine);
    }

    function changeSlide() {

        $( ".js-slide" ).slider({
            range: "min",
            value:40,
            min: 10,
            max: 300,
            step: 1,
            slide: function( event, ui ) {
                // $( "#square_text" ).text( ui.value );
                $( ".square_field" ).val( ui.value );
                $('.quiz-arrow__next').removeAttr('disabled');

                // console.log(ui.value);

            }
        });


        // $( "#current_text" ).text( $( ".js-slide" ).slider( "value" ) );
        // $( "#square_field" ).val( $( ".js-slide" ).slider( "value" ) );

    };
    changeSlide();

});
