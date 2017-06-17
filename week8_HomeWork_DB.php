<?php

$link=@mysqli_connect(
	'localhost',
	'root',
	'q1633218932',
	'homework0413'       //預設資料庫名稱
	);

if($link){
	echo "DB 連結成功<br>";
}else{
	echo "DB 連結失敗<br>";
}

$username=$_POST["username"];
$gender=$_POST["gender"];
$birthday=$_POST["birthday"];
$idnumber=$_POST["idnumber"];
$address=$_POST["address"];
$phonenumber=$_POST["phonenumber"];
$cellphonenumber=$_POST["cellphonenumber"];
$mail=$_POST["mail"];

$sql1="INSERT INTO 0413homework (username,gender,birthday,idnumber,address,phonenumber,cellphonenumber,mail) VALUES ('$username','$gender','$birthday','$idnumber','$address','$phonenumber','$cellphonenumber','$mail')";

$result=mysqli_query($link,$sql1);    //丟資料

$result=mysqli_query($link,"SELECT * FROM 0413homework");

echo "<table border=2>";

while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>";
	echo $row["username"];
	echo "</td><td>";
	echo $row["gender"];
	echo "</td><td>";
	echo $row["birthday"];
	echo "</td><td>";
	echo $row["idnumber"];
	echo "</td><td>";
	echo $row["address"];
	echo "</td><td>";
	echo $row["phonenumber"];
	echo "</td><td>";
	echo $row["cellphonenumber"];
	echo "</td><td>";
	echo $row["mail"];
	//echo "</td><td>";
	//echo "<a href='0413hwdelete.php'>刪除資料</a>";
	//echo "</td><td>";
	//echo "<a href='0413hwupdate.php'>修改資料</a>";
	echo "</td>";
	echo "</tr>";
}
echo "</table>";





mysqli_close($link);
?>