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
	print "<p><a href=\"indexLR5.php\"> Вернуться к списку
	предметов </a>";
	?>
</body>
</html>