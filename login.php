<?php 
$front_matter = array(
    'www' => '.',
    'page_title' => 'Archivists'
);

//Session Data
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();

include $front_matter['www'] . "/snippets/head.php";

?>
    
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1 align="center">Login to your Archivist Account</h1>
      </div>

    </div>

<br>
<div class="container">
<form align="center" method="post" action="<?php echo $front_matter['www']; ?>/home.php" class="navbar-form">
    <label for="username">Username: </label>
    <input type="text" id="username" name="username" class="form-control">
    <br>
    <br>
    <input type="hidden" id="email" name="email" value="dummy@gmail.com">
    <label for="username">Password: </label>
    <input type="text" id="password" class="form-control">
    <br>
    <br>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
    <br>
    <br>
    <p>Forgot your password? <a href=".">Click here</a></p>
</form>
<hr>
<footer>
        <p>&copy; 2017 CPSC 444, The Archivists</p>
      </footer>
    </div> 
</html>