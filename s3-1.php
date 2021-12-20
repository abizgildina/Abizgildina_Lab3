<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Абизгильдина Дианас</title>
</head>

<body>
    <a href="index.php">Главная</a>
    <FORM method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        Введите числа
        1 число <INPUT type="text" name="a" size="3">
        2 число <INPUT type="text" name="b" size="3">
        <P> <INPUT type="submit" name="obr" value="Проверить">
    </FORM>
    <?php
    if (isset($_POST["obr"])) {
        if ($_POST["a"] == $_POST["b"]) {
            echo ("Числа равны");
        } elseif ($_POST["a"] > $_POST["b"]) {
            echo $_POST["a"] . " больше " . $_POST["b"];
        } elseif ($_POST["a"] < $_POST["b"]) {
            echo $_POST["a"] . " меньше " . $_POST["b"];
        }
    }
    ?>
</body>

</html>