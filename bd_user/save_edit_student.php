<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Абизгильдина Д.Р.</title>
</head>
<body>
	<?php
//a0611466_users wSvgQa5uCTN9U!C a0611466_users
	define ("HOST", "localhost");
	define ("USER", "a0611466_users");
	define ("PASS", "wSvgQa5uCTN9U!C");
	define ("DB", "a0611466_users"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно	подключиться к серверу");
	 $mysqli->query('SET NAMES UTF-8');
	 $zapros="UPDATE student SET FIO='".$_GET['fio'].
	"', fac='".$_GET['fac']."', gr='"
	.$_GET['gr']."', no_zk='".$_GET['zk'].
	"', phone='".$_GET['ph']."' WHERE id_stud="
	.$_GET['id'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="indexLR4.php"> Вернуться к списку
	пользователей </a>'; }
	 else { echo 'Ошибка сохранения. <a href="indexLR4.php">
	Вернуться к списку пользователей</a> '; }
	?>

</body>
</html>