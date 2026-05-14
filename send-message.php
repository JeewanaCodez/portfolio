<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

include 'includes/db.php';

if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SAVE TO DATABASE

    $sql = "INSERT INTO contact_messages(name,email,message)
            VALUES('$name','$email','$message')";

    mysqli_query($conn, $sql);

    // SEND EMAIL

    $mail = new PHPMailer(true);

    try{

        $mail->isSMTP();

        $mail->Host       = 'smtp.gmail.com';

        $mail->SMTPAuth   = true;

        $mail->Username   = 'jeewanakaushalya8@gmail.com';

        $mail->Password   = 'onqf mwni zbmt pabx';

        $mail->SMTPSecure = 'tls';

        $mail->Port       = 587;

        // EMAIL SETTINGS

        $mail->setFrom('jeewanakaushalya8@gmail.com', 'Portfolio Contact');

        $mail->addAddress('jeewanakaushalya8@gmail.com');

        $mail->isHTML(true);

        $mail->Subject = 'New Portfolio Message';

        $mail->Body = "

            <h2>New Contact Message</h2>

            <p><strong>Name:</strong> $name</p>

            <p><strong>Email:</strong> $email</p>

            <p><strong>Message:</strong><br>$message</p>

        ";

        $mail->send();

        echo "
        <script>
            alert('Message Sent Successfully!');
            window.location.href='contact.php';
        </script>
        ";

    }catch(Exception $e){

        echo "
        <script>
            alert('Message Failed!');
            window.location.href='contact.php';
        </script>
        ";
    }
}
?>