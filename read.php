<!DOCTYPE html>
<body bgcolor="black" style="color: white; border: 6px double white; height:100%; background: url('hacker.gif'); background-size: cover;">
<style>
.btn
    {
        border-radius: 6px;
        padding-left: 2px;
        padding-right: 2px;
        padding-top: 2px;
        padding-bottom: 3px;

        background-color: darkblue;
        color: white;
        font-size: 18pt;
        border: 1px solid white;
        margin-left: 5%;
        margin-bottom: 10px;
        margin-top: 5px;
        
    }
.btn:hover
    {
        background-color: red;
        cursor: pointer;
    }
</style>
<script>
function isChecked()
    {
        if(document.getElementById('check').value==true)
            alert('fuck');
        else
            alert('please accept terms and conditions');
    }
</script>
<?php
    
    function displayRules()
    {
        echo "<h1><u><font color='yellow'>Rules of Codathon 2k16</u></h1></font>";
    }
    if(isset($_POST['userid']) && isset($_POST['password']))
    {
        displayRules();
        if($_POST['userid']==='admin' and $_POST['password']==='admin')
        {
            $fp=fopen('rules.txt','r');
            echo " <h4><font face='comic sans ms'>";
            while(!feof($fp))
            {
                $line=fgets($fp);
                echo $line."<br>";
            }
            fclose($fp);
            echo "<input type='checkbox' id='check'>Accept Terms and Conditions";
            echo "<input type='button' value='Start' class='btn' onclick='isChecked();'>";
        }
        else
            echo "<font color='red'> <h2> Wrong credentials! </h2>";
    }
    else
    {
        echo "<h1><font color='crimson'>Access Denied! </font></h1>";
    }
?>
</body>