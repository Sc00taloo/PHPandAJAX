<?
session_start();
    if ($_POST['Submit']) {
        if (($_POST['user_name'] == "cleo") && ($_POST['user_pass'] == "password")) {
            $_SESSION['logged_user'] = $_POST['user_name'];
            header("Location: secretplace.php");
            exit;
        } else {
            $_SESSION['count'] ++;
            header("refresh:1; url=index.php");
        }
        if($_SESSION['count'] >= 3){
            header("refresh:1; url=indexwait.php");
        }
    }

?>
<html>
<head>
    <title>Вводи пароль</title>
    <meta charset="utf-8"/>
</head>
<body>
<p> Вы ввели неверный пароль! </p>
</body>
</html>
