<?php
//coreo al que se envia//
$destinatario= 'moncivais.optica6@hotmil.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$mensaje = $_POST['mesanje'];
$asunto = $_POST['asunto'];

$header = "Enviado desde la página web";
$mensajecompleto = &mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $edad, $email, $asunto, $mensajecompleto, $header);
echo "<script>alert(`Enviado correctamente`)</script>"
echo "<script> setTimeout(\"location.href=`../index.html`\",3000</script>"
