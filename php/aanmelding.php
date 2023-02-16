<?php
    // PHP Mailer ophalen
    include("./packages/PHPMailer/autoload.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    // Functie om mail op te halen en te versturen
    function sendMail ($post) {
        $teamnaam = $post['teamnaam'];
        $school_opleiding = $post['school-opleiding'];
        $opmerkingen = $post['opmerkingen'];

        $naam_1 = $post['naam_1'];
        $naam_2 = $post['naam_2'] ?? '';
        $naam_3 = $post['naam_3'] ?? '';
        $naam_4 = $post['naam_4'] ?? '';
        $email_1 = $post['email_1'];
        $email_2 = $post['email_2'] ?? '';
        $email_3 = $post['email_3'] ?? '';
        $email_4 = $post['email_4'] ?? '';

        if(!empty($teamnaam) && !empty($school_opleiding) && !empty($opmerkingen)) {
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->IsHTML(true);       
        $mail->Host = "mail.zxcs.nl";
        $mail->SMTPAuth = true;
        $mail->Username = "aletta@pascalservices.nl";
        $mail->Password = "NA3vcv4Ka";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        // $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->From = "aletta@pascalservices.nl";
        $mail->FromName = "Aletta";
        // $mail->SMTPDebug = 2;

        $mail->addAddress("aletta@pascalservices.nl");
        $mail->Subject = "Aletta | Er is een nieuwe aanmelding ingediend";
        $mail->Body = '
        <center>
        <h2>Nieuwe aanmelding van: ' . $teamnaam . '</h2>
        <p><strong>School / Opleiding:</strong> ' . $school_opleiding . '</p>
        <p><strong>Teamleden:</strong></p>
        <ol>
            <li>' . $naam_1 . ' - ' . $email_1 . '</li>
            <li>' . $naam_2 . ' - ' . $email_2 . '</li>
            <li>' . $naam_3 . ' - ' . $email_3 . '</li>
            <li>' . $naam_4 . ' - ' . $email_4 . '</li>
        </ol>
        <p>Eventuele opmerkingen:</p>
        <p> ' . $opmerkingen . '</p>
        </center>
        ';

        try {
            $mail->send();
            echo "
        <script>
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

    } else {
        echo "<script>
        Swal.fire({
            title: 'Nog niet alles is ingevuld',
            text: 'Controleer of alles is ingevuld',
            icon: 'error',
            confirmButtonColor: '#13acc8',
            confirmButtonText: 'Oke!'
            });
            </script>";
    }

    }