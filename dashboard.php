<?php

session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['username'] = "Blank";
}

if (!isset($_SESSION['auth']))
{
	$_SESSION['auth'] = false;
	header("Location: index.php");
}

if ($_SESSION['auth'] == false)
{
	header("Location: index.php");
}

include("./php/include/_connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/dashboard.css">
    
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>1 S T E P | Admin Dashboard</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src= <?php echo '"https://proficon.stablenetwork.uk/api/initials/' . $_SESSION['username'] . '.svg"' ?> alt="Initials Profile Icon" />
                </span>

                <div class="text logo-text">
                    <span class="name"><?php echo $_SESSION['username'] ?></span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <button class="dash_btn" onclick="switchPanel(0)">
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-home-alt icon' ></i>
                                <span class="text nav-text">Dashboard</span>
                            </a>
                        </li>
                    </button>

                    <button class="dash_btn" onclick="switchPanel(1)">
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-edit-alt icon' ></i>
                                <span class="text nav-text">Edit</span>
                            </a>
                        </li>
                    </button>

                    <button class="dash_btn" onclick="switchPanel(2)">
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-bell icon'></i>
                                <span class="text nav-text">Notifications</span>
                            </a>
                        </li>
                    </button>

                    <button class="dash_btn" onclick="switchPanel(3)">
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-pie-chart-alt icon' ></i>
                                <span class="text nav-text">Analytics</span>
                            </a>
                        </li>
                    </button>

                    <button class="dash_btn" onclick="switchPanel(4)">
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-glasses-alt icon' ></i>
                                <span class="text nav-text">Live View</span>
                            </a>
                        </li>
                    </button>

                </ul>
            </div>

            <div class="bottom-content">
                <li class=''>
                    <a href="../php/logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>

    </nav>

    <section class="home">
        <iframe id="frame" src="dashboard_home.php"></iframe>
    </section>

    <script src="js/dashboard.js"></script>

</body>
</html>