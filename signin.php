<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');
session_start();//this method is for data passing through variable
//$u;
//$p;
// we need to check if the input in the form textfields are not empty
if(isset($_POST['email']) && isset($_POST['pass'])){
  //write the quiery to check if this username and password exists in our database
  //global $u, $p;
  $u = $_POST['email'];
  $p = $_POST['pass'];
  $sql = "SELECT * FROM users WHERE email = '$u' AND password = '$p'";
  $_SESSION['a'] = $u;
  //execute the query
  $result = mysqli_query($conn, $sql);

  //check if it returns an empty set

  if(mysqli_num_rows($result) !=0){
    //echo "helooooooo..... let enter";
    header("Location: home.php");
  }
  else{
    //echo "username or password is wrong";
    header("Location: index.php");
  }

}
?>