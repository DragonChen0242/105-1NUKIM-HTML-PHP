<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>

<?php

$number=$_GET["number"];
echo '<center>';
echo "你要上傳的檔案數量為:".$number."個<br>";

echo '<form  method="post" enctype="multipart/form-data"><br>';

for ($i=0;$i<$number;$i++) {
	echo '<center>';	
	echo "請選擇檔案".'<input type="file" name="upload[]">'."<br>";			
}
echo '<center>';
echo '<input type="submit" name="Upload "value="上傳"><br>';

?>


<?php
$number=$_GET["number"];

	if(isset($_FILES["upload"])){

		for($i=0;$i<$number;$i++){
			echo $_FILES["upload"]["name"][$i]."<br/>";    //name代表檔案名稱
			echo $_FILES["upload"]["tmp_name"][$i]."<br/>";//
			echo $_FILES["upload"]["size"][$i]."<br/>";
			echo $_FILES["upload"]["type"][$i]."<br/>";

			//$a=pathinfo($_FILES["upload"]["name"]);
			//$t=time();

			$name=$_FILES["upload"]["name"][$i];
			$tmp=$_FILES["upload"]["tmp_name"][$i];
			if(!empty($name)){
				copy($tmp,$name);
				echo "檔案上傳成功<br>";
				unlink($tmp);
			}else{
				echo "檔案上傳失敗";
			}
		}
	}
?>





</body>
</html>