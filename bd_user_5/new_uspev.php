<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Абизгильдина Диана</title>
</head>
<body>
	<H2>Добавление в зачетную ведомость</H2>
	<form action="save_new_uspev.php" metod="get">
	Дата <input name="data" type="date">
	<br>Номер студента <input name="stud_id" size="10" type="text">
	<br>Номер предмета <input name="sub_id" size="10" type="text">
	<br>Оценка <input name="ocenka" size="10" type="text">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="indexLR5.php"> Вернуться к списку студентов </a>
</body>
</html>