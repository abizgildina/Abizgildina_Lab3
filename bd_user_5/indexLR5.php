<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<title>Абизгильдина Диана</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
	<?php
	include ("checkSession.php");
	include ("connectBD.php");
	?>
	<h2>СТУДЕНТЫ</h2>
	<table border="1" >
	
	 <tr id="table1"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_stud, FIO, fac, gr, no_zk,phone", from: "student", zagl: "<tr>  <th> id </th><th> ФИО </th> <th> Факультет </th><th> Группа </th><th> Номер зачетки </th> <th>Телефон</th><th> Редактировать </th> <th> Уничтожить </th> </tr>",file:"_student"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table1").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php 
	print "</table>";
	 ?>
	<p> <a href="new_student.php"> Добавить студента </a>
		<br>
	<h2>ПРЕДМЕТЫ</h2>
	<table border="1">
	<tr id="table2"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_sub, name, prep", from: "subject", zagl: "<tr>  <th> id </th> <th> Название предмета </th> <th> ФИО преподавателя </th> <th>Редактировать </th><th> Уничтожить </th></tr>",file:"_subject"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table2").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php
	print "</table>";
	?>
	<p> <a href="new_subject.php"> Добавить предмет </a>
		<br>
	<h2>ЗАЧЕТНАЯ ВЕДОМОСТЬ</h2>

	<table border="1">
	
	 <tr id="table3"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_uspev,  data, stud_id, sub_id, ocenka", from: "uspev", zagl: "<tr> <th> id </th><th> Дата сдачи зачета </th> <th> id студента </th> <th> id предмета </th> <th> Оценка </th>  <th>Редактировать </th><th> Уничтожить </th></tr>",file:"_uspev"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table3").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php
	print "</table>";
	?>
		<p> <a href="new_uspev.php"> Добавить в зачетную ведомость </a> <br>
	<?php 
	echo "<a href='gen_pdf.php'>Сгенерировать пдф файл</a> <br>
	<a href='gen_xls.php'>Сгенерировать xls файл</a>";
	 ?>

		<div id="table4"></div>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "addUser.php",
		   			type: "POST",
		   			data: ({select: "id_user, username, password, type", from: "users"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table4").html(data);
		   			},
		   		})
		   });

		});

	 </script>
	
		<br>
	</body>
</html>