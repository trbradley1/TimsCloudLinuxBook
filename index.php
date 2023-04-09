<!DOCTYPE html>
<html>
<head>
<meta charset = "utf -8">
<title> My PHP Website</title>
</head>
<body>
<h1>Welcome to the cloud</h1>
<form action = "" method = "post">
Your name:
<br>
<input type = "text" name =  "name" size = "30" maxlenght = "30">
</form>
<?php
if (isset($_POST['submit']))
{
$yourName = $_POST['name'];
echo "<p>Hi, $yourName, welcome to my cloud</p>";
}
?>
</body>
</html>
