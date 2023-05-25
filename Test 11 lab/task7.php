<?php
session_start();
$ansver6=$_POST['answer6'];
$_SESSION['answer6']= $ansver6;
?>
<p>Вопрос7:</p>
<p>if (color === ‘white’ && color === ‘yellow’) В приведенном коде, знак && означает?</p>
<form action="task8.php" method="post">
    <input type="radio" value="1" name="answer7"/>оператор И</br>
    <input type="radio" value="0" name="answer7"/>оператор ИЛИ</br>
    <input type="radio" value="0" name="answer7"/>оператор НЕ</br></br>
    <input type="submit"/>
</form>