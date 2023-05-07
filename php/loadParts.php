<?php
function loadSlider($sliderID, $connect)
{

    $sql_part_data = "SELECT COUNT(SlideID) AS count FROM `Slides` WHERE `SliderID` = " . $sliderID . ";";
    $data = runAndCheckSQL($connect, $sql_part_data);
    $slideCount = mysqli_fetch_assoc($data)['count'];

    $sql_slide_data = "SELECT `Slides`.`Title`, `Slides`.`ButtonText`, `Pages`.`PageLink` FROM `Slides`
    LEFT JOIN `Pages` ON `Pages`.`PageID` = `Slides`.`PageLink`
    WHERE `Slides`.`SliderID` = " . $sliderID . ";";

    $all_slide_data = runAndCheckSQL($connect, $sql_slide_data);

    ?>
    <div class="slider">
            <?php
            for($i = 0; $i < $slideCount; $i++)
            {
                $slide_data = mysqli_fetch_assoc($all_slide_data);
            ?>
			<div class=<?php
            if($i == 0) 
            {
                echo '"slider__slide' . $sliderID .' slider__slide slider__slide--active" ';
			} else
            {
                echo '"slider__slide' . $sliderID . ' slider__slide"';
            }
            ?>
            data-slide=<?php echo '"' . strval($i + 1) . '"'?> >
                <div class="slider__wrap">
					<div class="slider__back"></div>
				</div>
				<div class="slider__inner">
					<div class="slider__content">
						<ul>
							<li>
								<h1><?php echo $slide_data['Title'] ;?></h1>
							</li>
							<li><a href=<?php echo '"' . $slide_data['PageLink'] . '"' ?>class="button"><?php echo $slide_data['ButtonText'];?></a></li>
						</ul>
					</div>
					<div class="slider__options">
						<ul>
							<li><a class="go-to-previous"><i class="fa-solid fa-arrow-left"></i></a></li>
							<li><a class="go-to-next"><i class="fa-solid fa-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
            <?php
            }
            ?>
			<div class="slider__indicators"></div>
		</div>
<?php
    $sql_slides_images = "SELECT `Slides`.`Image` FROM `Slides` WHERE `Slides`.`SliderID` = " . $sliderID . "; ";
    $slide_images = runAndCheckSQL($connect, $sql_slides_images);
    ?>
    <style>
        <?php for($i = 0; $i < $slideCount; $i++)
        {
            echo
            ".slider__slide" . $sliderID . ":nth-child(" . strval($i + 1) . ") .slider__back,
            .slider__slide" . $sliderID . ":nth-child(" .strval($i + 1) . ") .slider__inner {
                background-image: url(" . mysqli_fetch_assoc($slide_images)['Image'] . ");
            }";
        }
        ?>
    </style>
<?php
}

function loadFullScreen($screenVal, $connect)
{
    $sql_full_screen = "SELECT `Image`, `Title`, `Text` FROM `FullScreenImage` WHERE `ImageID` = " . $screenVal . ";";
    $all_full_screen_data = runAndCheckSQL($connect, $sql_full_screen);
    $full_screen_data = mysqli_fetch_assoc($all_full_screen_data);
    ?>
    <style>
        <?php echo '.value' . $screenVal . '{ background-image: url(' . $full_screen_data['Image'] . '); 
            background-repeat: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0%;
            background-size: auto 133.3333%;
            background-position: center;
            background-repeat: none;
            box-shadow: 0 3vh 3vh rgba(0, 0, 0, 0);
            padding: 15vh;
            box-sizing: border-box;	 }';?>
    </style>
    <div class=<?php echo '"section top_image value' . $screenVal . '"'?>>
        <div class="background_image">
            <div class="overlay">
    
            </div>
            <div class="top_info">
                <h1><?php echo $full_screen_data['Title'] ?></h1>
                <p><?php echo $full_screen_data['Text'] ?></p>
            </div>
        </div>
    </div>
    <?php   
}

function loadBlockInfo($infoVal, $connect)
{
    $sql_block_info = "SELECT `Title`, `Text`, `Image`, `Odd` FROM `BlockInfo` 
    WHERE `InfoID` = " . $infoVal . ";";
    $all_block_info = runAndCheckSQL($connect, $sql_block_info);
    $info_data = mysqli_fetch_assoc($all_block_info);
?>
    <div class="row">
        <?php
            if($info_data['Odd'] == 0){
                ?>
                <div class="alt_block_info_data">
            <?php
            } else
            {
            ?>
                <div class="alt_block_info_data_odd">
            <?php
            }
            ?>
            <div class="alt_block_info_text">
                <h1><?php echo $info_data['Title'] ;?></h1>
                <p><?php echo $info_data['Text'] ;?></p>
            </div>
            <div class="alt_block_info_img">
                <img src=<?php echo '"' . $info_data['Image'] . '"'; ?>>
            </div>
        </div>
    </div>

<?php
}

function loadCircleInfo($infoVal, $connect)
{
    $sql_circle_info = "SELECT  `Text`, `Image`, `Odd` FROM `CircleInfo` 
    WHERE `InfoID` = " . $infoVal . ";";
    $all_circle_info = runAndCheckSQL($connect, $sql_circle_info);
    $info_data = mysqli_fetch_assoc($all_circle_info);
?>
    <div class="row">
        <?php
            if($info_data['Odd'] == 0){
                ?>
                <div class="alt_circle_info_data">
            <?php
            } else
            {
            ?>
                <div class="alt_circle_info_data_odd">
            <?php
            }
            ?>
            <div class="alt_circle_info_text">
                <p><?php echo $info_data['Text'] ;?></p>
            </div>
            <div class="alt_circle_info_img">
                <img src=<?php echo '"' . $info_data['Image'] . '"'; ?>>
            </div>
        </div>
    </div>

<?php
}

function loadTitle($titleVal, $connect)
{
    $sql_title_info = "SELECT `Title` FROM `Titles` WHERE `TitleID` =" . $titleVal . ";";
    $all_title_info = runAndCheckSQL($connect, $sql_title_info);
    $title_data = mysqli_fetch_assoc($all_title_info);
    ?>
    <div class="row title">
        <h2><?php echo $title_data['Title']; ?></h2>
    </div>
    <?php
}

function loadBalletTimeTable($connect)
{
    $sql_timetable = "SELECT `Working`, `Day`, `Hosts`, `Data` FROM `Ballet_Timetable`; ";
    $run = runAndCheckSQL($connect,$sql_timetable);
    while($row=mysqli_fetch_assoc($run))
    {
        if($row['Working'] == 1)
        {
        ?>
    <div class="ballet_booking">
        <div class="timetable_inner">
            <h3 class="day"><?php echo $row['Day'] ?></h3>
            <h3 class="name"><?php echo $row['Hosts'] ?></h3>
            <p><?php echo $row['Data'] ?></p>
            
        </div>
    </div>
    <?php
        }
    }
}

function loadAbstractTimeTable($connect)
{
    $sql_timetable = "SELECT `Working`, `Day`, `Hosts`, `Data` FROM `Abstract_Timetable`; ";
    $run = runAndCheckSQL($connect,$sql_timetable);
    while($row=mysqli_fetch_assoc($run))
    {
        if($row['Working'] == 1)
        {
        ?>
    <div class="ad_booking">
        <div class="timetable_inner">
            <h3 class="day"><?php echo $row['Day'] ?></h3>
            <h3 class="name"><?php echo $row['Hosts'] ?></h3>
            <p><?php echo $row['Data'] ?></p>
            
        </div>
    </div>
    <?php
        }
    }
}

function loadPage($pageID, $connect)
{
    $sql_page_parts = "SELECT `PartType`, `PartVal`, `PartOrder` FROM `Parts` 
    WHERE `PageID` = " . $pageID . "
    ORDER BY `PartOrder` ASC;";
    $run = runAndCheckSQL($connect, $sql_page_parts);
    while($row=mysqli_fetch_assoc($run))
    {
        switch ($row['PartType']) {
            case 1:
                loadSlider($row['PartVal'], $connect);
                break;
            case 2:
                loadFullScreen($row['PartVal'], $connect);
                break;
            case 3:
                loadBlockInfo($row['PartVal'], $connect);
                break;
            case 4:
                loadCircleInfo($row['PartVal'], $connect);
                break;
            case 5:
                loadTitle($row['PartVal'], $connect);
                break;
        }
    }
}

?>