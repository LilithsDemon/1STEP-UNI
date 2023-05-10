<?php

$subject = $_POST['company_name'];

$msg = $_POST['message'] . " 

by " . $_POST['username'] . " ::: " . $_POST['email'];

mail("liliths.devs@gmail.com",$subject,$msg);


?>