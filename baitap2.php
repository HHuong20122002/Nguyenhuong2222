<?php
//  1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$number = 6;
if (isEven($number)) {
    echo "$number là số chẵn.";
} else {
    echo "$number không phải là số chẵn.";
}
// 2. Viết chương trình PHP để tính tổng các số từ 1 đến n.
function calculateSum($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
$total = calculateSum($n);
echo "Tổng các số từ 1 đến $n là: $total";
// 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function printMultiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result\n";
        }
        echo "\n";
    }
}
printMultiplicationTable();
// 4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkWordInString($string, $word) {
    $words = explode(' ', $string); 
    foreach ($words as $w) {
        if ($w === $word) {
            return true; 
        }
    }
    return false; 
}
$string = "anh huy dep trai cho diem cao :>"; 
$word = "dep"; 

if (checkWordInString($string, $word)) {
    echo "Chuỗi chứa từ '$word'";
} else {
    echo "Chuỗi không chứa từ '$word'";
}
// 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMinMax($arr) {
    $min = $arr[0];
    $max = $arr[0];
    $length = count($arr);

    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }

    echo "Giá trị nhỏ nhất: " . $min . "\n";
    echo "Giá trị lớn nhất: " . $max . "\n";
}
$array = [5, 3, 9, 2, 8, 1];
echo findMinMax($array);
// 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortArrayAscending($arr) {
    $length = count($arr);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Hoán đổi vị trí các phần tử nếu phần tử hiện tại lớn hơn phần tử tiếp theo
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}
$array = [7, 6, 9, 2, 8, 1];
$sortedArray = sortArrayAscending($array);
echo "Mảng sau khi sắp xếp: ";
foreach ($sortedArray as $element) {
    echo $element . " ";
}
// 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calculateFactorial($n) {
   if ( $n == 1) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}
$number = 5;
$factorial = calculateFactorial($number);
echo "Giai thừa của số $number là: $factorial";
// 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
function findPrimesInRange($start, $end) {
    $primes = [];
    for ($number = $start; $number <= $end; $number++) {
        if (isPrime($number)) {
            $primes[] = $number;
        }
    }
    return $primes;
}
$start = 1; 
$end = 50; 
$primeNumbers = findPrimesInRange($start, $end);
echo "Các số nguyên tố từ $start đến $end là: ";
echo implode(", ", $primeNumbers);
// 9.Viết chương trình PHP để tính tổng các số trong một mảng.
function calculateSum($arr) {
    $sum = 0;
    foreach ($arr as $number) {
        $sum += $number;
    }
    return $sum;
}
$array = [3, 6, 7, 2, 4, 1];
$sum = calculateSum($array);
echo "Tổng các số trong mảng là: " . $sum;
// 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function generateFibonacci($n) {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}
function printFibonacciInRange($start, $end) {
    $fibonacciNumbers = [];
    $n = 2;
    while (true) {
        $fibonacci = generateFibonacci($n);
        $lastFibonacci = end($fibonacci);
        if ($lastFibonacci > $end) {
            break;
        }
        if ($lastFibonacci >= $start) {
            $fibonacciNumbers[] = $lastFibonacci;
        }
        $n++;
    }
    echo "Các số Fibonacci từ $start đến $end là: ";
    echo implode(", ", $fibonacciNumbers);
}
$start = 1; 
$end = 50; 
printFibonacciInRange($start, $end);
// 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isArmstrong($number) {
    $digits = str_split($number);
    $numDigits = count($digits);
    $sum = 0;

    foreach ($digits as $digit) {
        $sum += pow($digit, $numDigits);
    }

    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

$number = 153; 

if (isArmstrong($number)) {
    echo "$number là số Armstrong.";
} else {
    echo "$number không phải là số Armstrong.";
}
// 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
    array_splice($array, $position, 0, $element);
    return $array;
}

$originalArray = [1, 2, 3, 4, 5]; // Mảng ban đầu
$insertElement = 10; // Phần tử cần chèn
$insertPosition = 2; // Vị trí chèn

$newArray = insertElement($originalArray, $insertElement, $insertPosition);

echo "Mảng sau khi chèn: ";
echo implode(", ", $newArray);
// 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($array) {
    $result = array_unique($array);
    return $result;
}

$originalArray = [1, 2, 2, 3, 4, 4, 5, 5]; // Mảng ban đầu

$uniqueArray = removeDuplicates($originalArray);

echo "Mảng sau khi loại bỏ phần tử trùng lặp: ";
echo implode(", ", $uniqueArray);
// 14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findElementPosition($array, $element) {
    $positions = [];
    for ($i = 0; $i < count($array); $i++) { 
        if ($array[$i] === $element) {
            $positions[] = $i;
        }
    }
    return $positions;
}
$originalArray = [1, 2, 3, 4, 5, 2, 6, 2]; 
$searchElement = 4; // Phần tử cần tìm

$elementPositions = findElementPosition($originalArray, $searchElement);

if (empty($elementPositions)) {
    echo "Phần tử không được tìm thấy trong mảng.";
} else {
    echo "Vị trí của phần tử $searchElement trong mảng: ";
    echo implode(", ", $elementPositions);
}
// 15. Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string) {
    $length = strlen($string);
    $reversedString = '';

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    return $reversedString;
}

$originalString = "nguyenthihuong"; // Chuỗi ban đầu

$reversedString = reverseString($originalString);

echo "Chuỗi sau khi đảo ngược: $reversedString";
// 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($array) {
    $count = 0;

    foreach ($array as $element) {
        $count++;
    }
    return $count;
}

$numbers = [1, 2, 3, 4, 5]; 
$count = countElements($numbers);
echo "Số lượng phần tử trong mảng là: " . $count;
//  17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($string) {
    $string = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string)); // Chuyển đổi chuỗi thành chữ thường và loại bỏ các ký tự đặc biệt

    $reverseString = strrev($string); // Đảo ngược chuỗi

    if ($string === $reverseString) {
        return true; 
    } else {
        return false;
    }
}

$string = "radar"; 

if (isPalindrome($string)) {
    echo "Chuỗi '$string' là Palindrome";
} else {
    echo "Chuỗi '$string' không phải là Palindrome";
}
// 18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. 
function countOccurrences($array, $element) {
    $count = 0;

    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }

    return $count;
}

$originalArray = [1, 2, 2, 3, 4, 2, 5, 2]; 
$searchElement = 2; 
$elementCount = countOccurrences($originalArray, $searchElement);
echo "Số lần xuất hiện của phần tử $searchElement trong mảng: $elementCount";
// 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortDescending($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}
$numbers = [5, 2, 9, 1, 7]; 
$sortedArray = sortDescending($numbers);
echo "Mảng được sắp xếp theo thứ tự giảm dần là: " . implode(", ", $sortedArray);
// 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addToBeginning($array, $element) {
    $result = [$element]; 

    foreach ($array as $item) {
        $result[] = $item; // Thêm các phần tử cũ vào sau phần tử mới
    }
    return $result;
}
function addToEnd($array, $element) {
    $array[] = $element; // Thêm phần tử mới vào cuối mảng
    return $array;
}

$numbers = [1, 2, 3, 4]; 
$newElement = 5; 
$modifiedArray = addToEnd($numbers, $newElement);
echo "Mảng sau khi thêm phần tử vào cuối là: " . implode(", ", $modifiedArray);
// 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($array) {
    $largest = $array[0];
    $secondLargest = $array[0];

    foreach ($array as $value) {
        if ($value > $largest) {
            $secondLargest = $largest;
            $largest = $value;
        } elseif ($value > $secondLargest && $value < $largest) {
            $secondLargest = $value;
        }
    }
    return $secondLargest;
}
$originalArray = [5, 3, 9, 1, 7]; 
$secondLargestNumber = findSecondLargest($originalArray);
echo "Số lớn thứ hai trong mảng: $secondLargestNumber";
// 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCD($num1, $num2) {
    while ($num2 != 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
    }
    return $num1;
}
function findLCM($num1, $num2) {
    $gcd = findGCD($num1, $num2);
    $lcm = ($num1 * $num2) / $gcd;
    return $lcm;
}
$number1 = 24;
$number2 = 36; 
$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);

echo "Ước số chung lớn nhất của $number1 và $number2 là: $gcd";
echo "<br>";
echo "Bội số chung nhỏ nhất của $number1 và $number2 là: $lcm";
// 23. Viết chương trình PHP để kiểm tra xem một số có phải số hoàn hảo hay không
function isPerfectNumber($number) {
    $sum = 0;

    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            $sum += $i;
        }
    }
    if ($sum === $number) {
        return true; 
    } else {
        return false;
    }
}

$number = 28; 
if (isPerfectNumber($number)) {
    echo "$number là một số hoàn hảo";
} else {
    echo "$number không phải là số hoàn hảo";
}
// 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($array) {
    $largestOdd = null;

    foreach ($array as $value) {
        if ($value % 2 != 0) {
            if ($largestOdd === null || $value > $largestOdd) {
                $largestOdd = $value;
            }
        }
    }
    return $largestOdd;
}
$numbers = [2, 7, 3, 10, 15, 9, 6]; 
$largestOddNumber = findLargestOddNumber($numbers);
if ($largestOddNumber !== null) {
    echo "Số lẻ lớn nhất trong mảng: $largestOddNumber";
} else {
    echo "Không có số lẻ trong mảng.";
}
// 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = 17; 
if (isPrime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không là số nguyên tố.";
}
// 26. Viết chương trình PHP để tìm số dương lớn nhất trong mảng
function findLargestPositive($array) {
    $maxPositive = 0;

    foreach ($array as $number) {
        if ($number > $maxPositive && $number > 0) {
            $maxPositive = $number;
        }
    }
    return $maxPositive;
}
$numbers = [-2, 4, 8, -3, 9, -5, 2, 7]; 
$largestPositive = findLargestPositive($numbers);
if ($largestPositive !== 0) {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositive;
} else {
    echo "Không tìm thấy số dương trong mảng";
}
// 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegativeNumber($array) {
    $largestNegative = null;
    foreach ($array as $value) {
        if ($value < 0) {
            if ($largestNegative === null || $value > $largestNegative) {
                $largestNegative = $value;
            }
        }
    }
    return $largestNegative;
}
$numbers = [-2, 7, 3, -10, -15, -9, 6]; 
$largestNegativeNumber = findLargestNegativeNumber($numbers);
if ($largestNegativeNumber !== null) {
    echo "Số âm lớn nhất trong mảng: $largestNegativeNumber";
} else {
    echo "Không có số âm trong mảng.";
}
// 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOfOddNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
$n = 10; // Giá trị n
$sum = sumOfOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: $sum";
// 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end) {
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $perfectSquares[] = $i;
        }
    }

    return $perfectSquares;
}
function isPerfectSquare($number) {
    $sqrt = sqrt($number);
    return ($sqrt * $sqrt == $number);
}

$start = 1;
$end = 50; 
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương từ $start đến $end là: " . implode(", ", $perfectSquares);
// 30 . Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($string, $substring) {
    $stringLength = strlen($string);
    $substringLength = strlen($substring);

    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $j = 0;
        while ($j < $substringLength && $string[$i + $j] === $substring[$j]) {
            $j++;
        }
        if ($j === $substringLength) {
            return true; // Chuỗi là chuỗi con
        }
    }
    return false; // Chuỗi không phải là chuỗi con
}
$mainString = "Anh Huy dep trai he he";
$substring = "dep";
if (isSubstring($mainString, $substring)) {
    echo "Chuỗi '$substring' là chuỗi con của chuỗi '$mainString'";
} else {
    echo "Chuỗi '$substring' không phải là chuỗi con của chuỗi '$mainString'";
}
?>
 
