<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>catalog.php</title>
<?php
session_start();  

if ( isset($_POST["Item"]) ) {
   
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];  
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "S001":
         $_SESSION["Name"] = "10吋變形平板";
         $_SESSION["Price"] = 12000;
         break;
      case "S002":
         $_SESSION["Name"] = "15.6吋筆記型電腦";
         $_SESSION["Price"] = 27000;
         break;
      case "S003":
         $_SESSION["Name"] = "iPhone手機";
         $_SESSION["Price"] = 21000;
         break;   
   }  
   header("Location: week7_savecart.php");  
}
?>
</head>
<body bgcolor="#FFCC77" text="blue">
<form action="week7_catalog.php" method="post">
選擇商品: 
<select name="Item">
  <option value="S001">10吋變形平板 - $12000</option>
  <option value="S002">15.6吋筆記型電腦 - $27000</option>
  <option value="S003">iPhone手機 - $21000</option> 
</select>
<input type="text" size="5" name="Quantity" value="1"/>
<input type="submit" value="訂購"/>
</form>
<hr/>| <a href="week7_catalog.php">商品目錄</a>
| <a href="week7_shoppingcart.php">檢視購物車</a> |
</body>
</html>