<?php
session_start();
if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
}
if(!isset($_SESSION['flag'])){
    $_SESSION['flag'] = true;
}
if($_SESSION['count'] >= 3){
    header("Refresh:10");
    unset($_SESSION['count']);
    echo '<p style="color: red">Ваши попытки исчерпаны, подождите минуту (10 секунд)</p>';
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
