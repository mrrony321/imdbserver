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
        <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>

        <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a class="active" href="#"><i class="fa fa-fw fa-user"></i>Register</a>
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
      <h2>User Regestration</h2>
      <div class="container">
      <form action="insert_users.php" method="POST">
       
        <label for="name">Name : </label><br />
        <input class="one" type="text" id="name" name="name" required /><br />
        <label for="email">Email : </label><br />
        <input class="one" type="email" id="email" name="email" required /><br />
        <label for="password">Password : </label><br />
        <input class="one" type="password" id="password" name="password" required /><br />
        <label for="date">Birthdate : </label><br />
        <input class="one" type="date" id="date" name="date" required /><br />
        <label for="name">Interest : </label><br />
        <input class="one" type="text" id="interest" name="interest" /><br />
        <button class="button_form" type="submit" value="submit">Submit</button>
      </form>
      <br />
      Already regestered??<span class="psw"><a href="index.php">Sign in</a></span>
      </div>
    </section>
    <footer>
      <p>This is a footer</p>
    </footer>
  </body>
</html>
