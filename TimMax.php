<?php
$arr = array([1, 25, 53, 23], [3, 5, 6, 4]);
function timMax($arr)
{
    $max = 0;
    foreach ($arr as $value) {
        foreach ($value as $value2) {
            if ($value2 > $max) {
                $max = $value2;
            }
        }
    }
    return $max;
}

echo timMax($arr);
?>