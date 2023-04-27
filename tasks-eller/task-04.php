<?php
echo '<h2 class="title">Задача 4.</h2>';
echo '<p>Число-палиндром с обеих сторон (справа налево и слева направо) читается одинаково. Самое большое число-палиндром, полученное умножением двух двузначных чисел – 9009 = 91 × 99.
<br>Найдите самый большой палиндром, полученный умножением двух трехзначных чисел.</p>';

function isPalindrome($palindrom) {
    $palindrom = strval($palindrom);
    $pal = strlen($palindrom) - 1;
    for ($i = 0; $i < $pal; $i++) {
        if ($palindrom[$i] !== $palindrom[$pal - $i]) {
            return false;
        }
    }
    return true;
}
function largestPalindrome(){
    $largestPalindrome = 0;
    for ($a = 100; $a <= 999; $a++) {
        for ($b = 100; $b <= 999; $b++) {
            if (isPalindrome($a * $b) and $a * $b > $largestPalindrome) {
                $largestPalindrome = $a * $b;
            }
        }
    }
    return $largestPalindrome;
}
$res4 = largestPalindrome(); 

echo  "<p>Ответ: ".$res4." </p>";
?>