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
<table style="width:100%">
    <tr>
        <td></td>
        <td><h1 align="center">Archivists</h1></td>
        <td>
            <div align="right">
                <form action="<?php echo $front_matter['www']; ?>/home.php">
                    <input type="Submit" value="Back to Dashboard">
                </form>
             <div align="right">
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
            <h3 align="center">My Timeline</h3>
        </td>
        <td>
        </td>
    </tr>   
<?php if (!isset($_POST['events'])) { ?>
    <tr>
        <td>
        </td>
        <td>
            <div align="center">
                <p>Your timeline is empty</p><br>
                <form action="<?php echo $front_matter['www']; ?>/createevent.php">
                    <input type="Submit" value="Create Event">
                </form>
            </div>
        </td>
        <td>
        </td>
    </tr>
    </table>
<?php } else { ?>
    <tr>
        <td>
        </td>
        <td>
            <div align="center">
                <img src="<?php echo $front_matter['www']; ?>/images/Events.png"></img><br>
                <form action="<?php echo $front_matter['www']; ?>/createevent.php">
                    <input type="Submit" value="Create Event">
                </form>
            </div>
        </td>
        <td>
        </td>
    </tr>
    </table>
<?php } ?>