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
    $pass = $_POST['pass'];
    if (trim($pass) == "") {
        echo "Вы не ввели длину пароля!";
    }
    function gen_password($length = 6)
    {
	$arraypass = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP';
	$size = strlen($arraypass) - 1;
	$password = '';
	while($length--) {
		$password .= $arraypass[rand(0, $size)];
	}
	return $password;
}
$genpass = gen_password($pass);
echo $genpass;
?>
</div>
</body>
</html>
