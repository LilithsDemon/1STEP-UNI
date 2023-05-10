<?php

    session_start();

    include "include/_connect.php";

    $currentPart = $_SESSION['CurrentPart'];

    switch($_SESSION['PartType'])
    {
        case 1:
            $sql_select_all_slides_for_slider ="SELECT * FROM `Slides` WHERE `SliderID` = $currentPart;";
            $run = runAndCheckSQL($connect, $sql_select_all_slides_for_slider);
            $x = 0;
            while($row=mysqli_fetch_assoc($run))
            {
                $x++;
                $sql_update = "UPDATE `Slides` SET `SliderID`=$currentPart,`Image`='" . $_POST['image' . strval($x)] . "',`Title`='" . $_POST['title' . strval($x)] . "',`ButtonText`='" . $_POST['buttonText' . strval($x)] . "',`PageLink`='" . $row['PageLink'] . "' WHERE `SlideID` = " . $row['SlideID'] . ";";
                $test_update = runAndCheckSQL($connect, $sql_update);
                mysqli_fetch_assoc($test_update);   
            }
            break;
        case 2:
            $sql_select_val ="SELECT * FROM `Parts` WHERE `PartID` = $currentPart;";
            $run = runAndCheckSQL($connect, $sql_select_val);
            $currentPart = mysqli_fetch_assoc($run)['PartVal'];
            $sql_update = "UPDATE `FullScreenImage` SET `Image`='" . $_POST['image_link'] . "',`Title`='" . $_POST['title'] . "',`Text`='" . $_POST['text'] . "' WHERE `ImageID` = $currentPart";
            $test_update = runAndCheckSQL($connect, $sql_update);
            $blank = mysqli_fetch_assoc($test_update); 
            break;
        case 3:
            $sql_select_val ="SELECT * FROM `Parts` WHERE `PartID` = $currentPart;";
            $run = runAndCheckSQL($connect, $sql_select_val);
            $currentPart = mysqli_fetch_assoc($run)['PartVal'];
            $sql_update = "UPDATE `BlockInfo` SET `Image`='" . $_POST['image_link'] . "',`Title`='" . $_POST['title'] . "',`Text`='" . $_POST['text'] . "' WHERE `InfoID` = $currentPart";
            $test_update = runAndCheckSQL($connect, $sql_update);
            $blank = mysqli_fetch_assoc($test_update);
            break;
        case 4:
            $sql_select_val ="SELECT * FROM `Parts` WHERE `PartID` = $currentPart;";
            $run = runAndCheckSQL($connect, $sql_select_val);
            $currentPart = mysqli_fetch_assoc($run)['PartVal'];
            $sql_update = "UPDATE `CircleInfo` SET `Image`='" . $_POST['image_link'] . "',`Text`='" . $_POST['text'] . "' WHERE `InfoID` = $currentPart";
            $test_update = runAndCheckSQL($connect, $sql_update);
            $blank = mysqli_fetch_assoc($test_update);
            break;
        case 5:
            $sql_select_val ="SELECT * FROM `Parts` WHERE `PartID` = $currentPart;";
            $run = runAndCheckSQL($connect, $sql_select_val);
            $currentPart = mysqli_fetch_assoc($run)['PartVal'];
            $sql_update = "UPDATE `Titles` SET `Title`='" . $_POST['text'] . "' WHERE `TitleID` = $currentPart";
            $test_update = runAndCheckSQL($connect, $sql_update);
            $blank = mysqli_fetch_assoc($test_update);
            break;

    }
?>