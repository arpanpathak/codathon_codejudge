<?php
require_once "connection.php";
session_start();
$setno=$_SESSION['setno'];
$path=$_SESSION['uid'];
require_once "timelimit.php";
/* For Problem1 */
if(isset($_POST['code1']))
{
	if($_POST['lan1']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem1.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code1']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		$output2=$result['output'];
		$output1=shell_exec('compiler\cpp\bin\g++ '.$filename." -o ".$executable_path."problem1.exe");
		$output=shell_exec("submissions\\".$path."\problem1.exe<submissions/".$path."/input.txt");
		
		//$output=file_get_contents("submissions\\".$path."\output1.txt");

		echo "<b>Output (Problem1 : ) </b> <br />";
		if(@!unlink($executable_path."problem1.exe"))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo $output1;
		}
		else
		{
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b>";
			echo "<b>Your Output</b>: <br/>";
			echo nl2br($output);
				if(!$_SESSION['flag1'])
				{
				$_SESSION['problem1']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem1'];
				mysqli_query($con,"UPDATE users SET problem1='$score' WHERE uid='$path'");
				$_SESSION['flag1']=true;
				}
			}
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				echo "<b>Your Output</b>: <br/>";
				echo nl2br(rtrim($output));
				echo "<br /><b>Expected Output</b>: <br/>";
				echo nl2br(rtrim($output2));
			}
		}
	}
	else
		if($_POST['lan1']=="java")
		{
			$filename="submissions/".$path."/problem1.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code1']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		//$fp=fopen("solved/output.txt","r");
		//$output2=fread($fp, filesize("solved/output.txt"));
		$output2=$result['output'];
		//fclose($fp);
		$output1=shell_exec('compiler\java\bin\javac submissions\\'.$path.'\problem1.java');
		$output=execute("java -classpath submissions/".$path." problem1<submissions/".$path."/input.txt");
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		echo "<b>Output (Problem1 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem1.class'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo nl2br($output1);
		}
		else
		{
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b>";
			echo "<b>Your Output</b>: <br/>";
			echo nl2br($output);
				if(!$_SESSION['flag1'])
				{
				$_SESSION['problem1']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem1'];
				mysqli_query($con,"UPDATE users SET problem1='$score' WHERE uid='$path'");
				$_SESSION['flag1']=true;
				}
			}
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				echo "<b>Your Output</b>: <br/>";
				echo nl2br($output);
				echo "<br /><b>Expected Output</b>: <br/>";
				echo nl2br($output2);
			}
		}
		}
	
}
/*end of problem 1*/

/*for problem 2 */


?>
<!-- ______________________________________________________________________________ -->
<?php

if(isset($_POST['code2']))
{
	if($_POST['lan2']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem2.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code2']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='m'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		// $fp=fopen("solved/output.txt","r");
		// $output2=fread($fp, filesize("solved/output.txt"));
		$output2=($result['output']);
		//fclose($fp);
		$output1=shell_exec("g++ ".$filename." -o ".$executable_path."problem2.out");
		$output=execute("submissions/".$path."/problem2.out<"."submissions/".$path."/input.txt");
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		echo "<b>Output (Problem2 : ) </b> <br />";
		if(@!unlink($executable_path."problem2.exe"))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo $output1;
		}
		else
		{
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b>";
			echo "<b>Your Output</b>: <br/>";
			echo nl2br($output);
				if(!$_SESSION['flag2'])
				{
				$_SESSION['problem2']=700+($_SESSION['remaining']/60);
				$score=$_SESSION['problem2'];
				mysqli_query($con,"UPDATE users SET problem2='$score' WHERE uid='$path'");
				$_SESSION['flag2']=true;
				}
			}
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				echo "<b>Your Output</b>: <br/>";
				echo nl2br($output);
				echo "<br /><b>Expected Output</b>: <br/>";
				echo nl2br($output2);
			}
		}
	}
	else
		if($_POST['lan2']=="java")
		{
			$filename="submissions/".$path."/problem2.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code2']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='m'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		//$fp=fopen("solved/output.txt","r");
		//$output2=fread($fp, filesize("solved/output.txt"));
		$output2=$result['output'];
		//fclose($fp);
		$output1=shell_exec('compiler\java\bin\javac submissions\\'.$path.'\problem2.java');
		$output=shell_exec('java -classpath submissions/'.$path.'/ problem2<submissions/'.$path.'/input.txt');
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		echo "<b>Output (Problem 2 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem2.class'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo $output1;
		}
		else
		{
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b>";
			echo "<b>Your Output</b>: <br/>";
			echo nl2br($output);
				if(!$_SESSION['flag2'])
				{
				$_SESSION['problem2']=700+($_SESSION['remaining']/60);
				$score=$_SESSION['problem2'];
				mysqli_query($con,"UPDATE users SET problem2='$score' WHERE uid='$path'");
				$_SESSION['flag2']=true;
				}
			}
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				echo "<b>Your Output</b>: <br/>";
				echo nl2br($output);
				echo "<br /><b>Expected Output</b>: <br/>";
				echo nl2br($output2);
			}
		}
		}
	
}

?>