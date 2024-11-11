<?php 
$array = [10, 20, 30, 40, 50, 60, 70];
$element = 50;
$found = false;

for ($i = 0; $i < count($array); $i++) 
{
    if ($array[$i] == $element)
    {
        echo "Element is found at index $i";
        $found = true;
        break; 
    }
}


if (!$found) 
{
    echo "Element is not found";
}

?>
