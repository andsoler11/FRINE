<?php


$action         = (isset($_POST['action'])) ? $_POST['action'] : "";
$name           = (isset($_POST['name'])) ? $_POST['name'] : "";                   
$email          = (isset($_POST['email'])) ? $_POST['email'] : "";
$message        = (isset($_POST['message'])) ? $_POST['message'] : "";
$subject        = (isset($_POST['subject'])) ? $_POST['subject'] : "Voluntariado";


if ($action != "") {
    $messageOut = "Hola, soy $name y contacto a FRINE por $subject. Mi correo es $email\n\n"
    . "mensaje: $message\n";
    $encoded_message = urlencode($messageOut);
    $whatsapp_number = "3104816042";
    $whatsapp_url = "https://wa.me/$whatsapp_number?text=$encoded_message";
    header("Location: $whatsapp_url");
    exit();
}