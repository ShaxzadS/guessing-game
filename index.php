<!DOCTYPE html>
<html>
<head>
    <title>c4422e2c</title>
</head>
<body>
    <h1>Welcome to the Guessing Game!</h1>
    
    <?php
    $correct_answer = 54;

    if (isset($_GET['guess'])) {
        $guess = $_GET['guess'];
        

        if (strlen($guess) == 0) {
            echo "<p>Your guess is too short</p>";
        } 
        elseif (!is_numeric($guess)) {
            echo "<p>Your guess is not a number</p>";
        } 
        elseif ($guess < $correct_answer) {
            echo "<p>Your guess is too low</p>";
        } 
        elseif ($guess > $correct_answer) {
            echo "<p>Your guess is too high</p>";
        } 
        else {
            echo "<p>Congratulations - You are right</p>";
        }
    }
    ?>

    <form method="GET">
        <label for="guess">Enter your guess: </label>
        <input type="text" name="guess" id="guess">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
