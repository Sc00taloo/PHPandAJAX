<?php
session_start();
$ansver1=$_POST['answer1'];
$_SESSION['answer1']= $ansver1;
?>
<p>Вопрос2:</p>
<p>Какое ключевое слово позволяет создавать объекты общего вида:</p>
<form action="task3.php" method="post">
    <input type="radio" value="1" name="answer2"/>object</br>
    <input type="radio" value="0" name="answer2"/>this</br>
    <input type="radio" value="0" name="answer2"/>prototype</br></br>
    <input type="submit"/>
</form>