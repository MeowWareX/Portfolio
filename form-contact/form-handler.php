<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Correo no válido."]);
        exit;
    }

    $to = "meowwaredev@gmail.com";
    $subject = "Nuevo mensaje del formulario de contacto";
    $message = "
    Nombre: $name\n
    Correo: $email\n
    Mensaje: $comment\n
    ";
    $headers = "From: $email\r\nReply-To: $email";

    // Enviar correo
    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(["status" => "success", "message" => "Mensaje enviado correctamente."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Hubo un error al enviar el mensaje."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Método no permitido."]);
}
?>
