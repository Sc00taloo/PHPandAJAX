<?php
session_start();
$ansver8=$_POST['answer8'];
$_SESSION['answer8']= $ansver8;
?>
<p>Вопрос9:</p>
<p>С помощью какого элемента можно разместить ссылку в JavaScript?</p>
<form action="task10.php" method="post">
    <input type="radio" value="0" name="answer9"/>noscript</br>
    <input type="radio" value="0" name="answer9"/>script</br>
    <input type="radio" value="1" name="answer9"/>a href</br></br>
    <input type="submit"/>
</form>