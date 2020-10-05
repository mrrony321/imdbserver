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
        <a href="#"><i class="fa fa-fw fa-home"></i> Home</a>

        <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a class="active" href="#"><i class="fa fa-fw fa-user"></i> Login</a>
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
      <h2>Sign In</h2>
      <div class="mid-container">
        <form action="signin.php" class="form_design" method="post">
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input
              class="one"
              type="text"
              placeholder="Enter Username"
              name="email"
              required
            />

            <label for="psw"><b>Password</b></label>
            <input
              class="one"
              type="password"
              placeholder="Enter Password"
              name="pass"
              required
            />

            <button class="button_form" type="submit">Login</button>
          </div>
          <br />
          <div class="container">
            New here?? <span class="psw"><a href="signup.php">regester</a></span>
          </div>
        </form>
      </div>
    </section>
    <footer>
      <p>This is a footer</p>
    </footer>
  </body>
</html>
