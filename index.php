<?php 
$front_matter = array(
    'www' => '.',
    'page_title' => 'Archivists'
);

if (isset($_POST['signup'])) {
    header('Location: '. $front_matter['www'].'/signup.php');
} elseif (isset($_POST['login'])) {
    header('Location: '. $front_matter['www'].'/login.php');
}

//Session Data
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();

include $front_matter['www'] . "/snippets/head.php";

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $front_matter['page_title']; ?></title>
  <script src="<?php echo $front_matter['www']; ?>/dependencies/jquery-3.1.1.js"></script>
</head>

<body>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1 align="center">Archivists</h1>
      </div>

    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo $front_matter['www']; ?>/images/video_u6.jpg">
        </div>
        <div class="col-md-6">
          <h2>What is Archivists?</h2>
          <p>A place to store family information to share with other family members or the public. </p>
           <form method="post" action="?">
                    <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
                    <button type="submit" class="btn btn-success" name="login">Login</button>
                </form>
       </div>
       </div>

      <hr>



      <footer>
        <p>&copy; 2017 CPSC 444, The Archivists</p>
      </footer>
    </div> <!-- /container -->


  


</body>
</html>