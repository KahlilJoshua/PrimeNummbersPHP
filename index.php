<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primeNumPHP</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Skriv ett nummer</label>
        <input type="text" name="input">
        <input type="submit">
    </form>
</body>

<?php
$dividers = 0;
$x = $_POST["input"];

for ($i = 1; $i <= $x; $i++) {
    if ($x % $i == 0) {
        $dividers++;
    }
}
if ($dividers == 2) {
    echo "<br> {$x} is a prime nummber ";
} else {
    echo "<br> {$x} is not a prime nummber";
}

primeArray();

function primeArray()
{
    echo "<br>";
    echo
    $nums = array();
    for ($i = 0; $i < 10; $i++) {
        $nums[$i] = rand(1, 9);
    }

    foreach ($nums as $num) {
        echo "  {$num}";
    }



    $primes = 0;
    foreach ($nums as $i) {
        $dividers = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $dividers++;
            }
        }
        if ($dividers == 2) {
            $primes++;
        }
    }


    echo " <br> {$primes} Amout of prime nummbers in array";
}
?>
