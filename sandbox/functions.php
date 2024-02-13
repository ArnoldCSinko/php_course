<?php
function add($num1 = 0, $num2 = 0)
{
    return $num1 + $num2;
}

function sayHello($name)
{
    echo 'Hello' . ' ' . $name;
}

function sum(...$numbers)
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }

    return $total;
}
