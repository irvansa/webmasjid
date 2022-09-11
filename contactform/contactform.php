	
<?php
	
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['message'];
    $subject = $_POST['subject'];
    
    $email_pengelola = 'irfansetoaji@gmail.com'; // sesuai dengan email pengelola
    $from = "admin@masjidassalam.or.id";
    
    $message = "<html>
           <head>
            <title>Pesan website</title>
           </head>
           <body>";
    $message .= "<p>Pesan Dari: $name</p>
                    <p>Subject: $subject</p>";
    $message .= "<dl>
            <dt>Email:</dt>
            <dd>$email</dd>
            <dt>Message:</dt>
            <dd>$text</dd>
        </dl>";
    $message .= "</body></html>";
    //setting header
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From:" . $from;
    //email ke pengelola
    mail($email_pengelola, "Pesan baru dari ".$name, $message, $headers);
    if(mail($email_pengelola, "Pesan baru dari ".$name, $message, $headers)) {
        echo "<p>Terimakasih telah menghubungi kami, $name</p> <p>Kami akan segera membalas pesan anda.</p>";
    } else {
        echo '<p>Pesan anda tidak terkirim.</p>';
    }
   //email ke pengguna
   $text = "Terima kasih atas pesan Anda di masjidassalam.or.id Kami akan segera menghubungi Anda. Masjid As-Salam Sutopadan";
   mail($email,"Terima kasih atas pesan Anda", $text);
   ?>