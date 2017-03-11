<?php 
$front_matter = array(
    'www' => '.',
    'page_title' => 'Archivists'
);

//Session Data
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();

if (isset($_POST['username'], $_POST['email'])) {
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
}
include $front_matter['www'] . "/snippets/head.php";

?>
<table style="width:100%">
    <tr>
        <td></td>
        <td><h1 align="center">My Archive</h1></td>
        <td><p align="right"><i>Hello, <?php echo $_SESSION['name']; ?>!</i></p></td>
    </tr>
    <tr>
        <td>
            <div align="center">
                <a href="<?php echo $front_matter['www']; ?>/my_family.php">
                    <img src="<?php echo $front_matter['www']; ?>/images/myfamily.png" width="260" height="260">
                    </img>
                </a>
            </div>
        </td>
        <td>
            <div align="center">
                <a href="<?php echo $front_matter['www']; ?>/my_events.php">
                    <img src="<?php echo $front_matter['www']; ?>/images/myevents.png" width="260" height="260">
                    </img>
                </a>
            <div>
        </td>
        <td>
            <div align="center">
                <a href="<?php echo $front_matter['www']; ?>/family_events.php">
                    <img src="<?php echo $front_matter['www']; ?>/images/familyevents.png" width="260" height="260">
                    </img>
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td><p align="center"><b>My Family</b></p></td>
        <td><p align="center"><b>My Events</b></p></td>
        <td><p align="center"><b>Family Events</b></p></td>
    </tr>
</table>
</html>