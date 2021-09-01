<?php ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db("book", mysql_pconnect("localhost","root","1234567890"));
$query_Recordset1 = "SELECT * FROM `data`";
$Recordset1 = mysql_query($query_Recordset1, mysql_pconnect("localhost","root","1234567890")) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="1085" height="308" border="1" cellpadding="5" cellspacing="5">
  <tr>
    <td width="145" bgcolor="#99FF66"><h1><strong>id</strong></h1></td>
    <td width="194" bgcolor="#996633"><h2><strong>name</strong></h2></td>
    <td width="192" bgcolor="#996633"><h2><strong>price</strong></h2></td>
    <td width="285" bgcolor="#666666"><h2><strong>Image</strong></h2></td>
    <td width="118" bgcolor="#99FFFF">&nbsp;</td>
    <td width="210" bgcolor="#99FFFF">&nbsp;</td>
  </tr>
  <?php do { ?>
    <tr>
      <td height="221" bgcolor="#99FF66"><h3><strong><?php echo $row_Recordset1['id']; ?></strong></h3></td>
      <td bgcolor="#996633"><h2><?php echo $row_Recordset1['name']; ?></h2></td>
      <td bgcolor="#996633"><h2><?php echo $row_Recordset1['price']; ?></h2></td>
      
      
      <td bgcolor="#666666"><img src="<?php echo $row_Recordset1['Image']; ?>" height="214" width="285"/></td>
      
      <td bgcolor="#99FFFF"><h1><a href="Updata.php?id=<?php echo $row_Recordset1['id']; ?>=<?php echo $row_Recordset1['id']; ?>"><strong>Update</strong></a></h1></td>
      <td bgcolor="#99FFFF"><h1><a href="del1.php?id=<?php echo $row_Recordset1['id']; ?>=<?php echo $row_Recordset1['id']; ?>"><strong>Delete</strong></a></h1></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
<h1>&nbsp;</h1>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
