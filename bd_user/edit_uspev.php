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
    $rows=$mysqli->query("SELECT data, stud_id, sub_id, ocenka  FROM uspev WHERE id_uspev=".$_GET['id_uspev']);

    while ($st = mysqli_fetch_array($rows)) {
    $id=$_GET['id_uspev'];
    $data = $st['data'];
    $stud_id = $st['stud_id'];
    $sub_id = $st['sub_id'];
    $ocenka = $st['ocenka'];
    }
        print "<form action='save_edit_uspev.php?id_uspev=".$_GET['id_uspev']. " method='get'>";
        print "Дата: <input name='data' type='date'
        value='".$data."'>";
        print "<br>Номер студента: <input name='stud_id' size='20' type='text'
        value='".$stud_id."'>";
        print "<br>Номер предмета: <input name='sub_id' size='20' type='text'
        value='".$sub_id."'>";
        print "<br>Оценка: <input name='ocenka' size='20' type='text'
        value='".$ocenka."'>";
 
        
        print "<input type='hidden' name='id' value='".$id."'> <br>";
        print "<input type='submit' name='' value='Сохранить'>";
        print "</form>";
	print "<p><a href=\"indexLR4.php\"> Вернуться к списку
	пользователей </a>";
	?>
</body>
</html>