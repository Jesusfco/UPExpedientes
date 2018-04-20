<?php 

    $mensaje = '    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>'
      . $mensaje .   
    '</body>
    </html>
    ';
    require_once('PHPMailer/PHPMailerAutoload.php');

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "465";
    $mail->isHTML(true);
    $mail->Username = "vsandovalvillar@gmail.com";
    $mail->Password = "onerepublic";

    $mail->SetFrom('vsandovalvillar@gmail.com');
    $mail->Subject = $asunto;
    $mail->Body = $mensaje;
    $mail->AddAddress($destinatario);

    $mail->Send();



