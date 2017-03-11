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
<div align="right">
    <form action="<?php echo $front_matter['www']; ?>/home.php">
        <input type="Submit" value="Back to Dashboard">
    </form>
</div>
<table border="1px">
    <tr>
        <td>Albert Zimmer</td>
        <td>Information</td>
    </tr>
    <tr>
        <td><img src="<?php echo $front_matter['www']; ?>/images/Littleguy.png"></img></td>
        <td>Age: 82<br>Relation to you: Grandfather</td>
    </tr>
    <tr colspan="2">
        <td>
            <div>
                <p>Events Albert was involved in:</p>
                <br>
                <br>
                <p>Files Albert has shared:</p>
            </div>
        </td>
    </tr>

</table>


</html>