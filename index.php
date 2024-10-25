<?php
$correct_answer = 54;
$user_guess = isset($_GET['guess']) ? intval($_GET['guess']) : null;
$message = '';

if ($user_guess !== null) {
    if ($user_guess < $correct_answer) {
        $message = 'Ваше число меньше.';
    } elseif ($user_guess > $correct_answer) {
        $message = 'Ваше число больше.';
    } else {
        $message = 'Поздравляю! Вы угадали число!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game c4422e2c</title>
</head>
<body>
    <h1>Игра в угадай число</h1>
    <form method="GET" action="">
        <input type="number" name="guess" required>
        <input type="submit" value="Угадать">
    </form>
    <p><?php echo $message; ?></p>
</body>
</html>
