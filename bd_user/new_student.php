<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Абизгильдина Диана</title>
</head>
<body>
	<H2>Добавление студентов</H2>
	<form action="save_new_student.php" metod="get">
	 ФИО <input name="fio" size="50" type="text">
	<br>Факультет <input name="fac" size="10" type="text">
	<br>Группа <input name="gr" size="3" type="text">
	<br>Номер зачетной книжки <input name="zk" size="6" type="text">
	<br>Телефон <input name="ph" size="11" type="text">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="indexLR4.php"> Вернуться к списку студентов </a>
</body>
</html>