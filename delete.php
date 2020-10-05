<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');
session_start();

if(empty($_SESSION['a'])){
    header("Location: signin.php");
}
else{
  if(isset($_POST['email'])){
    //write the quiery to check if this username and password exists in our database
    
    
    $u = $_SESSION['a'];
  
    $sql = "DELETE FROM users WHERE email ='$u'";
  
  
    if(mysqli_query($conn, $sql)){
      //echo "Congratulation!!!Successfully updated";
      header("Location: index.php");
    }
    else{
      
      header("Location: profile.php");
      echo "OPPS!!!! Delete failed";
    }

  }
}

?>