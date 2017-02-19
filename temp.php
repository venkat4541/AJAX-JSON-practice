<?php
$first=$_POST['fname'];
$last=$_POST['lname'];
$age=$_POST['age'];
echo "First Name = ".$first."<br>";
echo "Last Name = ".$last."<br>";
echo "Age = ".$age."<br>";

$con = new mysqli("localhost","venkekno_admin","@TG7TEr%\$a)y","venkekno_ajax_test");
$sql = "INSERT INTO names (first, last, age) VALUES ('".$first."','".$last."','".$age."')";

if($con->query($sql) === TRUE) {
  echo "<br>";
  echo "Created entry ".$con->insert_id;
} else {
  echo "Issue creating entry <br>".$con->error;
}

$con->close();
?>
