<?php 
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset ($_POST['email'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];  
    $body = $_POST['body'];     

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp Settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com"
    $mail->SMTPAuth = true;
    $mail->Username = "jimmel.bermudez@globaltronics.net";
    $mail->Password = '932523440Devjim256980';
    $mail->Port = 465;
    $mail->SMTP = "ssl";

    // email setttings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("jimmel.bermudez@globaltronics.net");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()){
        $status = "sucess";
        $reponse = "Email is sent";

    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }


    exit(json_encode(array("status => $status, "response" => $response)));

}











?>