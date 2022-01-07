<?php 
	require_once('tcpdf_min/tcpdf.php');
	ob_clean();

	define ("HOST", "localhost");
	define ("USER", "a0611466_users");
	define ("PASS", "wSvgQa5uCTN9U!C");
	define ("DB", "a0611466_users"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");

	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
// Устанавливаем информацию о документе
$pdf->SetAuthor('Имя автора');
$pdf->SetTitle('Название документа');
// Устанавливаем данные заголовка по умолчанию
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
// Устанавливаем верхний и нижний колонтитулы
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// Устанавливаем моноширинный шрифт по умолчанию
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// Устанавливаем отступы
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// Устанавливаем автоматические разрывы страниц
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//указываем путь к файлу
$font = 'Roboto-Medium.ttf';
// преобразуем шрифт
$fontname = TCPDF_FONTS::addTTFfont($font, 'TrueTypeUnicode', '', 96);
$pdf->SetFont($fontname, '', 14, '', true);
// Добавляем страницу
$pdf->AddPage();

$uspev=$mysqli->query("SELECT FIO, fac, gr, no_zk, data, name, ocenka, prep
	FROM student, subject, uspev WHERE stud_id=id_stud and sub_id=id_sub"); 
$rows = "";
$count= 0;
while ($row=mysqli_fetch_array($uspev)) {
	$count++;
	$rows = $rows. "<tr>";
	$rows = $rows. "<td>". $count ."</td>";
	$rows = $rows. "<td>". $row['FIO'] ."</td>";
	$rows = $rows. "<td>". $row['fac'] ."</td>";
	$rows = $rows. "<td>". $row['gr'] ."</td>";
	$rows = $rows. "<td>". $row['no_zk'] ."</td>";
	$rows = $rows. "<td>". date('d-m-Y', strtotime($row['data'])) ."</td>";
	$rows = $rows. "<td>". $row['name'] ."</td>";
	$rows = $rows. "<td>". $row['ocenka'] ."</td>";
	$rows = $rows. "<td>". $row['prep'] ."</td>";
	$rows = $rows. "</tr>";
};

// Устанавливаем текст
$html = "
<h2> Зачетная ведомость </h2>
	<table>
		<tr>
			<td>№ п/п</td> <td>ФИО студента</td> <td>Факультет</td> <td>Группа</td> <td>Номер зачетки</td> <td>Дата сдачи зачета</td> <td> Название предмета </td><td> Оценка </td><td>ФИО преподавателя </td>
		</tr>
	
". $rows ."</table>";
// Выводим текст с помощью writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// Закрываем и выводим PDF документ
$pdf->Output('document.pdf', 'I');
?>

	
 ?>