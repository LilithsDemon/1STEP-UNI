<?php

    session_start();

    include "include/_connect.php";

    include "graphs.php";

    if (isset($_GET['partID']))
    {
        $sql = "SELECT * FROM `Parts` WHERE `partID` = " . $_GET['partID'] . ";";
        $run = runAndCheckSQL($connect, $sql);
        $all_data = mysqli_fetch_assoc($run);

        $_SESSION['CurrentPart'] = $_GET['partID'];
        $_SESSION['PartType'] = $all_data['PartType'];

    }
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/edit_page.css" />
        <link rel="stylesheet" href="../css/inner_dashboard.css" />
        <link rel="stylesheet" href="../css/dashboard.css" />
        <script src="https://kit.fontawesome.com/a29f3f1e4b.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet' />
    </head>
    <body>
        <?php
        if($all_data['PartType'] != 1 and !(isset($_GET['slide'])))
        {
            ?>
        <form action="./save.php" method="post">
            <?php
                if($all_data['PartType'] == 2 or $all_data['PartType'] == 3)
                {
                    switch($all_data['PartType'])
                    {
                        case 2: 
                            $sql_part_data = "SELECT * FROM `FullScreenImage` WHERE `ImageID` =" . $all_data['PartVal'] . ";";
                            break;
                        case 3:
                            $sql_part_data = "SELECT * FROM `BlockInfo` WHERE `InfoID` = " . $all_data['PartVal'] . ";";
                            break;
                    }
                    $val = runAndCheckSQL($connect, $sql_part_data);
                    $data = mysqli_fetch_assoc($val);
                    ?>
                    <label for="title">Title</label><br>
                    <input type="textarea" id="title" name="title" value=<?php echo '"' . $data['Title'] . '"'?>><br>
                    <label for="text">Text</label><br>
                    <input type="textarea" id="text" name="text" value=<?php echo '"' . $data['Text'] . '"'?>><br>
                    <label for="image_link">Image Link</label><br>
                    <input type="textarea" id="image_link" name="image_link" value=<?php echo '"' . $data['Image'] . '"'?>><br>
                    <label for="reverse_button">Reversed</label><br>
                    <?php
                    if($data['Odd'] == 1)
                    {
                        $val = "checked";
                    }
                    else
                    {
                        $val = "";
                    }
                    ?>
                    <input type="checkbox" id="reverse_button" name="reverse_button" <?php echo '' . $val . ''?>><br>
                    <?php
                }
                elseif ($all_data['PartType'] == 4)
                {
                    $sql_part_data = "SELECT * FROM `CircleInfo` WHERE `InfoID` =" . $all_data['PartVal'] . ";";
                    $val = runAndCheckSQL($connect, $sql_part_data);
                    $data = mysqli_fetch_assoc($val);
                    ?>
                    <label for="text">Text</label><br>
                    <input type="text" id="text" name="text" value=<?php echo '"' . $data['Text'] . '"'?>><br>
                    <label for="image_link">Image Link</label><br>
                    <input type="text" id="image_link" name="image_link" value=<?php echo '"' . $data['Image'] . '"'?>><br>
                    <?php
                }
                elseif ($all_data['PartType'] == 5)
                {
                    $sql_part_data = "SELECT * FROM `Titles` WHERE `TitleID` =" . $all_data['PartVal'] . ";";
                    $val = runAndCheckSQL($connect, $sql_part_data);
                    $data = mysqli_fetch_assoc($val);
                    ?>
                    <label for="text">Text</label><br>
                    <input type="text" id="text" name="text" value=<?php echo '"' . $data['Title'] . '"'?>><br>
                    <?php
                }
                ?>
                <input id="submit" type="submit" value="Save">
            <?php
        }
        elseif(!(isset($_GET['slide'])))
        {
            showSlideData($_GET['partID'], $connect);
        }
        ?>
        
        </form>
    </body>
</html>