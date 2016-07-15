<?php

function kill($pid){ 
    return stripos(php_uname('s'), 'win')>-1  ? exec("taskkill /F /T /PID $pid") : exec("kill -9 $pid");
}
function execute($command)
{
$descriptorspec = array(
    0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
    1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
    2 => array("file", "submissions/".$_SESSION['uid']."/error-output.txt", "a+") // stderr is a file to write to
);

$process = proc_open($command,$descriptorspec,$pipes);

$terminate_after = .1; // seconds after process is terminated

usleep($terminate_after*1000000); // wait for 5 seconds

// terminate the process
$pstatus = proc_get_status($process);
$PID = $pstatus['pid'];

kill($PID); // instead of proc_terminate($resource);
$output=rtrim(stream_get_contents($pipes[1]));
fclose($pipes[0]); 
fclose($pipes[1]); 
proc_close($process);

$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
echo 'Process terminated after: '.$time."<br />";
return $output;
}
?>