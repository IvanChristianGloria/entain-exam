<?php 
    class values {
        public $error;
        public $message;
    }

    $email = $_POST['email'];
    $check = new values();
    $is_valid = 'false';

    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $check->error = false;
        $check->message = 'email validated';
    }
    else
    {
        $is_valid = 'true';
        $check->error = true;
        $check->message = 'email is not valid';
    }
    
    $myfile = fopen("../log.csv", "a");
    $text = date("Y/m/d") . ', ' . date("h:i:sa") . ', ' . $email . ', ' . $is_valid;
    fwrite($myfile, $text. PHP_EOL);
    fclose($myfile);
    echo json_encode($check);
?>