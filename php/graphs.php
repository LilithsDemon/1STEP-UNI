<?php
    function showPartTable($pageID, $connect)
    {

    $sql = "SELECT * FROM `Parts` WHERE PageID = " . $pageID . " ORDER BY PartOrder ASC;";
    $run = runAndCheckSQL($connect,$sql);
?>
<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Part Type</th>
            <th scope="col">Part Data</th>
            <th scope="col">Part Order</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        
    <?php
    $x = 1;
    while($row=mysqli_fetch_assoc($run))
    {
        $partType = $row['PartType'];
        $partVal = $row['PartVal'];
        $partOrder = $row['PartOrder'];
        $required = $row['Required'];
        $partID = $row['PartID'];

        if($partType == 1)
        {
            $sql_part_data = "SELECT COUNT(SlideID) AS count FROM `Slides` WHERE `SliderID` = " . $partVal . ";";
            $data = runAndCheckSQL($connect, $sql_part_data);
            $partData = mysqli_fetch_assoc($data)['count'] . " Slides";
        }
        elseif($partType == 2)
        {
            $sql_part_data = "SELECT `Title` FROM `FullScreenImage` WHERE `ImageID` = " . $partVal . ";";
            $data = runAndCheckSQL($connect, $sql_part_data);
            $partData = mysqli_fetch_assoc($data)['Title'];
        }
        elseif($partType == 3)
        {
            $sql_part_data = "SELECT `Odd` FROM `BlockInfo` WHERE `InfoID` = " . $partVal . ";";
            $data = runAndCheckSQL($connect, $sql_part_data);
            $data = mysqli_fetch_assoc($data);
            if($data['Odd'] == 1)
            {
                $partData = "Reversed Text and Image";
            }
            else
            {
                $partData = "Text and Image not reversed";
            }
        }
        elseif($partType == 4)
        {
            $sql_part_data = "SELECT `Odd` FROM `CircleInfo` WHERE `InfoID` = " . $partVal . ";";
            $data = runAndCheckSQL($connect, $sql_part_data);
            $data = mysqli_fetch_assoc($data);
            if($data['Odd'] == 1)
            {
                $partData = "Reversed Text and Image";
            }
            else
            {
                $partData = "Text and Image not reversed";
            }
        }
        elseif($partType == 5)
        {
            $sql_part_data = "SELECT `Title` FROM `Titles` WHERE `TitleID` = " . $partVal . ";";
            $data = runAndCheckSQL($connect, $sql_part_data);
            $partData = mysqli_fetch_assoc($data)['Title'];
        }

        $sql_get_part_type = "SELECT `PartName` FROM `PartDescriptions` WHERE `PartVal` = " . $partType . ";";
        $data = runAndCheckSQL($connect, $sql_get_part_type);
        $partNameData = mysqli_fetch_assoc($data)['PartName'];
?>
        <tr class="">
            <td>
                <?php echo $x;?>
            </td>
            <td>
                <?php echo $partNameData;?>
            </td>
            <td>
                <?php echo $partData;?>
            </td>
            <td>
                <?php echo $partOrder;?>
            </td>
            <td>
                <i onclick=<?php echo '"openWindow(\'php/edit.php?partID=' . $partID . '\')"' ;  ?>class="fa-solid fa-pen-to-square"></i>
            </td>
            <td>
                <?php 
                if($required == 1)
                {
                    ?>
                    <i title="This is required cannot delete" class="fa-solid fa-trash no_delete"></i>
                <?php
                }
                else
                {
                    ?>
                    <i onclick=<?php echo '"delete_part(' . $partID . ')"' ?> class="fa-solid fa-trash delete"></i>
                <?php
                }
                ?>
            </td>
        </tr>
    <?php
        $x++;
    }
    ?>
    </table>
<?php
    }



    function showSlideData($partID, $connect)
    {
        $sql_slider_data = "SELECT * FROM `Slides` WHERE `SliderID` = " . $partID;
        $run = runAndCheckSQL($connect, $sql_slider_data);
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Button Text</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            <form action="save.php" method="post">

        <?php
        $x = 1;
        while($row=mysqli_fetch_assoc($run))
        {
            $title = $row['Title'];
            $buttonText = $row['ButtonText'];
            $image = $row['Image'];
            ?>
            <tr class="">
            <td>
                <?php echo $x;?>
            </td>
            <td>
                <input type="textarea" id="title" name=<?php echo '"title' . $x . '"'?> value=<?php echo '"' . $title . '"'?>><br>
            </td>
            <td>
                <input type="textarea" id="buttonText" name=<?php echo '"buttonText' . $x . '"'?> value=<?php echo '"' . $buttonText . '"'?>><br>
            </td>
            <td>
            <input type="textarea" id="image" name=<?php echo '"image' . $x . '"'?> value=<?php echo '"' . $image . '"'?>><br>
            </td>
            <td>
                <?php 
                if($required == 1)
                {
                    ?>
                    <i title="This is required cannot delete" class="fa-solid fa-trash no_delete"></i>
                <?php
                }
                else
                {
                    ?>
                    <i onclick=<?php echo '"php/delete.php?partType=1&partID=' . $row['SliderID'] . '&extra=' . $row['SlideID'] . '"' ?> class="fa-solid fa-trash delete"></i>
                <?php
                }
                ?>
            </td>
        </tr>

        <?php
        $x++;
        }
        ?>
                <input id="submit" type="submit" value="Save">
            </form>
        <?php
    }
?>