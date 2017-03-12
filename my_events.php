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

    </div>
<div class="container">
    <div align="right">
                <form action="<?php echo $front_matter['www']; ?>/home.php">
                    <button type="submit" class="btn btn-primary">Back To Dashboard</button>
                </form>
             <div align="right">
        
            <h3 align="center">My Timeline</h3>
         
<?php if (!isset($_POST['events'])) { ?>
    
            <div align="center">
                <p>Your timeline is empty</p><br>
                <form action="<?php echo $front_matter['www']; ?>/createevent.php">
                     <button type="submit" class="btn btn-primary">Create Event</button>
                </form>
            </div>
        
<?php } else { ?>
    
            <div align="center">
                <img src="<?php echo $front_matter['www']; ?>/images/Events.png"></img><br>
                <form action="<?php echo $front_matter['www']; ?>/createevent.php">
                   <button type="submit" class="btn btn-primary">Create Event</button>
                </form>
            </div>
       
<?php } ?>

 <hr>



      <footer>
        <p>&copy; 2017 CPSC 444, The Archivists</p>
      </footer>
    </div>
</div>
</div>