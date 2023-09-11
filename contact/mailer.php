<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    function adaptable_mail($to, $subject, $message) {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'asw198207@gmail.com';
        $mail->Password = 'ggqswrgclymubgkk';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('asw198207@gmail.com');
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        
        $mail->send();
    }
?>