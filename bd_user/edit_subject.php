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
    $rows=$mysqli->query("SELECT name,prep FROM subject WHERE id_sub=".$_GET['id_sub']);

    while ($st = mysqli_fetch_array($rows)) {
    $id=$_GET['id_sub'];
    $name = $st['name'];
    $prep = $st['prep'];
    }
        print "<form action='save_edit_subject.php?id_sub=".$_GET['id_sub']. " method='get'>";
        print "Название предмета: <input name='name' size='50' type='text'
        value='".$name."'>";
        print "<br>ФИО преподавателя: <input name='prep' size='50' type='text'
        value='".$prep."'>";
        
        print "<input type='hidden' name='id' value='".$id."'> <br>";
        print "<input type='submit' name='' value='Сохранить'>";
        print "</form>";
	print "<p><a href=\"indexLR4.php\"> Вернуться к списку
	предметов </a>";
	?>
</body>
</html>