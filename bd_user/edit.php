<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Абизгильдина Диана</title>
</head>
<body>
	<?php
	// подключение к базе данных:
	define ("HOST", "localhost");
	define ("USER", "a0611466_users");
	define ("PASS", "wSvgQa5uCTN9U!C");
	define ("DB", "a0611466_users"); // установление соединения с сервером
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
	 //$mysqli->query('SET NAMES UTF-8');
    $rows=$mysqli->query("SELECT user_name, user_login, user_password, user_e_mail, user_info FROM user WHERE id_user=".$_GET['id_user']);

    while ($st = mysqli_fetch_array($rows)) {
    $id=$_GET['id_user'];
    $name = $st['user_name'];
    $login = $st['user_login'];
    $password = $st['user_password'];
    $e_mail = $st['user_e_mail'];
    $info = $st['user_info'];
    }
        print "<form action='save_edit.php?id_user=".$_GET['id_user']. " method='get'>";
        print "Имя: <input name='name' size='50' type='text'
        value='".$name."'>";
        print "<br>Логин: <input name='login' size='20' type='text'
        value='".$login."'>";
        print "<br>Пароль: <input name='password' size='20' type='text'
        value='".$password."'>";
        print "<br>Е-mail: <input name='e_mail' size='30' type='text'
        value='".$e_mail."'>";
        print "<br>Информация: <textarea name='info' rows='4'
        cols='40'>".$info."</textarea>";
        print "<input type='hidden' name='id' value='".$id."'> <br>";
        print "<input type='submit' name='' value='Сохранить'>";
        print "</form>";
	print "<p><a href=\"indexLR4.php\"> Вернуться к списку
	пользователей </a>";
	?>
</body>
</html>