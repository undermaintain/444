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
<h1 align="center">Login to your Archivist Account</h1>
<br>
<form align="center" method="post" action="<?php echo $front_matter['www']; ?>/home.php">
    <label for="username">Username: </label>
    <input type="text" id="username" name="username">
    <br>
    <input type="hidden" id="email" name="email" value="dummy@gmail.com">
    <label for="username">Password: </label>
    <input type="text" id="password">
    <br>
    <input type="Submit" name="login" value="Login">
    <br>
    <p>Forgot your password? <a href=".">Click here</a></p>
</form>
</html>