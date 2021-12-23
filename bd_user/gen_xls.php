<?

header('Content-Type: application/vnd.ms-excel; format=attachment;');
header('Content-Disposition: attachment; filename= Лаба4.xls');
header('Expires: Mon, 18 Jul 1998 01:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

define ("HOST", "localhost");
	define ("USER", "a0611466_users");
	define ("PASS", "wSvgQa5uCTN9U!C");
	define ("DB", "a0611466_users"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");

?>

<meta http-equiv="content-type" content="text/html; charset=utf-8">

<table>

<tr>

<th>№ п/п</th>
<th>ФИО студента</th>
<th>Факультет</th> 
<th>Группа</th> 
<th>Номер зачетки</th> 
<th>Дата сдачи зачета</th>
<th>Название предмета</th> 
<th>Оценка</th> 
<th>ФИО преподавателя</th> 
</tr>
<?php 
$result=$mysqli->query("SELECT FIO, fac, gr, no_zk, data, name, ocenka, prep
	FROM student, subject, uspev WHERE stud_id=id_stud and sub_id=id_sub"); 
$count= 0;
while ($row=mysqli_fetch_array($result)) {
	$count++;
	echo  "<tr>";
	echo "<td>". $count ."</td>";
	echo "<td>". $row['FIO'] ."</td>";
	echo  "<td>". $row['fac'] ."</td>";
	echo  "<td>". $row['gr'] ."</td>";
    echo  "<td>". $row['no_zk'] ."</td>";
	echo  "<td>". $row['data'] ."</td>";
    echo "<td>". $row['name'] ."</td>";
    echo  "<td>". $row['ocenka'] ."</td>";
	echo  "<td>". $row['prep'] ."</td>";
	echo  "</tr>";
};
?>
</table>