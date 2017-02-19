<?php
$first=$_POST['fname'];
$last=$_POST['lname'];
$age=$_POST['age'];
echo "First Name = ".$first;
echo "<br>";
echo "Last Name = ".$last;
echo "<br>";
echo "Age = ".$age;
echo "<br>";

$con = new mysqli("localhost","venkekno_admin","@TG7TEr%\$a)y");
$sql = "SELECT * FROM 'names'";

if($con->ping()) {
  echo "connected";
} else {
  echo "not connected";
}
?>
