<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: index.html" );
}

/*
if( ! isset( $_POST['nombre'] ) ){
    header("Location: index.html" );
}
*/


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

//sintaxis de los emails email@algo.com || 
// nombre <email@algo.com>

$headers = "MIME-Version: 1.0 \r\n";
$headers.= "Content-type: text/html; charset=utf-8 \r\n";
$headers.= "From: $userName $id_doc <$recoveryEmail> \r\n";
$headers.= "To: Sitio web <nianbf07@gmail.com> \r\n";
// $headers.= "Cc: copia@email.com \r\n";
// $headers.= "Bcc: copia-oculta@email.com \r\n";


//REMITENTE (NOMBRE/APELLIDO - EMAIL)
//ASUNTO 
//CUERPO 
$rta = mail($recoveryEmail, "Mensaje web", $body, $headers );
//var_dump($rta);

header("Location: gracias.html" );