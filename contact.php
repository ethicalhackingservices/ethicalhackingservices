<form action="./"  method="post">
  <span>First name: </span>
  <input id="fname" type="text">
  <span>Last name: </span>
  <input id="lname" type="text">
  <span>Email: </span>
  <input id="em" type="email">
  <span>Subject: </span>
  <input id="sub" type="text">
  <span>Message: </span>
  <input id="msg" type="text">
  <input value="Submit" type="submit">
</form>

<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $em = $_POST['email'];
  $sub = $_POST['sub'];
  $msg = $_POST['msg'];

  $to = "0467967@schoolsnet.act.edu.au";
  $subj = "$sub";
  $mess = "$msg";
  $headers = "From: $em" . "\r\n"
  $fn = "$fname"
  $ln = "$lname"

  mail($to,$sub,$mess,$headers,$fn,$ln);
?>
