<?php

session_start();

unset($_SESSION["userName"]);

header("HTTP/1.1 301 Moved Permanently");
header('Location: /index.php');