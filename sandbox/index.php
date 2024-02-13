<?php
include 'functions.php';

$title = 'PHP Sandbox';

$firstName = 'Chris';

$lastName = 'Sinko';

$fullName = $firstName . ' ' . $lastName;

$names = ['Chris', 'Matt', 'Paul', 'Dave'];

$result = add(1, 3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <h1><?= $title ?></h1>

    <h2><?= sayHello($firstName) ?></h2>

    <p>
        Names:
        <br>
    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>
    </ul>

    <br>
    Result: <?= $result ?>
    <br>
    Sum = <?= sum(1, 2, 3, 4) ?>
    </p>
</body>

</html>