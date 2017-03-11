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
<h1 align="center">Archivists</h1> <!-- TODO: CENTER -->
<table style="width:100%">
    <tr>
        <td><img src="<?php echo $front_matter['www']; ?>/images/video_u6.jpg"></td>
        <td border="1px">
            <div align="center">
                <h3><b>What is Archivist?</b></h3>
                <p>A place to store family information to share with other family members or the public</p><br>
                <form method="post" action="?">
                    <input type="Submit" value="Sign Up" name="signup">
                    <br>
                    <input type="Submit" value="Login" name="login">
                </form>
            </div>
        </td>
    </tr>
</table>
</body>
</html>