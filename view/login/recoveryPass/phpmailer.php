<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: index.html" );
}

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$userName = $_POST['userName'];
$id_doc = $_POST['id_doc'];
$recoveryEmail = $_POST['recoveryEmail'];

if( empty(trim($userName)) ) $userName = 'anonimo';
if( empty(trim($id_doc)) ) $id_doc = '';

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $userName $id_doc / $recoveryEmail</p>
    <h2>Mensaje</h2>
HTML;

$mailer = new PHPMailer();
$mailer->setFrom( "narufansofficial@gmail.com", "$userName $id_doc" );
$mailer->addAddress($recoveryEmail,'Sitio web');
$mailer->Subject = "Mensaje web";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';


$rta = $mailer->send( );

var_dump($rta);