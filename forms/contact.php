<?php
  $emailto="sundayomoladee11@gmail.com";
  $name= $_POST['name'];
  $email_from= $_POST['email'];
  $subject= $_POST['subject'];
  $body = 'From: '.$name.$_POST['message'];
  if (mail($emailto,$subject,$body,'<From: '.$email_from.'>')){
      echo 'your mail has being sent successfully';
  }
  else{
    echo"error in sending message try again later";
  }
?>
