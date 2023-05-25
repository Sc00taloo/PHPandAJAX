<?php
session_start();
$ansver4=$_POST['answer4'];
$_SESSION['answer4']= $ansver4;
?>
<p>Вопрос5:</p>
<p>Сколько параметров можно передать функции?</p>
<form action="task6.php" method="post">
    <input type="radio" value="0" name="answer5"/>сколько указано в определении функции или меньше</br>
    <input type="radio" value="1" name="answer5"/>любое количество</br>
    <input type="radio" value="0" name="answer5"/>ровно столько, сколько указано в определении функции</br></br>
    <input type="submit"/>
</form>