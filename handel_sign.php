<?php
if(isset($_POST['register'])){
$name=$_POST['first-name']." ".$_POST['last-name'];
$email=$_POST['email-mobile'];
$pass=$_POST['up-password'];
$birthdate=$_POST['birth-day']."-".$_POST['birth-month']."-".$_POST['birth-year'];

echo "<pre>
Hello from facebook!
This is your Information: 
   name: $name
   email or mobile: $email
   password: $pass
   birthday date: $birthdate
</pre>";}
else echo"error 404";
?>