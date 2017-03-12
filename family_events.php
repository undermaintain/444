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

    


            <div align="right">
                <form action="<?php echo $front_matter['www']; ?>/home.php">
                    <button type="submit" class="btn btn-primary">Back To Dashboard</button>
                </form>
             <div align="right">
        
            <h3 align="center">Family Events</h3>
        
            <div align="center">
                <img src="<?php echo $front_matter['www']; ?>/images/familypic.png"></img><br>
            </div>
       

    <hr>



      <footer>
        <p>&copy; 2017 CPSC 444, The Archivists</p>
      </footer>
    </div>
</div>
    </html>