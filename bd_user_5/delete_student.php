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
	 $mysqli->query('SET NAMES UTF-8');
	 $zapros="DELETE FROM student WHERE id_stud=" . $_GET['id_stud'];
	 $mysqli->query($zapros);
	 header("Location: indexLR5.php");
	 exit;
	?>

</body>
</html>