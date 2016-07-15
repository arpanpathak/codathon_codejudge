<!DOCTYPE html>
<html>
<?php
session_start();
require_once "connection.php";
if(isset($_SESSION['uid']))
    header("Location: test.php");
if(isset($_POST['login']))
{
    $uid=$_POST['uid'];
    $password=$_POST['password'];
    if($ex=mysqli_query($con,"SELECT * from users WHERE uid='$uid' and password='$password'"))
    {
        $result=mysqli_fetch_assoc($ex);
        if((!empty($result)) && ($result['attempt']==0))
        {
            session_start();
            $_SESSION['uid']=$uid;
            $_SESSION['problem1']=0;
            $_SESSION['problem2']=0;
            $_SESSION['problem3']=0;
            $_SESSION['flag1']=false;
            $_SESSION['flag2']=false;
            $_SESSION['flag3']=false;
            $_SESSION['remaining']=3600; 
            $_SESSION['active']=false;
            $_SESSION['setno']=rand(1,1);
            //mysqli_query($con,"UPDATE users SET attempt='1' WHERE uid='$uid'");
            mkdir("submissions/".$uid);           
            header("Location: test.php");
        }
        else if($result['attempt']==1)
            echo "<script> alert('Sorry!! you have already attempted the contest \\nPlease wait for the results!!'); </script>";
        else 
            echo "<script> alert('Wrong user id or password \\n Please check again!!'); </script>";
    }
}
if(isset($_POST['register']))
{
    $uid=$_POST['uid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $year=$_POST['year'];
    $crn=$_POST['crn'];
    $password=$_POST['password'];
    if(mysqli_query($con,"INSERT INTO users values('$uid','$name','$email','$year','$crn','$password',0,0,0,0)"))
        echo "<script>alert('Successfully registered!!'); </script>";
    else
        echo "<script>alert('Already registered..'); </script>";
}
?>
<head>
    <title>Codathon 2k17</title>

    <meta name="viewport" content="height=device-height,initial-scale=1.0">
    <script src="apstyle/js/apstyle.js"></script>
    <link rel="stylesheet" type="text/css" href="apstyle/css/main.css">
    <link rel="stylesheet" href="tabs.css">
    <nav class="nav">
        <button type="button" class="fold" data-fold="#topBar"></button>
        <div class="folded" id="topBar">
        <ul >
             <li><img src="extra/logo.png" style='height: 50px;'></li>
            <li class="dropdown">
                <span style="color: white;"><a href="#" class="dropbtn" style="color: white;">Other Events</a></span>
                <div class="dropdown-content">
                    <span>Tech OOP</span>
                    <span>Codathon</span>
                    <span>Debate</span>
                </div>
            </li>
        </ul>
        </div>
    </nav>
    <style>
    .ip {
        border: 1.5px solid red important;
    }
    </style>
</head>
<body  style="background-size: cover;" background="coding.jpg">
    <div class="row" style="margin-top: 100px;">
        <div class="col4"></div>
        <div class="col4">
            <div class="panel" style="box-shadow: 1px 0px 10px black;">
                <center><h1>LOGIN!</h1></center>
                <form method="POST" action="index.php">
                <input type="text" name="uid" placeholder="user id">
                <input type="password" name="password" placeholder="password">
                <a href="#" style="float: right;  color: blue;" onclick="$('#signup').fadeIn('slow');">?Register here</a>
                <button type="submit" class="reddish fulldock" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
<div class="popup" id="signup">
        <div class="popup-content" style="margin-top: 5%;">
            <div class="popup-head" style="background-color: #333; color: white;">
                <span class="popup-close"><b>X</b></span>
                <center><h3>Register For CODATHON 2k17</h3></center>
            </div>
            <div class="popup-body" style="margin-top: 10px;">
                <form method="POST" action="index.php" style="margin-top: 50px;">
                <center>
                <table>
                <tr> <td>User Id</td>
                <td>
                <input type="text" class="ip" name="uid" placeholder="User Id" required style="width: 250px;">
                </td>
                </tr>
                <tr> <td>User Name</td>
                <td>
                <input type="text" name="name" placeholder="User Name" required>
                </td>
                </tr>
                <tr><td>Email Id</td>
                <td>
                <input type="email" name="email" placeholder="Email Id" required>
                </td>
                </tr>
                <tr><td>Year</td>
                <td>
                <input type="text" name="year" placeholder="Year" required>
                </td>
                </tr>
                <tr><td>Class Roll No</td>
                <td>
                <input type="text" name="crn" placeholder="Class Roll No" required>
                </td></tr>
                <tr><td>Password</td><td>
                <input type="password" name="password" placeholder="Password" required>
                </td>
                </tr>
                </table>
                </center>
            </div>
            <div class="popup-footer">
                <button type="submit" name="register" style="background-color: green;
box-shadow: 1px 0px 10px 1px darkgreen inset; float: right; width: 100%;">Click here to register</button>
                </form>
            </div>
        </div>
</div>

</body>
</html>