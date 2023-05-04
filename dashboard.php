<?php

session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['username'] = "Blank";
}

if (!isset($_SESSION['auth']))
{
	$_SESSION['auth'] = false;
	header("Location: login.php");
	die();
}

include("./php/include/_connect.php");

if (isset($_GET['username']))
{
    if($username == "Blank")
    {
        header("Location: login.php");
    }
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>1 S T E P | Admin Dashboard</title>
	<link rel="stylesheet" href="css/mainStyle.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<script src="https://kit.fontawesome.com/a29f3f1e4b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
</head>
<body>
    <section class="section dashboard">
        <div class="navigation">
            <span class="material-symbols-outlined is-active">apps</span>
            <span class="material-symbols-outlined">edit</span>
            <span class="material-symbols-outlined">account_circle</span>
        </div>

        <div class="frame">

        </div>
    </section>
</body>