<?php
session_start();
$ansver9=$_POST['answer9'];
$_SESSION['answer9']= $ansver9;
?>
<p>Вопрос10:</p>
<p>Какой метод позволяет изменять порядок элементов массива на противоположный?</p>
<form action="result.php" method="post">
    <input type="radio" value="0" name="answer10"/>sort()</br>
    <input type="radio" value="0" name="answer10"/>join()</br>
    <input type="radio" value="1" name="answer10"/>reverse()</br></br>
    <input type="submit"/>
</form>