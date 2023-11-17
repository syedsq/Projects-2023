<?php
include_once('../dbConnection.php');

if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stumail']) && isset($_POST['stupass'])){

  $stuname = $_POST['stuname'];
  $stumail = $_POST['stumail'];
  $stupass = $_POST['stupass'];

  // Prepare statement to avoid SQL injection
  $sql = $conn->prepare("INSERT INTO student (stu_name, stu_email, stu_pass) VALUES (?, ?, ?)");
  $sql->bind_param("sss", $stuname, $stumail, $stupass);

  if($sql->execute()){
    echo json_encode("OK");
  } else {
    echo json_encode("Failed");
  }
  $sql->close();
}
?>
