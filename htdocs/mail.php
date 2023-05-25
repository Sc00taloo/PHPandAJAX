<?php
$to = 'v4nyapop0v12@gmail.com';
$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = "=?utf-8?B?".base64_encode('Вам отправили запрос')."?=";
$message = "Пользователь ".$fio." с email ".$email." и телефоном ".$phone." отправил вам запрос";

$domain = substr(strrchr($email, "@"),1);
$res = getmxrr($domain, $mx_records, $mx_weight);
if ($res == false || 0 == count($mx_records) || (1 == count($mx_records) &&
        ($mx_records[0] == null || $mx_records[0] == "0.0.0.0"))){
    echo 1;
}
else {
    mail ($to, $subject, $message);
}
?>
