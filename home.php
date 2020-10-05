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
        <a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>

        <a href="home.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <div class="dropdown">
          <button class="dropbtn">
            <i class="fa fa-fw fa-user"></i>
            User
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="profile.php">Edit Profile</a>
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
      <h2>Welcome to the IMDb server</h2>
      <div class="mid-container"></div>
    </section>
    <footer>
      <p>This is a footer</p>
    </footer>
  </body>
</html>
