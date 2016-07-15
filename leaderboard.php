<!DOCTYPE html>
<?php
require_once "connection.php";
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scle=1.0">
<link rel="stylesheet" type="text/css" href="tabs.css">
</head>
<body>
<table class="table" cellspacing="0">
<tr class="table-header-row">
<td class="table-header">Rank</td>
<td class="table-header">User Id</td>
<td class="table-header">Name</td>
<td class="table-header">Year</td>
<td class="table-header">Problem1</td>
<td class="table-header">Problem2</td>
<td class="table-header">Problem3</td>
<td class="table-header">Total Score</td>
</tr>
<?php
session_start();
$query=mysqli_query($con,"SELECT uid,name,year,problem1,problem2,problem3,(problem1+problem2+problem3) AS sum FROM users ORDER BY sum DESC");
$i=1;
$previous_rank=1;
$previous_score=0;
while($result=mysqli_fetch_assoc($query))
{
	if($result['sum']<$previous_score)
		$i=++$previous_rank;
	$class='table-row';
	if(isset($_SESSION['uid']))
	if($result['uid']==$_SESSION['uid'])
		$class='current-user';
	if($i==1) $class='winner';
	echo "<tr class=$class>";
	echo "<td> $i </td><td>".$result['uid']."</td><td>".$result['name']."</td><td>".
	$result['year']."</td><td>".$result['problem1']."</td>"."<td>".$result['problem2']."</td>".
	"<td>".$result['problem3']."</td>"."<td>".$result['sum']."</td></tr>";
	$previous_score=$result['sum'];
	//$i++;
}

?>
</table>

