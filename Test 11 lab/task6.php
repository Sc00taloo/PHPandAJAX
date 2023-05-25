<?php
session_start();
$ansver5=$_POST['answer5'];
$_SESSION['answer5']= $ansver5;
?>
<p>Вопрос6:</p>
<p>Какие конструкции для циклов есть в javascript?</p>
<form action="task7.php" method="post">
    <input type="radio" value="0" name="answer6"/>только одна: for</br>
    <input type="radio" value="1" name="answer6"/>три: for, while и do…while.</br>
    <input type="radio" value="0" name="answer6"/>только две: for и while.</br></br>
    <input type="submit"/>
</form>