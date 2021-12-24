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
	 //$mysqli->query('SET NAMES UTF-8');
    $rows=$mysqli->query("SELECT FIO,fac,gr,no_zk,phone FROM student WHERE id_stud=".$_GET['id_stud']);

    while ($st = mysqli_fetch_array($rows)) {
    $id=$_GET['id_stud'];
    $fio = $st['FIO'];
    $fac = $st['fac'];
    $gr = $st['gr'];
    $zk = $st['no_zk'];
    $ph = $st['phone'];
    }
        print "<form action='save_edit_student.php?id_stud=".$_GET['id_stud']. " method='get'>";
        print "ФИО: <input name='fio' size='50' type='text'
        value='".$fio."'>";
        print "<br>Факультет: <input name='fac' size='20' type='text'
        value='".$fac."'>";
        print "<br>Группа: <input name='gr' size='20' type='text'
        value='".$gr."'>";
        print "<br>Номер зачетной книжки: <input name='zk' size='30' type='text'
        value='".$zk."'>";
        print "<br>Телефон: <input name='ph' size='30' type='text'
        value='".$ph."'>";
        
        print "<input type='hidden' name='id' value='".$id."'> <br>";
        print "<input type='submit' name='' value='Сохранить'>";
        print "</form>";
	print "<p><a href=\"indexLR5.php\"> Вернуться к списку
	пользователей </a>";
	?>
</body>
</html>