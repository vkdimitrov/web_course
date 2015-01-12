<?php
var_dump($_REQUEST);die;
if (isset($_REQUEST['firstname']) AND isset($_REQUEST['lastname']))
{
	echo $_REQUEST['firstname'];
	echo "<br>";
	echo $_REQUEST['lastname'];
}
?>

<h1>info.php</h1>