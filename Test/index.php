<?php
session_start();
if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Вводи пароль</title>
    <meta charset="utf-8"/>
</head>
<body>
<form class="forma" action="authorize.php" method="post">
    Логин: <input type="text" name="user_name"><br>
    Пароль: <input type="password" name="user_pass"><br>
    <input type="submit" name="Submit">
</form>

</body>
</html>
