<?php

session_start();
header('Location: ../');


$code = rand(1, 99999);

$_SESSION['code'] = [
    "veref_code" => $code
];

use Snipworks\Smtp\Email;
require_once('Email.php');

$mail = new Email('hosting', 465);
$mail->setProtocol(Email::SSL)
    ->setLogin('login', 'password')
    ->setFrom('test@mysite.com')
    ->setSubject('Verefication code')
    ->setTextMessage('Your code '.$code)
    ->addTo($_POST['email']);

if ($mail->send()) {
    $_SESSION['veref'] = true;
    exit(0);
    
}else{
    http_response_code(499);
    echo 'Error' . PHP_EOL;
}





?>