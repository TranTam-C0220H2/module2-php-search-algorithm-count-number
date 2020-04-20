<?php
function countNumber($array, $value)
{
    $countNumber = 0;
    foreach ($array as $item) {
        if ($item == $value) {
            $countNumber++;
        }
    }
    return $countNumber;
}

for ($i = 0; $i < 100; $i++) {
    $arrayRandomIntNumber[$i] = rand(1, 100) . ' ';
    echo $arrayRandomIntNumber[$i];
}

echo '<br>' . 'So lan xuat hien cua so 50 trong mang la: ' . countNumber($arrayRandomIntNumber, 50);