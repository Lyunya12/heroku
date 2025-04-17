<?php

session_start();



if (empty($_POST['userName'])) {
  header("HTTP/1.1 301 Moved Permanently");
  header('Location: /index.php');
} else {
  $_SESSION["userName"];
  header("HTTP/1.1 301 Moved Permanently");
  header('Location: /index.php');
  }

