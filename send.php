<?php
// Загружаем WordPress
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

function sendForm(){
    // $to = 'p9tnophp@gmail.com';
    if (get_field('mail_to', 'option')) {
        $to = get_field('mail_to', 'option');
    }

    $notspam = (isset($_POST['notspam']) ? $_POST['notspam'] : null);
    if ($notspam == 'Not spam') {
    } else {
        exit('Exit');
    };

    $phone = (isset($_POST['phone']) ? $_POST['phone'] : null);
    $email = (isset($_POST['email']) ? $_POST['email'] : null);
    $messenger = (isset($_POST['messenger']) ? $_POST['messenger'] : null);
    // $total = (isset($_POST['total']) ? $_POST['total'] : null);

    $msg = 'Заявка с сайта <br>';
    if (isset($_POST['subject']) ? $_POST['subject'] : null){
        $msg .= '<br>
        <h3>Заявка : ' . $_POST['subject'] . '</h3>';
    }
    
    $files_path = array();


    if ($_FILES['file']){
        $uploadedfile       = $_FILES['file'];
        $upload_overrides   = array( 'test_form' => false );
        $movefile           = wp_handle_upload( $uploadedfile, $upload_overrides );
        if( $movefile ) {
            $files_path = $movefile[ 'file' ];
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
sendForm();