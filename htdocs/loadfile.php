<?php
if (move_uploaded_file($_FILES['filename']['tmp_name'], 'temp/'.$_FILES['filename']['name'])){
    if ($_FILES['filename']['size'] > 1024 * 1024 || $_FILES['filename']['type'] != "image/png"){
        echo 'Файл не отправлен!';
        exit();
    } else {
        echo 'Файл отправлен!' . '<br>';
        echo $_FILES['filename']['name'] . '<br>';
    }
}
?>