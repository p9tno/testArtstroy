<?php
// Загружаем WordPress
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

function altexa_quiz(){
    // $to = 'p9tnophp@gmail.com';
    if (get_field('mail_to_quiz', 'option')) {
        $to = get_field('mail_to_quiz', 'option');
    }

    $notspam = (isset($_POST['notspam']) ? $_POST['notspam'] : null);
    if ($notspam == 'Not spam') {
    } else {
        exit('Exit');
    };

    $phone = (isset($_POST['phone']) ? $_POST['phone'] : null);
    $email = (isset($_POST['email']) ? $_POST['email'] : null);
    $messenger = (isset($_POST['messenger']) ? $_POST['messenger'] : null);
    $total = (isset($_POST['total']) ? $_POST['total'] : null);

    $msg = 'Заявка с сайта - Квиз <br>';
    if (isset($_POST['subject']) ? $_POST['subject'] : null){
        $msg .= '<br>
        <h3>Квиз : ' . $_POST['subject'] . '</h3>';
    }
    
    $files_path = array();

    for ($i=1; $i < $total; $i++) { 
        $quizAnsw = $_POST['q-' . $i];
        $quizQuestion = $_POST['title-' . $i];
    
        if (is_array($quizAnsw)) {

            $msg .= '<br><br><i>' . $quizQuestion  . ' :</i> ';

            foreach($quizAnsw as $check) {
                $msg .= $check . ', ';
            }
            
        } else {
            $msg .= '<br><br><i>
            ' . $quizQuestion .  ' :</i> ' . $quizAnsw;
        }
        
        if ($_FILES['file-' . $i]){
            $uploadedfile       = $_FILES['file-' . $i];
            $upload_overrides   = array( 'test_form' => false );
            $movefile           = wp_handle_upload( $uploadedfile, $upload_overrides );
            if( $movefile ) {
                $files_path = $movefile[ 'file' ];
            }
        }
    }
    $msg .= '<br><br>
    Телефон : ' . $phone . '<br><br>  
    Почта : ' . $email . '<br><br>  
    Способ связи : ' . $messenger; 

    if (isset($_POST['page']) ? $_POST['page'] : null){
        $msg .= '<br><br>
        Отправлено со страницы : <b>' . $_POST['page'] . '</b>';
    }
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html' . "\r\n";


    if (  wp_mail($to, 'Заявка с сайта', $msg, $headers, $files_path) ) {
        // echo 'yes';
    } else {
        // echo 'error';
    }

    wp_die();
}
altexa_quiz();