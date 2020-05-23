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


$to  = 'desarrolloweb@grupofenix.com.sv';
$subjetc = 'Mensaje enviado desde sitio web por '. $email;
$messsage = '
<html>
<body>
  <h2>Mensaje enviado por '. $nombre .' desde el formulario de contacto de Tem-moran</h2>
  <b>Mensaje: </b>' .$mensaje .' <br>
  <b>Contacto: </b> '. $telefono .'
</body>
</html>';

// Aditional headers
$headers = 'From: noreply@example.com'. "\r\n" .
'MIME-Version: 1.0' . "\r\n" .
'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
'X-Mailer: PHP/'. phpversion();

// Send
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