<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['date']) && isset($_POST['interest'])){
  //write the quiery to check if this username and password exists in our database
  $n = $_POST['name'];
  $e = $_POST['email'];
  $p = $_POST['password'];
  $d = $_POST['date'];
  $i = $_POST['interest'];
  $sql = "INSERT INTO users VALUES ('$n', '$e', '$p', '$d', '$i')";

  //execute the query
  $result = mysqli_query($conn, $sql);

  //check if it returns an empty set

  if(mysqli_affected_rows($conn)){
    //echo "Congratulation!!!Successfully inserted";
    header("Location: index.php");
  }
  else{
    //echo "OPPS!!!! insertion failed";
    header("Location: signup.php");
  }

}
?>