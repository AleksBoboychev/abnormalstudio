<?php

if(isset($_POST['submit'])){
      $Name =$_POST['Name'];
      $Email =$_POST['Email'];
      $Subject =$_POST['Subject'];
      $Message =$_POST['Message'];

      $Email = "aleksboboychev@gmail.com";
      $headers = "From: ".$Email;
      $txt = "You have recieved an e-mail from ".$Name.".\n\n".$message;


      mail($Email,$Subject,$txt,$headers);
}