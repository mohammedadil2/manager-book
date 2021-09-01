<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><form>
<input type="text" name="na" onKeyUp="loadDoc(this.value)" > </form>
<div id="demo">
  <h2>Let   AJAX   change   this   text</h2></div>
<script>
function loadDoc(str) {
var xhttp= new XMLHttpRequest();
xhttp.onreadystatechange= function() {
if (xhttp.readyState== 4 && xhttp.status== 200) {
document.getElementById("demo").innerHTML= xhttp.responseText;
}
};
xhttp.open("GET", "ajax_info.php?q="+str, true);
xhttp.send();
}
</script>
</html>