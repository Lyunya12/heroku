<?php

include 'post.php';

<!DOCTYPE html>
<html>

<body>

  <h1>Форма обратной связи</h1>

  <meta name="author" content="Анна Сорокина" />

  <form enctype="multipart/form-data" action="post.php" method="POST">

    <label>
      <p>Введите Ваше имя</p>
      <input name="userName" type="text" placeholder="Имя" />
    </label>

    <button type="submit">Отправить</button>
    <button type="submit">Удалить</button>

  </form>
</body>

</html>

if (empty($_SESSION["userName"])) {
    echo "Привет";
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: /exit.php');
} else {
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: /index.php');
}