<?php

$name = $_POST['contact-name'];
$email = $_POST['contact-email'];
$message = $_POST['contact-message'];
$from = $_POST['contact-email'];
$to = 'lifegoon_2006@hotmail.com'; // insert your Mail here
$subject = 'Hello';
$human = $_POST['human'];
$resp = null;
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

if ($human == '20') { // edit the number 20 if you want anoter anti spam question          
    if (mail($to, $subject, $body, $from)) {
        $resp = array(
            "status" => "OK",
            "msg" => "ขอบคุณมากค่ะ ทางเราจะติดต่อกลับในภายหลังนะค่ะ"
        );
    } else {
        $resp = array(
            "status" => "ERROR",
            "msg" => "ขออภัยค่ะ ท่านไม่สามารถส่ง E-Mail ได้ค่ะ"
        );
    }
} else if ($human != '20') {
    $resp = array(
        "status" => "ERROR",
        "msg" => "ขออภัยค่ะ ท่านไม่สามารถส่ง E-Mail ได้ค่ะ"
    );
}

header('Content-Type: application/json');
print json_encode($resp);
?>
