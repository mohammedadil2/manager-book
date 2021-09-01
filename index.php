<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table border="1" cellpadding="5" cellspacing="5">
  <tr>
    <td>id</td>
    <td>name</td>
    <td>price</td>
    <td>Image</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php do { ?>
  <tr>
    <td><?php echo $row_Recordset1['id']; ?></td>
    <td><?php echo $row_Recordset1['name']; ?></td>
    <td><?php echo $row_Recordset1['price']; ?></td>
    <td><img src="<?php echo $row_Recordset1['Image']; ?>" height="60" width="60"/></td>
    </tr>
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
</body>
</html>