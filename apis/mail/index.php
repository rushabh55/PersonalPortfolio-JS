<?php
function  mail($to, $subject, $message, $sender, $ApiKey){
    if($ApiKey === "Rush")
    {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
        $headers .= $sender;  
        $resp = mail($to, $subject, $message, $headers);
        echo $resp;
    }
 else {
     $message .= "This is a fake email generated by Rushabh's Emailing server! ";
    }
      $resp = mail($to, $subject, $message, $headers);
      echo $resp;  
}
if($_POST['To'] && $_POST['Subject'] && $_POST['Message'] && $_POST['Sender'] && $_POST['ApiKey'])
    mail($_POST['To'], $_POST['Subject'], $_POST['Message'], $_POST['Sender'], $_POST['ApiKey'])
?>