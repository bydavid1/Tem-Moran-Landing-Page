<?php
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

$valid['success'] = array(
  'success' => false,
  'message' => array()
);

try {
$nombre = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];
$telefono = $_POST['phone'];
if ($telefono == "") {
    $telefono = "No agregado";
}


$to  = 'byronjimenez9911@gmail.com';
$subjetc = 'tem-moran contact form from: '. $email;
$messsage = '
<html>
<head>
  <title>Mensaje enviado por '. $nombre .' desde el formulario de contacto de Tem-moran</title>
</head>
<body>
  <h6>Mensaje:</h6>
  <p>' .$mensaje. '</p>
  <b>Contacto: </b> '. $telefono .'
</body>
</html>
';

// HTML Message
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Aditional headers
$headers .= 'To: Tem Moran admins<contact@temmoran.com>'. "\r\n";

// Enviarlo
if(mail($to, $subjetc, $messsage, $headers)){
    $valid['success'] = true;
    $valid['message'] = "Mensaje enviado";  

    echo json_encode($valid);
}else{
    $valid['success'] = false;
    $valid['message'] = "Ocurrió un error, intentelo mas tarde";  

    echo json_encode($valid);
}
} catch (Throwable $th) {
  
  http_response_code(500);
  $valid['success'] = false;
  $valid['message'] = "Error del servidor: " . $th;  
}

?>