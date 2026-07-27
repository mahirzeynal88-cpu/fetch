<?php


// function reverseArrayInPlace(array &$array) {
//     $left = 0;
//     $right = count($array) - 1;
   
//     while ($left < $right) {
//         // Swap elements using symmetric array destructuring
//         [$array[$left], $array[$right]] = [$array[$right], $array[$left]];

//         $left++;
//         $right--;
//     }
// }

// $numbers = [1, 2, 3, 4, 5];
// reverseArrayInPlace($numbers);

// print_r($numbers);
/* Output:
Array
(
    [0] => 5
    [1] => 4
    [2] => 3
    [3] => 2
    [4] => 1
)
*/


// function drawStairs($n) {
//     for ($i = 0; $i < $n; $i++) {
//         echo str_repeat("I", $n - $i) . "\n";
//     }
// }

// // Example for n = 3:
// drawStairs(3);

// codewarsda duzgun cvb
// function draw_stairs(int $n): string {
//     $stairs = [];
//     for ($i = 0; $i < $n; $i++) {
//         $stairs[] = str_repeat(" ", $i) . "I";
//     }
//     return implode("\n", $stairs);
// }

// echo draw_stairs(3);

// function draw_stairs(int $n): string {
//     return implode("\n", array_map(fn($i) => str_repeat(" ", $i) . "I", range(0, $n - 1)));
// }



// function problem($value) {
//     return is_string($value) ? "Error" : ($value * 50) + 6;
// }

// function modifyValue($value) {
//     if (is_string($value)) {
//         return "Error";
//     }
//     return ($value * 50) + 6;
// }

/*
At the annual family gathering, the family likes to find the oldest living family member’s age and the youngest family member’s age and calculate the difference between them.

You will be given an array of all the family members' ages, in any order. The ages will be given in whole numbers, so a baby of 5 months, will have an ascribed ‘age’ of 0. Return a new array (a tuple in Python) with [youngest age, oldest age, difference between the youngest and oldest age].

На ежегодном семейном собрании семья любит узнать возраст самого старшего из ныне живущих членов семьи и возраст самого младшего, а затем вычислить разницу между ними.

Вам будет предоставлен массив с возрастами всех членов семьи в любом порядке. Возраст будет указан целыми числами, поэтому младенцу в 5 месяцев будет присвоен «возраст» 0. Верните новый массив (кортеж в Python) с [самый младший возраст, самый старший возраст, разница между самым младшим и самым старшим возрастом].
*/

// function differenceInAges($ages) {
//     // Sort the array in ascending order
//     sort($ages);
    
//     $youngest = reset($ages); // Gets the first value (minimum)
//     $oldest = end($ages);     // Gets the last value (maximum)
//     $difference = $oldest - $youngest;
    
//     return [$youngest, $oldest, $difference];
// }

// // Example usage:
// $ages = [82, 15, 6, 38, 35];
// $result = differenceInAges($ages);
// print_r($result);


/*
Nathan loves cycling.
Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.
You get given the time in hours and you need to return the number of litres Nathan will drink, rounded down.

Натан обожает ездить на велосипеде.
Поскольку Натан знает, как важно поддерживать водный баланс, он выпивает 0,5 литра воды за каждый час езды на велосипеде.
Вам дано время в часах, и вам нужно вернуть количество литров, которое выпьет Натан, округленное в меньшую сторону.
*/
// function litres(float $time): int {
//     return floor($time * 0.5);
// }

// echo litres(5);


/*
Complete the function which takes two arguments and returns all numbers which are divisible by the given divisor. First argument is an array of numbers and the second is the divisor.

Example(Input1, Input2 --> Output)
[1, 2, 3, 4, 5, 6], 2 --> [2, 4, 6]
*/

// function divisibleBy(array $numbers, int $divisor): array {
//     $result = [];
    
//     foreach ($numbers as $number) {
//         if ($number % $divisor === 0) {
//             $result[] = $number;
//         }
//     }
    
//     return $result;
// }

// function divisibleBy(array $numbers, int $divisor): array {
//     return array_values(array_filter($numbers, function($number) use ($divisor) {
//         return $number % $divisor === 0;
//     }));
// }


/*
Complete the function that takes two integers (a, b, where a < b) and return an array of all integers between the input parameters, including them.

For example:

a = 1
b = 4
--> [1, 2, 3, 4]
*/
// function between(int $a, int $b): array {
//     $result = [];
//     for ($i = $a; $i <= $b; $i++) {
//         $result[] = $i;
//     }
//     return $result;
// }

// function solution(int $a, int $b): array {
//     return range($a, $b);
// }

// $res = solution(1, 4);
// print_r($res);
// $result = between(1, 4);
// print_r($result);


/*
You take your son to the forest to see the monkeys. You know that there are a certain number there (n), but your son is too young to just appreciate the full number, he has to start counting them from 1.
As a good parent, you will sit and count with him. Given the number (n), populate an array with all numbers up to and including that number, but excluding zero.

For example(Input --> Output):
10 --> [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
1 --> [1]


Вы ведёте сына в лес посмотреть на обезьян. Вы знаете, что их там определённое количество (n), но ваш сын ещё слишком мал, чтобы оценить всё их количество, ему нужно начать считать с 1.
Как хороший родитель, вы сядете и посчитаете вместе с ним. Дано число (n), заполните массив всеми числами до этого числа включительно, за исключением нуля.
Например (Вход --> Выход):

10 --> [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
1 --> [1]
*/

// function monkeyCount($n) {
//     $monkeys = [];
//     for ($i = 1; $i <= $n; $i++) {
//         $monkeys[] = $i;
//     }
//     return $monkeys;
// }

// function monkeyCount($n) {
//     return range(1, $n);
// }

// $res = monkeyCount(5);
// print_r($res);


/*
The company you work for has just been awarded a contract to build a payment gateway. In order to help move things along, you have volunteered to create a function that will take a float and return the amount formatting in dollars and cents. 39.99 becomes $39.99 The rest of your team will make sure that the argument is sanitized before being passed to your function although you will need to account for adding trailing zeros if they are missing (though you won't have to worry about a dangling period). 

Компания, в которой вы работаете, только что получила контракт на разработку платежного шлюза. Чтобы ускорить процесс, вы вызвались создать функцию, которая будет принимать число с плавающей запятой и возвращать сумму в долларах и центах. 39.99 становится $39.99. Остальная часть вашей команды позаботится о том, чтобы аргумент был очищен перед передачей в вашу функцию, хотя вам нужно будет учесть добавление нулей в конце, если они отсутствуют (однако вам не нужно беспокоиться о висячей точке).
*/

// function formatMoney(float $amount): string {
//     return '$' . number_format($amount, 2, '.', '');
// }

// // Example usage:
// echo formatMoney(39.99); // $39.99
// echo formatMoney(4.5);   // $4.50
// echo formatMoney(50);    // $50.00


/*Given 2 elevators (named "left" and "right") in a building with 3 floors (numbered 0 to 2), write a function accepting 3 arguments (in order):

left - The current floor of the left elevator
right - The current floor of the right elevator
call - The floor that called an elevator
It should return the name of the elevator closest to the called floor ("left"/"right").

In the case where both elevators are equally distant from the called floor, choose the elevator to the right.

You can assume that the inputs will always be valid integers between 0-2.

Examples:

left right call   result
  0    1     0    "left"
  0    1     1    "right"
  0    1     2    "right"
  0    0     0    "right"
  0    2     1    "right"


Даны 2 лифта (с названиями «левый» и «правый») в 3-этажном здании (пронумерованном от 0 до 2). Напишите функцию, принимающую 3 аргумента (в порядке следования):

left — текущий этаж левого лифта;
right — текущий этаж правого лифта;
call — этаж, с которого был вызван лифт.
Функция должна возвращать название ближайшего к вызываемому этажу лифта («левый»/«правый»).

В случае, если оба лифта находятся на одинаковом расстоянии от вызываемого этажа, выберите лифт справа.

Предположим, что входные данные всегда будут допустимыми целыми числами от 0 до 2.

*/

// function elevator($left, $right, $call) {
//     return abs($call - $left) < abs($call - $right) ? 'left' : 'right';
// }



/*
Return the Nth Even Number
To return the Nth even number in PHP, use the mathematical formula ($n - 1) * 2 if your sequence starts at 0, or $n * 2 if it starts at 2.Option 1: Sequence starts at 0 (0, 2, 4, 6...)This index approach matches competitive programming platforms like Codewars
Option 2: Sequence starts at 2 (2, 4, 6, 8...)This approach assumes positive natural numbers

N-ci Cüt Ədədi Qaytarın
PHP-də N-ci cüt ədədi qaytarmaq üçün ardıcıllığınız 0-dan başlayırsa ($n - 1) * 2, 2-dən başlayırsa $n * 2 riyazi düsturundan istifadə edin. Seçim 1: Ardıcıllıq 0-dan başlayır (0, 2, 4, 6...) Bu indeks yanaşması Codewars kimi rəqabətli proqramlaşdırma platformaları ilə uyğun gəlir
Seçim 2: Ardıcıllıq 2-dən başlayır (2, 4, 6, 8...) Bu yanaşma müsbət natural ədədləri fərz edir

*/
// function getNthEven(int $n): int {
//     return ($n - 1) * 2;
// }

// // Examples
// echo getNthEven(1);   // Output: 0
// echo getNthEven(3);   // Output: 4
// echo getNthEven(100); // Output: 198


// function getNthEvenFromTwo(int $n): int {
//     return $n * 2;
// }

// // Examples
// echo getNthEvenFromTwo(1);   // Output: 2
// echo getNthEvenFromTwo(3);   // Output: 6
// echo getNthEvenFromTwo(100); // Output: 200


/*
Write a method, that will get an integer array as parameter and will process every number from this array.
Return a new array with processing every number of the input-array like this:
If the number has an integer square root, take this, otherwise square the number.

Напишите метод, который принимает в качестве параметра массив целых чисел и обрабатывает каждое число из этого массива.
Возвращает новый массив, в котором каждое число из входного массива обрабатывается следующим образом:
Если число имеет целочисленный квадратный корень, возьмите его, в противном случае возведите число в квадрат.
*/

// function squareOrSquareRoot(array $arr): array {
//     return array_map(function($num) {
//         $root = sqrt($num);
//         return (floor($root) == $root) ? (int)$root : $num * $num;
//     }, $arr);
// }

// $input = [4, 3, 9, 7, 25];
// $result = squareOrSquareRoot($input);

// print_r($result);
/* 
Output:
Array
(
    [0] => 2   (Square root of 4)
    [1] => 9   (3 squared)
    [2] => 3   (Square root of 9)
    [3] => 49  (7 squared)
    [4] => 5   (Square root of 25)
)
*/


/*
You're at the zoo... all the meerkats look weird. Something has gone terribly wrong - someone has gone and switched their heads and tails around!
Save the animals by switching them back. You will be given an array which will have three values (tail, body, head). It is your job to re-arrange the array so that the animal is the right way round (head, body, tail).
Same goes for all the other arrays/lists that you will get in the tests: you have to change the element positions with the same exact logics


Вы в зоопарке… все сурикаты выглядят странно. Что-то пошло ужасно не так — кто-то поменял им местами головы и хвосты!
Спасите животных, вернув их на место. Вам будет предоставлен массив с тремя значениями (хвост, тело, голова). Ваша задача — переставить элементы массива так, чтобы животное оказалось в правильном положении (голова, тело, хвост).
То же самое относится и ко всем остальным массивам/спискам, которые вы получите в тестах: вам нужно будет изменить положение элементов, используя ту же самую логику.

*/

// function fix_the_meerkat($arr) {
//     return array_reverse($arr);
// }





