<?php

$arr = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

foreach ($arr as $row) 
{
    foreach ($row as $element) 
    {
        echo "$element ";
    }
    echo "<br>";
}

echo "<br>";

$arr2 = [
    [1, 2, 3],
    [1, 2],
    [1]
];

foreach ($arr2 as $row) 
{
    foreach ($row as $element) 
    {
        echo "$element ";
    }
    echo "<br>";
}

echo "<br>";

$arr3 = [
    ['A'],
    ['B', 'C'],
    ['D', 'E', 'F']
];

foreach ($arr3 as $row) 
{
    foreach ($row as $element) 
    {
        echo "$element ";
    }
    echo "<br>";
}

?>
