<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Абизгильдина Диана</title>
</head>
<body>
	<?php
	include ("checkSession.php");
	include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8'); // Тип кодировки
	 // Строка запроса на добавление записи в таблицу:
	 $sql_add = "INSERT INTO student SET FIO='" . $_GET['fio']
	."', fac='".$_GET['fac']."', gr='"
	.$_GET['gr']."', no_zk='".$_GET['zk'].
	"', phone='".$_GET['ph']. "'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Спасибо, вы добавлены в базу данных.";
	 print "<p><a href=\"indexLR5.php\"> Вернуться к списку
	пользователей </a>"; }
	 else { print "Ошибка сохранения. <a href=\"indexLR5.php\">
	Вернуться к списку пользователей </a>"; }
	?>
</body>
</html>