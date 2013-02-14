<?php
$data = $_POST['data'];
error_log("from loadfile.php ".$data);

/*echo"
	<textarea rows='3' cols='10' name ='tagData'>$data</textarea>
	<button id='save'>Save</button><button id='cancel'>Cancel</button>
	";*/
echo"
 	<textarea rows='3' cols='10' name ='tagData' id ='tagData'>$data</textarea>
	";
?>

