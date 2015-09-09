<?php
include('PHPMailer-master/class.phpmailer.php');

header ('Content-type: text/html; charset=utf-8');
$to = '';	
$message = '';
$subject = '';

if(isset($_POST['contacto-general'])) {
	if($_POST['inputInfoDe'] == 'Educación'){
       $to = 'maqeducativos@gmail.com';
    }else if($_POST['inputInfoDe'] == 'Exposiciones'){
       $to = 'curaduria_maq@hotmail.com';
    }else if($_POST['inputInfoDe'] == 'Eventos'){
       $to = 'difusionmaq@gmail.com';
    }else if($_POST['inputInfoDe'] == 'Servicios'){
       $to = 'maqeducativos@gmail.com';
    }
	$subject = 'Solicitud de contacto de: ' . $_POST['inputNombre'];
    $message = 'Han recibido un comentario de ' . $_POST['inputNombre'] . ': <br>' . $_POST['inputMensaje'] . '<br><br> Sus datos de contacto son: <br> E-mail: ' . $_POST['inputEmail'] . '<br> Ciudad: ' . $_POST['inputCiudad'] . '<br> Teléfono: ' . $_POST['inputTelefono'];
} else if(isset($_POST['contacto-amigos'])){
    $to = 'maqeducativos@gmail.com';
    $subject = 'Solicitud de afiliación de: ' . $_POST['inputNombre'];
    $message = 'Han recibido una solicitud de afiliación del profesor(a) ' . $_POST['inputNombre'] . ': <br> Sus datos de contacto son: <br> E-mail: ' . $_POST['inputEmail'] . '<br> Teléfono Particular: ' . $_POST['inputTelefono'] . '<br> Numero de Personas: ' . $_POST['inputPersonas'] . '<br> Fecha Deseada: ' . $_POST['inputFecha'] . '<br> Hora Deseada: ' . $_POST['inputHora'];
} else if(isset($_POST['contacto-visita'])){
    $to = 'maqeducativos@gmail.com';
    $subject = 'Solicitud de visita guiada de: ' . $_POST['inputNombre'];
    $message = 'Han recibido una solicitud de visita guiada de ' . $_POST['inputNombre'] . ': <br> Sus datos de contacto son: <br> E-mail: ' . $_POST['inputEmail'] . '<br> Domicilio: ' . $_POST['inputDomicilio'] . '<br> Teléfono Particular: ' . $_POST['inputTelefonoPart'] . '<br> Teléfono Empresa: ' . $_POST['inputTelefonoEmp'] . '<br> Tipo de Membrecia: ' . $_POST['inputInfoDe'];
} else if(isset($_POST['contacto-voluntariado'])){
    $to = 'maqeducativos@gmail.com';
    $subject = 'Solicitud de contacto de: ' . $_POST['inputNombre'];
    $message = 'Han recibido un comentario de ' . $_POST['inputNombre'] . ': <br>' . $_POST['inputMensaje'] . '<br><br> Sus datos de contacto son: <br> E-mail: ' . $_POST['inputEmail'] . '<br> Teléfono: ' . $_POST['inputTelefono'];
}


$email = new PHPMailer();
$email->From      = 'no-reply@museodeartequeretaro.com';
$email->FromName  = 'Museo de Arte de Queretaro';
$email->CharSet   = 'UTF-8';
$email->Subject   = $subject;
$email->Body      = $message;
$email->AddAddress($to);
$email->isHTML(true);


//var_dump($email);

if(!$email->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $email->ErrorInfo;
} else {
    echo 'Message has been sent';
    header('Location: index.php');
}

?>