<?php
if(isset($_POST['E-mail']) and isset($_POST['Name'])  {
$msg =  "Visitor Name: ".$_POST['Name']."\r\n"."\r\n"."Visitor Email ".$_POST['E-mail']."\r\n";
$to = "info@idsco.com";
  $headers  = "Reply-To: Ldsco Contact Website <info@ldsco.com>\r\n";
  $headers .= "Return-Path: Ldsco Contact Website  <info@ldsco.com>\r\n";
  $headers .= "From: Ldsco Contact Website  <info@ldsco.com>\r\n"; 
  $headers .= "Organization: ldsco\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
mail($to, "New Email from Ldsco Contact Page", $msg,$headers);
} 
?>