<?php
    function showPartTable($pageID, $connect)
    {

    $sql = "SELECT PartType, PartVal, PartOrder FROM `Parts` WHERE PageID = " . $pageID . " ORDER BY PartOrder ASC;";
    $run = runAndCheckSQL($connect,$sql);
?>
<table class="table table-striped table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Part Type</th>
            <th scope="col">Part Data</th>
            <th scope="col">Part Order</th>
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
        </tr>
    <?php
    }
    $x++;
    ?>
    </table>
<?php
    }
?>