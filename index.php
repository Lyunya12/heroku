<?php

session_start();

if (!empty($_SESSION["userName"])) {
    echo "Привет," . $_SESSION["userName"];
	echo "<a href='exit.php'>Exit </a>";
} else {
	include './form.html';
}