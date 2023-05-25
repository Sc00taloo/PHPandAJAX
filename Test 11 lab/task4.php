<?php
session_start();
$ansver3=$_POST['answer3'];
$_SESSION['answer3']= $ansver3;
?>
<p>Вопрос4:</p>
<p> Язык Java является подвидом языка JavaScript - верно? (напишите 'да' или 'нет')</p>
<form action="task5.php" method="post">
    <input type="text" name="answer4"/></br></br>
    <input type="submit"/>
</form>