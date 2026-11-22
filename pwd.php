<html>
<body>
<form method="post">
Username: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>
Age: <input type="text" name="age"><br><br>
Phone Number: <input type="text" name="pno"><br><br>
<input type="submit" value="Login">
</form>
<?php
if (isset($_POST["username"])&& isset($_POST["password"])&& isset($_POST["age"])&& isset($POST["pno"]))
{
echo "Username: " . $_POST["username"]."<br>";
echo "Password: " . $_POST["password"]."<br>";
echo "Age: " . $_POST["age"]."<br>";
echo "Phone Number: " . $_POST["pno"]."<br>";
}
?>
</body>
</html> 