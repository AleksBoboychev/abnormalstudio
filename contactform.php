<?php

if(isset($_POST['submit']))
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 $mailTo = "aleksboboychev@gmail.com";
 $headers = "От: ".$email;
 $txt = "Получили сте имейл от ".$name.".\n\n".$message;      

 mail($mailTo, $subject, $txt, $headers);
 header("Location: index.php?mailsend");
?>