<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Абизгильдина Диана</title>
</head>
<body>
	<?php
	//a0611466_users wSvgQa5uCTN9U!C a0611466_users
	define ("HOST", "localhost");
	define ("USER", "a0611466_users");
	define ("PASS", "wSvgQa5uCTN9U!C");
	define ("DB", "a0611466_users"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
	 $mysqli->query('SET NAMES UTF-8'); // Тип кодировки
	 // Строка запроса на добавление записи в таблицу:
	 $sql_add = "INSERT INTO uspev SET data='" . $_GET['data']
	."', stud_id='".$_GET['stud_id']."', sub_id='"
	.$_GET['sub_id']."', ocenka='".$_GET['ocenka']. "'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Спасибо, вы добавлены в базу данных.";
	 print "<p><a href=\"indexLR4.php\"> Вернуться к списку
	пользователей </a>"; }
	 else { print "Ошибка сохранения. <a href=\"indexLR4.php\">
	Вернуться к списку книг </a>"; }
	?>
</body>
</html>