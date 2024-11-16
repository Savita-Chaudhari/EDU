<?php require'connection.php';
  // include 'session.php';
  ?>


<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><span>Edu</span>QR</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->

                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  
                  <?php
session_start();

// Assuming $con is your database connection object
// You need to establish a database connection before running queries
// $con = mysqli_connect("localhost", "username", "password", "database_name");

 if(isset($_SESSION['sess_user'])) {
    // If session variable 'sess_user' is set, user is logged in
    $a = $_SESSION['sess_user'];

    // Query to fetch user details from the database based on email
    $query = "SELECT * FROM signup WHERE email = '".$a."'";
    $run = mysqli_query($con, $query); // Run query
    $value = mysqli_fetch_array($run); // Fetch Array
    
    // Assuming the user's first name is stored in the column 'f_name'
    $username = $value['f_name']; // Retrieve user's first name from the fetched array

    echo '<li class="dropdown">';
    echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $username . '<span class="caret"></span></a>';
    echo '<ul class="dropdown-menu">';
    echo '<li><a href="profile.php">My Profile</a></li>';
    echo '<li><a href="logout.php">Logout</a></li>';
    echo '</ul>';
    echo '</li>';
 } else {
    // If session variable 'sess_user' is not set, user is logged out
    echo '<li><a class="page-scroll" href="login.php">Login</a></li>';
    echo '<li><a class="page-scroll" href="signup.php">Signup</a></li>';
}
?>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
