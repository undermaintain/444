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

<h1>Add Event</h1>
<form method="post" action="<?php echo $front_matter['www']; ?>/my_events.php">
    <label for="title">Title: </label>
    <input type="text" name="events" id="title">
    <label for="people">People: </label>
    <input type="text" id="people">
    <label for="date">Date: </label>
    <input type="text" id="date">
    <br>
    <label for="btn-1">Upload Image: </label>
    <button id="btn-1" type="button">Upload</button>
    <br>
    <label for="btn-1">Upload Video: </label>
    <button id="btn-2" type="button">Upload</button>
    <br><br>
    <label for="story">The Story: </label>
    <input type="textarea" id="story">
    <input type="Submit" value="Save">
</form>