<?php
echo '<h2 class="title">Задача 6.</h2>';
echo '<p>Сумма квадратов первых десяти натуральных чисел равна
12 + 22 + ... + 102 = 385
<br>Квадрат суммы первых десяти натуральных чисел равен
(1 + 2 + ... + 10)2 = 552 = 3025
<br>Следовательно, разность между суммой квадратов и квадратом суммы первых десяти натуральных чисел составляет 3025 − 385 = 2640.<br>
Найдите разность между суммой квадратов и квадратом суммы первых ста натуральных чисел.</p>';

$n = 100;
for ($i = 1; $i < $n+1; $i++) {
  $sum1 += $i;
  $sum2 += pow($i,2);
};
$sum1=pow($sum1,2);
$result = $sum1 - $sum2;
echo "<p>Ответ: ". $result ." </p>";
?>