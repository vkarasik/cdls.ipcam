<meta http-equiv='refresh' content='3; url=http://cdls.by/ip-camera/'>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/main.min.css">

<?php
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['tel'])) {$tel = $_POST['tel']; if ($tel == '') {unset($tel);}}
if (isset($_POST['body'])) {$body = $_POST['body'];}
 
if (isset($tel) && isset($email)){ //Если эти поля заполнены то..
 
$address = "k.standart@cdls.by"; // куда отправлять
$mes = "ip-камеры"; // тема письма
$send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nEmail:$email\r\nТелефон:$tel\r\nТекст:$body","From: k.standart@cdls.by\r\n"); // тело письма
if ($send == 'true') 
{echo "";} // здесь может быть сообщение пользователю, если его нет, и выводится тело документа
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Заполните пожалуйста все поля отмеченные звездочкой"; //здесь выводится сообщение, если поля email и tel не заполнены
}
?>
<body>
    <h2 style="color: #666; text-align: center;">Спасибо! В ближайшее время с вами свяжется наш менеджер!</h1>
</body>