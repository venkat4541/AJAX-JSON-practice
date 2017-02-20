<?php
$arr = [];
$arr['first']=$_POST['fname'];
$arr['last']=$_POST['lname'];
$arr['age']=$_POST['age'];
// echo "First Name = ".$arr['first']."<br>";
// echo "Last Name = ".$arr['last']."<br>";
// echo "Age = ".$arr['age']."<br><br>";

$con = new mysqli("localhost","venkekno_admin","@TG7TEr%\$a)y","venkekno_ajax_test");
$sql = "INSERT INTO names (first, last, age) VALUES ('".$arr['first']."','".$arr['last']."','".$arr['age']."')";

if($con->ping()) {
    $arr['connected'] = true;
} else {
    $arr['connected'] = false;
}

if($con->query($sql) === TRUE) {
    $arr['xstatus'] = "Created!";
    $arr['id'] = $con->insert_id;
} else {
    $arr['xstatus'] = "Error!";
    $arr['message'] = $con->error;
}

 echo json_encode($arr);

// $con->close();
?>
