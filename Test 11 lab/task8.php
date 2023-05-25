<?php
session_start();
$ansver7=$_POST['answer7'];
$_SESSION['answer7']= $ansver7;
?>
<p>Вопрос8:</p>
<p>Какой метод позволяет получить DOM-аттрибут?</p>
<form action="task9.php" method="post">
    <input type="radio" value="1" name="answer8"/>getAttribute(name)</br>
    <input type="radio" value="0" name="answer8"/>hasAttribute(name)</br>
    <input type="radio" value="0" name="answer8"/>setAttribute(name, value)</br></br>
    <input type="submit"/>
</form>