<?php
header("Content-Type:text/html;charset=utf-8");

$username=$_GET["username"];
echo "名字:".$username."<br/>";

$gender=$_GET["gender"];
echo "性別為:".$gender."<br/>";

$birthday=$_GET["birthday"];
echo "生日為:".$birthday."<br/>";

$number=$_GET["number"];
echo "身分證字號為:".$number."<br/>";

$address=$_GET["address"];
echo "地址為:".$address."<br/>";

$phonenumber=$_GET["phonenumber"];
echo "住家電話:".$phonenumber."<br/>";

$cellphone=$_GET["cellphonenumber"];
echo "手機電話:".$cellphone."<br/>";

$mail=$_GET["mail"];
echo "電子信箱:".$mail."<br/>";
?>