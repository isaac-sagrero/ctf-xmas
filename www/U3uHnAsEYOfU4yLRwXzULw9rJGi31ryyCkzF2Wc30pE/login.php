<?php
session_start();
$pws = $_POST['pws'];
if ($pws == "123456") {
//if ($pws == "123") {
	$_SESSION['login'] = "OK";
	header("location:scoreboard.php");
	//

} else {
	unset($_SESSION['login']);

}
?>
<html>
	<form action='login.php' METHOD='POST'>
		La pass: <input type='password' name='pws'><br>
		<input type='submit' value='Dale'>
		<input type='hidden' name='intento' value='ok'>
	</form>
</html>