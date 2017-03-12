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
        <h1 align="center">Archivists</h1>
      </div>

    

<h1 align="center">Add Event</h1>
<form method="post" action="<?php echo $front_matter['www']; ?>/my_events.php">
    <label for="title">Title: </label>
    <input type="text" name="events" id="title" class="form-control">
    <label for="people">People: </label>
    <input type="text" id="people" class="form-control">
    <label for="date">Date: </label>
    <input type="text" id="date" class="form-control">
    <br>
    <label for="btn-1">Upload Image: </label>
    <button id="btn-1" type="btn btn-primary">Upload</button>
    <br>
    <label for="btn-1">Upload Video: </label>
    <button id="btn-2" type="btn btn-primary">Upload</button>
    <br><br>
    <label for="story">The Story: </label>
    <input type="textarea" id="story" class="form-control">
    <br>
    <button type="submit" class="btn btn-primary" value="Save">Save</button>
</form>
<hr>


<div align="right">
      <footer>
        <p>&copy; 2017 CPSC 444, The Archivists</p>
      </footer>
    </div>
</div>
</div>