<?php

$nombre= $_POST['nombre'];
$Telefono= $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Mensaje = $_POST['Mensaje'];
$Acepta = $_POST['Acepta'];

$formcontent="
    Nombre: $nombre \n
    Telefono: $Telefono \n
    E-mail: $Correo \n
    Mensaje: $Mensaje \n
    Acepta promociones: $Acepta \n
";

$recipient = "monaco.cars.jrs@gmail.com";

$subject = "Consulta via Web de $nombre";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>