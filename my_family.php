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
$sub = "";
if(isset($_POST['designOneSubmission'])) {
    $sub = "design1";
    $_SESSION['tree'] = array();
    foreach($_POST as $relation => $name) {
        if ($relation != 'designOneSubmission') {
            $_SESSION['tree'][ucfirst(str_replace("-", " ", $relation))] = $name;
        }
    }
}
if(isset($_POST['designTwoSubmission'])) {
    $sub = "design2";
    $_SESSION['tree'] = array();
    $i = true;
    
    unset($_POST['designTwoSubmission']);
    
    $count = 1;
    while ($i == true) {
         if (isset($_POST['group-'.$count])) {
             $_SESSION['tree']['group-'.$count] = array();
         } else {
             $i = false;
         }
         $count++;
    }
    
    foreach ($_POST as $relation => $name) {
        $arr = explode('-', $relation);
        if (count($arr) > 2) {
            if (strpos($relation, 'n') != false) {
              $n = explode('n', $arr[2]);
              $n = $n[1];
              $_SESSION['tree']['group-'.$arr[1]][(string)$n]['name'] = $name;
            } else {
              $n = explode('r', $arr[2]);
              $n = $n[1];
              $_SESSION['tree']['group-'.$arr[1]][(string)$n]['relation'] = $name;
            }
        }
    }       
}
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
        <h3 align="center">My Family</h3>
    </div>

<?php if (!isset($_SESSION['tree'])) { ?>
    <div align="center">
        <p>Your tree is empty</p><br>
        <form action="<?php echo $front_matter['www']; ?>/createTree.php">
            <button type="submit" class="btn btn-primary">CreateTree</button>
        </form>
    </div>
<?php } else { if ($sub == 'design1') { ?>
<table style="width:100%" border="1px">
<?php 
    $i = 0; //Keep track of images needed
    $rows = "";
    $iPath = $front_matter['www']."/images/Littleguy.png";
    $possibleExtra = "";
    foreach($_SESSION['tree'] as $rel => $name) {
        $rows .= "<td><div align='center'>".$rel."<br>".$name."</div></td>";
        $possibleExtra .= "<td><div align='center'>".$rel."<br>".$name."</div></td>";
        $i++;
        if ($i == 5) {
            echo "<tr>";
            for ($a = 0; $a < 5; $a++) {
                echo '<td><div align="center"><a href="' . $front_matter['www'] . '/userpage.php"><img src="'.$iPath.'" width="100" height="100"></img></a></div></td>';
            }
            echo "</tr><tr>";
            echo $rows;
            echo "</tr>";
            $rows = "";
            $possibleExtra = "";
            $i = 0;
        }
    }
    
    if ($i > 0) {
        echo "<tr>";
        for ($a = 0; $a < $i; $a++) {
            echo '<td><div align="center"><a href="' . $front_matter['www'] . '/userpage.php"><img src="'.$iPath.'" width="100" height="100"></img></a></div></td>';
        }
        echo "</tr><tr>";
        echo $possibleExtra;
        echo "</tr>";
        $rows = "";
    }
    
    
?>
</table>
<?php } else { ?> </table> <?php
     $iPath = $front_matter['www']."/images/Littleguy.png";   
    foreach($_SESSION['tree'] as $group => $members) {
        echo '<h4 align="center">' . $_POST[$group] . '</h4>';
        $rows = "";
        $i = 0;
        $possibleExtra = "";
        echo '<table align="center" style="width:100% border="1px">';
        foreach($members as $num => $data) {
            $rows .= '<td><div align="center">' . $data['relation'] . " " . $data['name'] . "</div></td>";
            $possibleExtra .= '<td><div align="center">' . $data['relation'] . " " . $data['name'] . "</div></td>";
            $i++;
            if ($i == 5) {
                echo "<tr>";
                for ($a = 0; $a < 5; $a++) {
                    echo '<td><div align="center"><a href="' . $front_matter['www'] . '/userpage.php"><img src="'.$iPath.'" width="100" height="100"></img></a></div></td>';
                }
                echo "</tr><tr>";
                echo $rows;
                echo "</tr>";
                $rows = "";
                $possibleExtra = "";
                $i = 0;
            }
        }
        
        if ($i > 0) {
            echo "<tr>";
            for ($a = 0; $a < $i; $a++) {
                echo '<td><div align="center"><a href="' . $front_matter['www'] . '/userpage.php"><img src="'.$iPath.'" width="100" height="100"></img></a></div></td>';
            }
            echo "</tr><tr>";
            echo $possibleExtra;
            echo "</tr>";
            $rows = "";
        }
       
        echo '</table>';
        
    }
?>
<?php } ?>
<?php } ?>
<div align="right">
<hr>
      <footer>
        <p>&copy; 2017 CPSC 444, The Archivists</p>
      </footer>
  </div>
</div>
</html>