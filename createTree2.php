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
<form align="right" action="<?php echo $front_matter['www']; ?>/createTree.php">
    <input type="Submit" value="Use Alternative Design ->">
</form>
<br>
<p>Create relation groups like Grandparents, Uncles, Siblings, etc. Then add members to those relation groups.</p>
<form id="designTwo" align="left" method="post" action="<?php echo $front_matter['www']; ?>/my_family.php">
    <input type="hidden" name="designTwoSubmission">
    <div id="group-1-cont">
        <label for="group-1"><strong>Relation Group: </strong></label>
        <input type="text" id="group-1" name="group-1" value="Grandparents"><button onClick="removeGroup('group-1')">Remove Group</button>
        <ul id="group-1-ul">
            <li id="group-1-1">
                <label for="group-1-r1">Relation: </label>
                <input type="text" id="g1-r1" name="group-1-r1" value="Grandma">
                <label for="group-1-n1">Name: </label>
                <input type="text" id="g1-n1" name="group-1-n1" value="Gertrude">
                <button type="button" id="group-1-rmv" onClick="removeMember('group-1', 1)">Remove member</button>
            </li>
            <button type="button" onClick="addMember('group-1')">Add member</button>
        </ul>
    </div>
</form>
<button onClick="addRelationGroup()" style="height:47px">Add Relation Group</button>
<input form="designTwo" type="Submit" value="Create Tree">

<script type="text/javascript">
var MEMCOUNT = {
    'group-1': 1
};

var GROUPCOUNT = 1;

function addMember(ulId) {
    var gName = ulId;
    MEMCOUNT[gName]++;
    var n = MEMCOUNT[gName];
    $('#' + gName +'-rmv').remove();
    $('#' + ulId + '-ul').prepend('<li id="'+ulId+'-'+n+'"><label for="'+gName+'-r'+n+'">Relation: </label><input type="text" id="'+gName+'-r'+n+'" name="'+gName+'-r'+n+'" value="Relation"><label for="'+gName+'-n'+n+'">Name: </label><input type="text" id="'+gName+'-n'+n+'" name="'+gName+'-n'+n+'" value="Name"><button type="button" onClick="removeMember(\''+gName+'\', '+n+')">Remove member</button></li>');
    $('#' + ulId + '-ul').append('<button type="button" id="'+gName+'-rmv" onClick="removeMember(\''+gName+'\', 1)">Remove member</button>');
    
}

function removeMember(gNum, rNum) {
    MEMCOUNT[gNum]--;
    $('#' + gNum + '-' + rNum).remove();
}

function removeGroup(id) {
    GROUPCOUNT--;
    delete MEMCOUNT[id];
    $('#' + id + '-cont').remove();
}

function addRelationGroup() {
    GROUPCOUNT++;
    MEMCOUNT['group-' + GROUPCOUNT] = 0;
    $('#designTwo').append('<div id="group-'+GROUPCOUNT+'-cont"><label for="group-'+GROUPCOUNT+'"><strong>Relation Group: </strong></label><input type="text" id="group-'+GROUPCOUNT+'" name="group-'+GROUPCOUNT+'" value="Enter group name"><button onClick="removeGroup(\'group-'+GROUPCOUNT+'\')">Remove Group</button><ul id="group-'+GROUPCOUNT+'-ul"><button type="button" onClick="addMember(\'group-'+GROUPCOUNT+'\')">Add member</button></ul></div>');
}

</script>
</html>