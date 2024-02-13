<?php
$title = 'PHP Sandbox';

$firstName = 'Chris';

$lastName = 'Sinko';

$fullName = $firstName . ' ' . $lastName;

$names = ['Chris', 'Matt', 'Paul', 'Dave']
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

    <p>
        Names:
        <br>
    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>
    </ul>
    </p>
</body>

</html>