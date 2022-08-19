<?php 

$recoveryEmail = $_GET["recoveryEmail"];
$userName = $_GET["userName"];
$id_doc = $_GET["id_doc"];

$destinatario = $recoveryEmail; 
$asunto = "Este mensaje es de prueba"; 
$cuerpo =  
<<<HTML
<head> 
   <title>Prueba de correo</title> 
</head> 
<body> 
<h1>Hola, $userName</h1> 
<p> 
<b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP. Habría que cambiarlo para poner tu propio cuerpo. Por cierto, cambia también las cabeceras del mensaje. 
</p> 
</body> 
HTML; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Nicolas Bautista <narufansofficial@gmail.com>\r\n"; 
$headers .= "To: Nicolas Bautista <$destinatario>\r\n";   

if(mail($destinatario,$asunto,$cuerpo,$headers)) {
    echo ("Mensaje enviado");
}else {
    echo ("Error");
}

?>