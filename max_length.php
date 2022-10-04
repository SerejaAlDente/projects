<?php


//Напишите код на php, который найдет самую длинную возрастающую последовательность в массиве целых чисел из 100 элементов


function randommas($num, $maxnum) {
    $array = array();
    for ($i = 0; $i < $num; $i ++) {
        $array[$i] = rand(1, $maxnum);
    }
    print_r($array);

    $mas1 = array();
    $mas2 = array();
    

    for ($i = 0; $i < count($array) - 1; $i ++) {
        if ($array[$i] < $array[$i + 1]) {
            if (count($mas1) > 0){
                array_pop($mas1);
            }
            $mas1[] = $array[$i]; 
            $mas1[] = $array[$i+1];
           
        }

        else{
            if (count($mas2) < count($mas1)){
                $mas2 = $mas1;
                
            }
            $mas1 = array();

        }
    }
    print_r($mas2);

    

}
randommas(100, 100);
