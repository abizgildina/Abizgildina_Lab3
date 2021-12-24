<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Абизгильдина Диана</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
		<h2>Авторизация</h2>
		username: <input type="text" name="username"> <br>
		password: <input type="password" name="password"> <br>
		<input type="submit" name="come" value="Войти">  <br>
		<input type="submit" name="reset" value="Очистить">  <br>
	</form>
	<?php
	include ("connectBD.php"); 
	if (isset($_POST["come"])) {
		$user=$mysqli->query("SELECT id_user, username, password, type
		FROM users"); 
		// Ввод
		$username = $_POST["username"];
		$password = $_POST["password"];
		// Для индитификации входа
		$idCome = false;
		// Проверка вводимых данных
		while ($data = mysqli_fetch_array($user)) {
		$usernameBD = $data['username'];
		$passwordBD = $data['password'];
		$typeBD = $data['type'];
		$idUserBD = $data['id_user'];
		//echo md5($password) ."<br>" ;
		//echo $passwordBD."<br>" ;
		//echo $usernameBD."<br>" ;
	    //echo $username."<br>" ;
			if ($username === $usernameBD and md5($password) === $passwordBD) {
				$idCome = true;
				session_start();
				$_SESSION['type'] = $typeBD;
				$_SESSION['id_user'] = $idUserBD;
				
				break;
			} else {
				$idCome = false;
			}
		}

		if ($idCome) {
			header("Refresh:0; url=indexLR5.php");
		} else { 
			echo "Логин или пароль введен не верно";
			
		}
	}
?>
	 
</body>
</html>