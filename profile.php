<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');
session_start();
//echo $_SESSION['a'];
// we need to check if the input in the form textfields are not empty
if(empty($_SESSION['a'])){
    header("Location: signin.php");
}
else{
  
  //write the quiery to check if this username and password exists in our database
  $n = $_SESSION['a'];
  //echo $n ;
  $sql = "SELECT * FROM users WHERE email = '$n'";

  //execute the query
  $result = mysqli_query($conn, $sql);

  //check if it returns an empty set

  if(mysqli_num_rows($result) != 0){
    while($m = mysqli_fetch_array($result)){

    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>IMDB</title>
  </head>
  <body>
    <nav>
      <div class="navbar">
        <a href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>

        <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <div class="dropdown">
          <button class="dropbtn">
            <i class="fa fa-fw fa-user"></i>
            User
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a class="active" href="profile.php">Edit Profile</a>
            <a href="index.php">Logout</a>
          </div>
        </div>
        <div class="search-container">
          <form action="#">
            <input
              class="searchbar_nav"
              type="text"
              placeholder="Search.."
              name="search"
            />
            <button class="search_nav" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </nav>
    <section class="content-inside">
      <h2>Update user information</h2>
      <div class="mid-container">
        <form action="update.php" class="form_design" method="post">
          <div class="container">
            <label for="name">Name : </label><br />
            <input
              class="one"
              type="text"
              id="name"
              name="name"
              value="<?php echo $m[0]; ?>"
              required
            /><br />
            <label for="email">Email : </label><br />
            <input
              class="one"
              type="email"
              id="email"
              name="email"
              value="<?php echo $m[1]; ?>"
              required
            /><br />
            <label for="password">Password : </label><br />
            <input
              class="one"
              type="password"
              id="password"
              name="password"
              value="<?php echo $m[2]; ?>"
              required
            /><br />
            <label for="date">Birthdate : </label><br />
            <input
              class="one"
              type="date"
              id="date"
              name="date"
              value="<?php echo $m[3]; ?>"
              required
            /><br />
            <label for="name">Interest : </label><br />
            <input
              class="one"
              type="text"
              id="interest"
              name="interest"
              value="<?php echo $m[4]; ?>"
            /><br />
            <button class="button_form_update" type="submit" value="submit">
              Update</button
            ><br />
            <button class="button_form_delete" type="submit" formaction="delete.php" value="submit">
              Delete</button
            ><br />
            Already registered?? <span class="psw"><a href="index.php">Login</a></span>
          </div>
        </form>
      </div>
    </section>
<?php 
}
  


}
} 
?> 
    <footer>
      <p>This is a footer</p>
    </footer>
  </body>
</html>
