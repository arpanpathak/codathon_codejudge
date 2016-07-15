<?php
session_start();
$extra=$_SESSION['remaining']--;
$_SESSION['active']=true;
echo ceil($_SESSION['problem1']+$_SESSION['problem2']+$_SESSION['problem3']);
if(isset($_POST['destroy']))
{
	echo "<script> alert('You have attempted the contest'); </script>";
	session_destroy();
}

?>
