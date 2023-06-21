<?php

$mas = [];
$size = 10; // Размер массива

for ($i = 0; $i < $size; $i++) {
    $mas[] = rand(-10, 10); // Генерация случайного числа
}

// Ассоциативный массив
$res = [
    'pol' => 0,
    'otr' => 0,
    'null' => 0
];

// Подсчет количества элементов
foreach ($mas as $i) {
    if ($i < 0) {
        $res['otr']++;
    } elseif ($i > 0) {
        $res['pol']++;
    } else {
        $res['null']++;
    }
}

// Функция для поиска наибольшего
function biggestelem($big)
{
    $biggestelem = '';
    $biggestcount = 0;
    $odinakcount = '';

    foreach ($big as $i => $count) { 

        if ($count > $biggestcount) { // условие для нахождения наибольшего количества чисел
            $biggestelem = $i;
            $biggestcount = $count;
            $odinakcount = '';
        }

        elseif ($count === $biggestcount) { // условие для проверки одинаковых наибольших чисел
            $odinakcount = $i;
        }
                                    
    }
    if ($odinakcount == true) {
        return "\n" ."одинаковое наибольшее кол-во" . ' ' . $biggestelem . ' ' . "и" . ' ' . $i . ' ' ."чисел" . ":" . ' ' .$biggestcount . "\n";
    }
    if ($odinakcount == false) {
        return "\n" . "наибольшее:" . ' ' . $biggestelem . ' ' . $biggestcount; 
    }
    
}

// Вывод результатов
print_r($mas);
echo "Количество положительных чисел: " . $res['pol'] . "\n";
echo "Количество отрицательных чисел: " . $res['otr'] . "\n";
echo "Количество нулей: " . $res['null'] . "\n";

echo biggestelem($res);
