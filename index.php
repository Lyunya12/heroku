<?php

include 'post.php';



if (!empty($_SESSION["userName"])) {
    echo "Привет," $_SESSION["userName"];
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: /exit.php');
} else {
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: /form.xtml');
}