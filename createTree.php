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
<form align="right" action="<?php echo $front_matter['www']; ?>/createTree2.php">
    <input type="Submit" value="Use Alternative Design ->">
</form>
<br>
<form id="designOne" align="left" method="post" action="<?php echo $front_matter['www']; ?>/my_family.php">
    <input type="hidden" name="designOneSubmission">
    <label id="lb-my-great-grandfather" for="my-great-grandfather">My great grandfather</label>
    <input type="text" name="my-great-grandfather" id="my-great-grandfather">
    <button id="btn-my-great-grandfather" onClick="remove('my-great-grandfather')">Remove</button>
    <br id="br-my-great-grandfather">
    <label id="lb-my-great-grandmother" for="my-great-grandmother">My great grandmother</label>
    <input type="text" name="my-great-grandmother" id="my-great-grandmother">
    <button id="btn-my-great-grandmother" onClick="remove('my-great-grandmother')">Remove</button>
    <br id="br-my-great-grandmother">
    <label id="lb-my-grandfather" for="my-grandfather">My grandfather</label>
    <input type="text" name="my-grandfather" id="my-grandfather">
    <button id="btn-my-grandfather" onClick="remove('my-grandfather')">Remove</button>
    <br id="br-my-grandfather">
    <label id="lb-my-grandmother" for="my-grandmother">My grandmother</label>
    <input type="text" name="my-grandmother" id="my-grandmother">
    <button id="btn-my-grandmother" onClick="remove('my-grandmother')">Remove</button>
    <br id="br-my-grandmother">
    <label id="lb-my-father" for="my-father">My father</label>
    <input type="text" name="my-father" id="my-father">
    <button id="btn-my-father" onClick="remove('my-father')">Remove</button>
    <br id="br-my-father">
    <label id="lb-my-mother" for="my-mother">My mother</label>
    <input type="text" name="my-mother" id="my-mother">
    <button id="btn-my-mother" onClick="remove('my-mother')">Remove</button>
    <br id="br-my-mother">
    <label id="lb-my-brother" for="my-brother">My brother</label>
    <input type="text" name="my-brother" id="my-brother">
    <button id="btn-my-brother" onClick="remove('my-brother')">Remove</button>
    <br id="br-my-brother">
    <label id="lb-my-sister" for="my-sister">My sister</label>
    <input type="text" name="my-sister" id="my-sister">
    <button id="btn-my-sister" onClick="remove('my-sister')">Remove</button>
    <br id="br-my-sister">
    <br id="sv-br"><input id="dOneSub" type="Submit" value="Save">
</form>

<button id="add-btn">Add More</button>

<div id="addMoreForm" >
    <label for="relation">Relation of person to you: </label>
    <input type="text" id="relation">
    <button onClick="addAnother()">Add</button>
</div>

<script type="text/javascript">

$('#addMoreForm').hide();

$('#add-btn').click(function() {
    $('#addMoreForm').show();
});

function remove(id) {
    $('#' + id).remove();
    $('#lb-' + id).remove();
    $('#btn-' + id).remove();
    $('#br-' + id).remove();    
}

function addAnother() {
    var rel = $('#relation').val();
    var formatRel = rel.toLowerCase();
    formatRel = formatRel.replace(/ /g, "-");
    console.log(formatRel);
    
    $('#dOneSub').remove();
    $('#sv-br').remove();
    $('#relation').val("");
    $('<label id="lb-'+formatRel+'" for="'+formatRel+'">'+rel+'</label>').appendTo('#designOne');
    $('<input type="text" name="'+formatRel+'" id="'+formatRel+'">').appendTo('#designOne');
    $('<button id='+formatRel+' onClick="remove(\''+formatRel+'\')">Remove</button>').appendTo('#designOne');
    $('<br id="'+formatRel+'"><br>').appendTo('#designOne');
    $('<br id="sv-br">').appendTo('#designOne');
    $('<input id="dOneSub" type="Submit" value="Save">').appendTo('#designOne');
    
    $('#addMoreForm').hide();
}

</script>
</html>