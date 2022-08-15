<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RANDOM</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<ul>
    <li><a href="index.php">Главная</a></li>
    <li><a href="randomnum.php">Генератор чисел</a></li>
    <li><a href="password.php">Генератор паролей</a></li>

</ul>
<div class="randomnumbers">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    if (trim($a) == "" || trim($b) == ""){
        echo "Вы не ввели числа!";
    }
            function random($a, $b)
            {
                $random = rand($a, $b);
                return $random;
            }
    $res = random($a, $b);
    echo "Ваше число: ". '<br>' . $res;


     ?>
</div>
</body>
</html>


