<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../assets/vendor/phpmailer/phpmailer/src/Exception.php';
require '../assets/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../assets/vendor/phpmailer/phpmailer/src/SMTP.php';

require '../assets/vendor/autoload.php'; 


//como crear contraseña para una aplicacion en este caso phpmailer
/* 
    1. Accede a tu cuenta de Google: Inicia sesión en tu cuenta de Google a través del sitio web oficial de Google (https://myaccount.google.com/).
    2. Ve a la sección de seguridad: Dentro de tu cuenta de Google, busca y haz clic en la opción de "Seguridad" o "Security". Esto te llevará a la página de configuración de seguridad de tu cuenta.
    3. Busca la sección de "Contraseñas de aplicación": En la página de seguridad, busca una sección que se llame "Contraseñas de aplicación" o "App passwords". Esta sección generalmente se encuentra dentro de la configuración relacionada con la autenticación y las contraseñas.
    4. Genera una nueva contraseña de aplicación: Dentro de la sección de contraseñas de aplicación, deberías tener la opción de generar una nueva contraseña de aplicación. Si ya has generado una contraseña en el pasado, es posible que se muestre aquí. Si no, puedes generar una nueva seleccionando la opción correspondiente y siguiendo las instrucciones proporcionadas.
    5. Usa la nueva contraseña en PHPMailer: Una vez que hayas generado la nueva contraseña de aplicación, cópiala y úsala en tu script de PHPMailer en lugar de la contraseña original.
*/

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );


        // Configurar remitente y destinatario
        $mail->setFrom('emanuelpazdeveloper@gmail.com', 'Portafolio Emanuel Paz'); // Cambiar esto por tu correo y nombre
        $mail->addAddress('emanuelpazdeveloper@gmail.com'); // Cambiar esto por tu correo electrónico donde quieres recibir los mensajes

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'emanuelpazdeveloper@gmail.com'; // Cambiar por tu correo de Gmail
        $mail->Password = 'hcps bsmq nqjw hvgj'; // Cambiar por tu contraseña de Gmail
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('emanuelpazdeveloper@gmail.com', 'Portafolio Emanuel Paz');
        $mail->addAddress('emanuelpazdeveloper@gmail.com'); // Cambiar por tu correo destino

        $mail->isHTML(true);
        $mail->Subject = 'Contacto desde Portafolio Emanuel Paz';
        $mail->Body    = "Nombre: $nombre<br>Email: $email<br>Mensaje: $mensaje";

        $mail->send();
        echo "<script>alert('¡Hola! Gracias por contactarte conmigo. Te responderé pronto!');</script>";
        header("Location: ../index.php#contact");
        exit; 
    } catch (Exception $e) {
        echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
    }
}
?>
