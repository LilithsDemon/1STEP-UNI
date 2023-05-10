<?php

    include "/include/_connect.php";

    if (isset($_GET['partID']))
    {
        $partID = $_GET['partID'];
        $sql = "DELETE FROM `Parts` WHERE `PartID` = " . $partID;
        $run = runAndCheckSQL($connect, $sql);
        $delete = mysqli_fetch_assoc($run);
    }
?>