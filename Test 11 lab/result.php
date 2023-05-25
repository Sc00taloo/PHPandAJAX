<?php
session_start();
$ansver10=$_POST['answer10'];
$_SESSION['answer10']= $ansver10;
$ot = 0;
if ($_SESSION['answer1'] == 1){$ot++;}
if ($_SESSION['answer2'] == 1){$ot++;}
if ($_SESSION['answer3'] == 1){$ot++;}
if ($_SESSION['answer4'] == "да"){$ot++;}
if ($_SESSION['answer5'] == 1){$ot++;}
if ($_SESSION['answer6'] == 1){$ot++;}
if ($_SESSION['answer7'] == 1){$ot++;}
if ($_SESSION['answer8'] == 1){$ot++;}
if ($_SESSION['answer9'] == 1){$ot++;}
if ($_SESSION['answer10'] == 1){$ot++;}

if ($ot <=4 ){
    $oc = 2;
} elseif ($ot > 4 && $ot <=6){
    $oc = 3;
} elseif ($ot > 6 && $ot <=8){
    $oc = 4;
} else {
    $oc = 5;
}
session_destroy();
?>
<p>Результат</p>
<p>Правильных ответов: <?php echo $ot; ?> из 10</p>
<p>Ваша оценка: <?php echo $oc; ?></p>
<form action="task1.php" method="post">
    <p>Есди хотите пройти заново тест, нажмите на кнопку</p>
    <button>Заново</button>
</form>