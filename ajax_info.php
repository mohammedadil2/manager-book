<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
</body>
<?php 
$q=$_GET['q'];
$conn=new mysqli("localhost","root","1234567890","book");
if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT * FROM data WHERE name LIKE '%$q%'";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row=$result->fetch_assoc()) {
echo "<br> no: ".$row["no"]." – Name: ".$row["name"];
}
} else {
echo "NO results";
}
$conn->close();
?>
</html>