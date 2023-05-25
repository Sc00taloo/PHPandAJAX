<?php
session_start();
$ansver2=$_POST['answer2'];
$_SESSION['answer2']= $ansver2;
?>
<p>Вопрос3:</p>
<p>Какая функция позволяет очищать конечную анимацию?</p>
<form action="task4.php" method="post">
    <input type="radio" value="0" name="answer3"/>setInterval</br>
    <input type="radio" value="1" name="answer3"/>clearTimeout</br>
    <input type="radio" value="0" name="answer3"/>setTimeout</br></br>
    <input type="submit"/>
</form>