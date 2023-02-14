<?php
 // SMTP Server
 require("./packages/PHPMailer/autoload.php");

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 $mail = new PHPMailer(true);

 $mail->isSMTP();
 $mail->IsHTML(true);       
 $mail->Host = "mail.zxcs.nl";
 $mail->SMTPAuth = true;
 $mail->Username = "aletta@pascalservices.nl";
 $mail->Password = "u7ytgDsS";
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
 $mail->Port = 587;
 $mail->From = "aletta@pascalservices.nl";
 $mail->FromName = "Aletta";
//  $mail->SMTPDebug = 2;


if(isset($_POST['aanmelden'])) {


    // Variables
    $teamnaam = $_POST['teamnaam'];
    $school_opleiding = $_POST['school-opleiding'];
    
    $name_1 = $_POST['name_1'];
    $name_2 = $_POST['name_2'];
    $name_3 = $_POST['name_3'];
    $name_4 = $_POST['name_4'];
    $email_1 = $_POST['email_1'];
    $email_2 = $_POST['email_2'];
    $email_3 = $_POST['email_3'];
    $email_4 = $_POST['email_4'];
 

    $mail->addAddress("pascalwiersma2005@gmail.com");
    $mail->Subject = "Aletta | Er is een nieuwe aanmelding ingediend";
    $mail->Body = '<!DOCTYPE html>
    <html>
    <head>
      <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #eeeeee;
        }
        .container {
          max-width: 600px;
          margin: 0 auto;
          background-color: #ffffff;
          padding: 20px;
          text-align: center;
        }
        .logo {
          width: 200px;
          height: auto;
          margin: 0 auto;
        }
        h1 {
          color: #006699;
          margin-top: 20px;
          margin-bottom: 20px;
        }
        p {
          font-size: 16px;
          line-height: 1.5;
          margin-bottom: 20px;
        }
        ul {
          list-style: none;
          padding: 0;
          margin-bottom: 20px;
        }
        li {
          font-size: 16px;
          line-height: 1.5;
          margin-bottom: 10px;
        }
        a {
          color: #006699;
          text-decoration: none;
        }
      </style>
    </head>
    <body>
      <div class="container">
        <h1>Er is een nieuwe aanmelding binnen gekomen,<br>Hierbij de gegevens:</h1>

        <small>Dit is een automatische e-mail.<br>Reageren op deze e-mail wordt niet verwacht. Er kunnen geen rechten worden ontleend aan de informatie in deze e-mail. Als u deze e-mail niet herkent, kunt u deze als niet verzonden beschouwen.</small>
      </div>
    </body>
    </html>';


  try {
    $mail->send();
    echo "<script>
    Swal.fire({
        title: 'De aanmelding is verstuurd!',
        text: 'We nemen binnenkort contact met je op.',
        icon: 'success',
        confirmButtonColor: '#13acc8',
        confirmButtonText: 'Top!'
        });
        </script>";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
  

}


?>