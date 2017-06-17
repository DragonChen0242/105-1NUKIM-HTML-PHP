<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>shoppingcart.php</title>
</head>
<body bgcolor="#FFCC77" text="blue">
<table border="0">
  <tr bgcolor="#CC99FF">
   <td>功能</td><td>編號</td><td>名稱</td>
   <td>價格</td><td>數量</td></tr>
<?php
$flag = false;  $total = 0;

while ( list($arr, $value) = each($_COOKIE) ) {
  
  if ( isset($_COOKIE[$arr]) && 
                   is_array($_COOKIE[$arr]) ) {
     if ($flag) {  
        $flag = false;
        $color="#FF99CC";
     } else {
        $flag = true;
        $color="#99FFC";
     }
     echo "<tr bgcolor='".$color."'><td>";
     echo "<a href='week7_delete.php?Id=".$arr."'>";
     echo "刪除</a></td>";
     $price = 0;
     $quantity = 0; 
     while ( list($name, $value)=each($_COOKIE[$arr])) {
        
        echo "<td>" . $value . "</td>";
        if ($name == "Price")  $price = $value;
        if ($name == "Quantity") $quantity = $value;
     }
     $total += $price * $quantity;  
     echo "</tr>";
  }
}
if ($total != 0) {  
   echo "<tr bgcolor=yellow><td colspan=5 align=right>";
   echo "總金額 = NT$".$total."元</td></tr>";
}
?>
</table>
<hr/> | <a href="week7_catalog.php">商品目錄</a>
| <a href="week7_shoppingcart.php">檢視購物車</a> |
</body>
</html>