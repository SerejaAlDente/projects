<?php

$length = 10;//здесь задается кол-во чисел
$mas = [];
$pol = 0;//положительные элементы
$otr = 0;//отрицательные элементы
$null = 0;//нули

for($i = 0; $length > $i; $i++){ //задаем цикл на $length-элементов
    $mas[$i] = mt_rand(-1,1); //заполняем массив рандомными числами
}

for($i = 0; count($mas) > $i; $i++){
    if($mas[$i] == '0')
    {
        $null += 1; //счетчик
    }

    if($mas[$i] > 0){
        $pol += 1; //счетчик
    }
    
    if($mas[$i] < 0){
        $otr += 1; //счетчик
    }
}

print_r("набор чисел:" . "\n"); 
print_r($mas);
print_r("нулей: {$null}" . "\n");
print_r("положительных чисел: {$pol}" . "\n");
print_r("отрицательных чисел: {$otr}" . "\n");

//выводим наибольшее 
if($otr > $pol && $otr > $null){
    echo "больше всего отрицательных чисел: {$otr}";
}
if($pol> $otr && $pol > $null){
    echo "больше всего положительных чисел: {$pol}";
}
if($null > $pol && $null > $otr){
    echo "больше всего нулей: {$null}";
}
if($pol == $otr && $pol > $null){
    echo "равное количество положительных и отрицательных чисел";
}
if($null == $otr && $null > $pol){
    echo "равное количество нулей и отрицательных чисел";
}
if($null == $pol && $null > $otr){
    echo "равное количество нулей и положительных чисел";
}
