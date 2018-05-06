<?php 
require 'core.inc.php';
/*require 'connect.inc.php';*/
if (isset($_COOKIE['fullname'])) {
	header("Location:first.php");
}
else if(loggedin())
{
	$fullname = getuserfield('fullname');
	include 'first.php';
}
else
{
	include 'loginform.inc.php';
}	

?>