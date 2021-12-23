<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
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
	?>
	
	<h2>Зарегистрированные пользователи:</h2>
    <table border="1">
    <tr> 
    <th> Имя </th> <th> E-mail </th> <th> Редактировать </th> <th> Уничтожить </th> </tr>
    <?php
        $result=$mysqli->query("SELECT id_user, user_name, user_e_mail FROM user"); // запрос на выборку сведений о пользователях
        while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
         echo "<tr>";
         echo "<td>" . $row['user_name'] . "</td>";
         echo "<td>" . $row['user_e_mail'] . "</td>";
         echo "<td><a href='edit.php?id_user=" . $row['id_user']
        . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
         echo "<td><a href='delete.php?id_user=" . $row['id_user']
        . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
         echo "</tr>";
        }
        print "</table>";
        $num_rows = mysqli_num_rows($result); // число записей в таблице БД
        print("<P>Всего пользователей: $num_rows </p>");
        ?>
        <p> <a href="new.php"> Добавить пользователя </a>
        
        <br><br>
        <h1> Самостоятельная работа - Вариант №1 </h1>
        	<h2>Студенты:</h2>
    <table border="1">
    <tr> 
    <th> ФИО </th> <th> Факультет </th> <th> Группа </th> <th> Номер зачетной книжки </th> <th>Телефон</th> <th> Редактировать </th> <th> Уничтожить </th> </tr>
    <?php
        $result=$mysqli->query("SELECT id_stud, FIO, fac, gr,no_zk,phone FROM student"); // запрос на выборку сведений о пользователях
        while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
         echo "<tr>";
         echo "<td>" . $row['FIO'] . "</td>";
         echo "<td>" . $row['fac'] . "</td>";
         echo "<td>" . $row['gr'] . "</td>";
         echo "<td>" . $row['no_zk'] . "</td>";
         echo "<td>" . $row['phone'] . "</td>";
         echo "<td><a href='edit_student.php?id_stud=" . $row['id_stud']
        . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
         echo "<td><a href='delete_student.php?id_stud=" . $row['id_stud']
        . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
         echo "</tr>";
        }
        print "</table>";
        $num_rows = mysqli_num_rows($result); // число записей в таблице БД
        print("<P>Всего студентов: $num_rows </p>");
        ?>
        <p> <a href="new_student.php"> Добавить студента </a>
        
    <br><br>
    <h2>Предметы:</h2>
    <table border="1">
    <tr> 
    <th> Название предмета </th> <th> ФИО преподавателя </th> <th> Редактировать </th> <th> Уничтожить </th> </tr>
    <?php
        $result=$mysqli->query("SELECT id_sub, name, prep FROM subject"); // запрос на выборку сведений о пользователях
        while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
         echo "<tr>";
         echo "<td>" . $row['name'] . "</td>";
         echo "<td>" . $row['prep'] . "</td>";
         echo "<td><a href='edit_subject.php?id_sub=" . $row['id_sub']
        . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
         echo "<td><a href='delete_subject.php?id_sub=" . $row['id_sub']
        . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
         echo "</tr>";
        }
        print "</table>";
        $num_rows = mysqli_num_rows($result); // число записей в таблице БД
        print("<P>Всего предметов: $num_rows </p>");
        ?>
        <p> <a href="new_subject.php"> Добавить предмет </a>
        
        
           <br><br>
    <h2>Зачетная ведомость:</h2>
    <table border="1">
    <tr> 
     <th>Дата</th> <th> Cтудент </th> <th> Предмет </th> <th> Оценка </th><th> Редактировать </th> <th> Уничтожить </th> </tr>
    <?php
        $result=$mysqli->query("SELECT id_uspev, data, FIO, name, ocenka FROM uspev, subject, student WHERE id_stud=stud_id and id_sub=sub_id;"); // запрос на выборку сведений о пользователях
        while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
         echo "<tr>";
         echo "<td>" . $row['data'] . "</td>";
         echo "<td>" . $row['FIO'] . "</td>";
         echo "<td>" . $row['name'] . "</td>";
         echo "<td>" . $row['ocenka'] . "</td>";
         echo "<td><a href='edit_uspev.php?id_uspev=" . $row['id_uspev']
        . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
         echo "<td><a href='delete_uspev.php?id_uspev=" . $row['id_uspev']
        . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
         echo "</tr>";
        }
        print "</table>";
        $num_rows = mysqli_num_rows($result); // число записей в таблице БД
        print("<P>Всего записей: $num_rows </p>");
        ?>
        <p> <a href="new_uspev.php"> Добавить в зачетную ведомость </a>
        <br>
        <h2> Задание 5.2 </h2>
        <p> <a href="gen_pdf.php"> Генерация в pdf </a>
        <p> <a href="gen_xls.php"> Генерация в xls </a>
        
</body>
</html>