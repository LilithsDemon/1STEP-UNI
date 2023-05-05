<?php

$username = "ws328700_web_user";
$password = "Urah13^17";
$db_name = "ws328700_web_yr_1";
$server = "plesk.remote.ac";

$connect = mysqli_connect($server, $username, $password, $db_name);

function runAndCheckSQL($connection, $sql){
    $run = mysqli_query($connection, $sql);
    if ($run) {
        if(is_array($run) || is_object($run)){
            return $run;
        }else{
            return true;
        }
    } else {
        die(showError($sql, $connection));
    }
}

function showError($sql, $connection){
    echo "<div class=\"alert alert-danger\"><strong>ERROR!</strong> : " .  $sql . "<br>" . mysqli_error($connection)."</div>";
}
?>

?>