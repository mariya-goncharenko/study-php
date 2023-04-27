<?php
echo '<h2 class="title">Задача 2.</h2>';
echo '<p>Каждый следующий элемент ряда Фибоначчи получается при сложении двух предыдущих. Начиная с 1 и 2, первые 10 элементов будут:<br>
1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ... <br>
Найдите сумму всех четных элементов ряда Фибоначчи, которые не превышают четыре миллиона.</p>';
function task2($limit){
    $sum = 0;
    $a = 0;
    $b = 1;
    while ($b < $limit){
        if ($b % 2 == 0) {
            $sum = $sum + $b;
        }
        $h = $a + $b;
        $a = $b;
        $b = $h;
    }
    return $sum;
}
$res2 = task2(4000000);
echo  "<p>Ответ: " . $res2 . " </p>";
?>