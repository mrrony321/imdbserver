<?php
// connect to the database
require_once('DBconnect.php');
session_start();
//echo $_SESSION['a'];
// we need to check if the input in the form textfields are not empty
if(empty($_SESSION['a'])){
    header("Location: signin.php");
}
else{
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['date']) && isset($_POST['interest'])){
    //write the quiery to check if this username and password exists in our database
    $n = $_POST['name'];
    $e = $_POST['email'];
    $p = $_POST['password'];
    $d = $_POST['date'];
    $i = $_POST['interest'];
    
    $u = $_SESSION['a'];
  
    $sql = "UPDATE users SET name='$n',email='$e',password='$p',birth_date='$d',interest='$i' WHERE email ='$u'";
  
  //execute the query
    //$result = mysqli_query($conn, $sql);
    if(mysqli_query($conn, $sql)){
      //echo "Congratulation!!!Successfully updated";
      header("Location: index.php");
    }
    else{
      //echo "OPPS!!!! update failed";
      header("Location: profile.php");
    }

  }
}

?>