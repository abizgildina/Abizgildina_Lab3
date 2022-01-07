<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Абизгильдина Диана</title>
</head>
<body>
	<H2>Добавление в зачетную ведомость</H2>
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
	 ?>
	<form action="save_new_uspev.php" metod="get">
	Дата <input name="data" type="date">
	<br>Номер студента 
	<?php 
	 $rows=$mysqli->query("SELECT id_stud, FIO FROM student");
	    echo "<select name='stud_id'>";
	 
	    while ($row = mysqli_fetch_array($rows)) {
		    echo "<option value='" . $row['id_stud'] ."'>" . $row['FIO'] ."</option>";
		}
		echo "</select>";
		 ?>
	<br>Номер предмета 
		<?php 
		$rows=$mysqli->query("SELECT id_sub, name FROM subject");
	    echo "<select name='sub_id'>";
		while ($row = mysqli_fetch_array($rows)) {
		    echo "<option value='" . $row['id_sub'] ."'>" . $row['name'] ."</option>";
		}
		echo "</select>";
		 ?>
	<br>Оценка <input name="ocenka" size="10" type="text">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="indexLR4.php"> Вернуться к списку студентов </a>
</body>
</html>