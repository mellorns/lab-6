<?php
require_once __DIR__."/vendor/autoload.php";
require_once "car_rent.php";

use MongoDB\Client;

$db = new \MongoDB\Client("mongodb://127.0.0.1/");
$car = $db->rent_car->car;
$rent = $db->rent_car->rent;
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LB2</title>
    <script src="script.js"></script>
</head>
<body>
<form action="" method="post">
    <input type="datetime-local" name="date">
    <input type="submit"><br>
</form>

<form action="" method="post">
    <input type="text" name="race">
    <input type="submit"><br>
</form>

<form action="" method="post">
    <input type="hidden" name="car">
    <input type="submit" value="Найти все машины"><br>
</form>
<div id="content"></div>
<hr>
<input type="button" value="сохранить" onclick="add()">
<input type="button" value="показать" onclick="get()">
<?php
if (isset($_POST["date"])) {
    costInDate($rent, $_POST["date"]);
} elseif (isset($_POST["race"])) {
    lessRace($car, $_POST["race"]);
} elseif (isset($_POST["car"])) {
    carNames($car);
}
?>
</body>
</html>

