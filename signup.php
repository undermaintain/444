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

<h1 align="center">Sign up for an Archivist Account</h1>
<br>
<form align="center" method="post" action="<?php echo $front_matter['www']; ?>/home.php">
    <label for="email">Email: </label>
    <br>
    <input type="text" id="email" name="email">
    <label for="username">Username: </label>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password: </label>
    <input type="text" id="password">
    <br>
    <input type="Submit" name="login" value="Sign up">
</form>
</html>