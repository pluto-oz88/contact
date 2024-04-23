<?php

$impstring = 1;
$firstname = "";
$surname = "";
$company = "";
$email = "";
$subject = "";
$message = "";
$status = "";
$tmessage = "";

$myEmail = "driver@gdrive.au, gdunsby@gmail.com";

if (isset($_POST['sendmail'])) {

    $firstname = $_POST['firstname'];
    if (strlen($firstname) < 1) {
        $impstring = 0;
    }
    //echo ($firstname);
    //echo $impstring;

    $surname = $_POST['surname'];
    if (strlen($surname) < 2) {
        $impstring = 0;
    }
    //echo ($surname);
    //echo $impstring;
    $company = $_POST['company'];
    if (strlen($company) < 2) {
        $impstring = 0;
    }
    //echo ($company);
    //echo $impstring;
    $email = $_POST['email'];
    if (strlen($email) < 9) {
        $impstring = 0;
    }
    //echo ($email);
    //echo $impstring;

    $subject = $_POST['subject'];
    if (strlen($subject) < 1) {
        $impstring = 0;
    }
    //echo ($subject);
    //echo $impstring;

    $message = $_POST['message'];

    if ($impstring == 0) {
        echo '<script type="text/javascript">document.getElementById("status").innerHTML = "";</script>';
        echo "Awaiting form completion";
    } else {

        $tmessage = "From: " . $firstname . " " . $surname . "\r\n";
        $tmessage = $tmessage . "of " . $company . "\r\n";
        $tmessage = $tmessage . "eMail: " . $email . "\r\n";
        $tmessage = $tmessage . "Subject: " . $subject . "\r\n";
        $tmessage = $tmessage . "Message: " . $message . "\r\n";

        if (mail($myEmail, $subject, $tmessage)) {
            echo '<script type="text/javascript">document.getElementById("status").innerHTML = "";</script>';
            echo '<script type="text/javascript">document.getElementById("status").style.backgroundColor = "green";document.getElementById("status").style.color = "white";</script>';
            echo "Contact form sent successfully";
            $impstring = 0;
            $surname = "";
            $company = "";
            $subject = "";
            $message = "";
            $status = "";
            $tmessage = "";

            $subject = "Thankyou for contacting GDriveTesla";
            $tmessage = $firstname . "\r\nYour booking for GDriveTesla is being checked and confirmation will be sent asap. If your enquiry is urgent please call +61404047416\r\n\r\n
            Best Regards GDrive";

            mail($email, $subject, $tmessage);
        } else {
            echo '<script type="text/javascript">document.getElementById("status").innerHTML = "";</script>';
            echo "Mail not delivered";
        }
    }
}
