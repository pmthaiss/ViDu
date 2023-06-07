<?php
//Cau 1
    $number = 8;
    function checkEvenNumber($number){
        if ($number % 2 == 0) {
            return 'Đây là số chẵn'.'</br>';
        } else {
            return 'Đây không phải là số chẵn'.'</br>';
        }
    }
    echo checkEvenNumber($number);

//Cau 2
    function sum(){
        $sum = 0;
        $n = 5;
        for ($i = 1; $i <= $n ; $i++){
            $sum += $i;
        }
        return 'Tổng dãy số từ 1 đến $n là: '.$sum.'</br>';
    }
    echo sum();

//Cau 3
    function subtendMultiplicationTable(){
        for($i = 1; $i <= 10; $i++) {
            for($j = 1; $j <=10; $j++) {
                echo "$i x $j = ". $i * $j;
                echo '</br>';
            }
        }
    }
    echo subtendMultiplicationTable();

//Cau 4
    function checkString(){
        $string = 'This is an elephent';
        $sub = 'elephent';
        if(strpos($string, $sub) != false) {
            echo $sub;
        } else {
            echo 'Can not found';
        }
    }
    echo checkString().'</br>';

//Cau 5
function timGiaTriLonNhat($arr)
{
    $max = $arr[0];
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

function timGiaTriNhoNhat($arr)
{
    $min = $arr[0];
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

$arr = array(2, 9, 5, 7, 3, 1, 6);

$giaTriLonNhat = timGiaTriLonNhat($arr);

$giaTriNhoNhat = timGiaTriNhoNhat($arr);

echo "Giá trị lớn nhất trong mảng là: $giaTriLonNhat<br>";
echo "Giá trị nhỏ nhất trong mảng là: $giaTriNhoNhat";

//Cau 6
function sortArrayAscending($arr) {
    $length = count($arr);
    
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    
    return $arr;
}

$array = [5, 2, 8, 1, 9];

echo "Mảng trước khi sắp xếp: ";
print_r($array);

$sortedArray = sortArrayAscending($array);

echo "Mảng sau khi sắp xếp: ";
print_r($sortedArray);
//Cau 7
    function factorialCalculation(){
        $a = 5;
        $result = 1;
        if ($a <= 0) {
            echo "Đây không phải là số nguyên dương!";
        } else {
            for ($i = 1; $i <= $a; $i++) {
                $result *= $i;
           }
                return $result;
        }
    }
    echo factorialCalculation();

//Cau 8
    function findPrimeNumber(){
        $numberStart = 5;
        $numberEnd = 100;
        for ($i = $numberStart; $i <= $numberEnd; $i++){
            if ($i < 2) {
                continue;
            }
            $count = 0;
            for ($j = 2; $j <= sqrt($i); $j++){
                if ($i % $j == 0){
                    $count++;
                }
            }
            if ($count == 0){
                echo $i . ' là số nguyên tố. </br>';
            }
        } 
    }
    echo findPrimeNumber();

//Cau 9
    function sumArray(){
        $listNumber2 = array(3,4,-2,0,9,5,7);
        $sum_array = 0;
        foreach($listNumber2 as $key => $value){
            $sum_array += $value++;
        }
        return 'Tổng dãy số là: '.$sum_array.'</br>';
    }
    echo sumArray();

Cau 10
    function fibonacci($n) {
        if($n == 0) {
            return 0;
       } else if($n == 1) {
            return 1;
        } else {
           return (fibonacci($n - 1) + fibonacci($n - 2));
        }
    }

    function print_fibonacci($start, $end) {
        for($i = $start; $i <= $end; $i++) {
            echo fibonacci($i) . " ";
        }
    }

    $start = 0;
    $end = 10;
    echo "Các số Fibonacci từ $start đến $end là: ";
    print_fibonacci($start, $end);

Cau 11
function isArmstrongNumber($number) {
    $numDigits = strlen((string)$number);
    $sum = 0;
    $temp = $number;
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    
    return $number === $sum;
}

$number = 153;

if (isArmstrongNumber($number)) {
    echo "{$number} là số Armstrong.";
} else {
    echo "{$number} không phải là số Armstrong.";
}
// Cau 12
    function insertElement(){
        $array = [];
        for ($i = 0; $i <10 ; $i++){
            array_push($array, rand(0, 100));
        }
        echo "Mảng tự sinh là: </br> array[";
        foreach ($array as $item) {
            echo (string)$item . ", ";
        }
        echo "] </br>";
        $elementToInsert = 'chèn';
        array_splice( $array, 3, 0, $elementToInsert );   
		echo "Sau khi chèn phần tử '" . $elementToInsert ."' thì mảng sẽ như sau: "."<br>";
		echo "array[";
		foreach ($array as $item) {
			echo (string)$item . ", ";
    }
    echo "] </br>";
}
    echo insertElement();

// Cau 13
function removeDuplicates($array) {
    $result = [];
  
    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        $isDuplicate = false;
      
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] === $array[$j]) {
                $isDuplicate = true;
                break;
            }
        }
      
        if (!$isDuplicate) {
            $result[] = $array[$i];
        }
    }
  
    return $result;
}
$array = [1, 2, 2, 3, 4, 4, 5];

$result = removeDuplicates($array);

echo "Mảng sau khi loại bỏ các phần tử trùng lặp: ";
echo implode(", ", $result);
// Cau 14
    function findElementPosition(){
        $arr = [];
		for ($i= 0; $i < 10; $i++) { 
			array_push($arr, rand(0, 100));
		}

		echo "Mảng tự sinh là: <br> array[";
		foreach ($arr as $item) {
			echo (string)$item . ", ";
		}
		echo "] <br>";
		
		$numberToFind = rand(0, 100);
		$check = false;

		foreach ($arr as $key => $value) {
			if ($numberToFind == $value) {
				echo "Số cần tìm là: ". $numberToFind. " nằm ở vị trí " . $key . " trong mảng.";
				$check = true;
			}
		}

		if (!$check) {
			echo "Số " . $numberToFind . " không có trong mảng";
		}       
    }
    echo findElementPosition();

// Cau 15

function reverseString($string) {
    $length = strlen($string);
    $reversedString = '';

    // Duyệt qua từng ký tự của chuỗi theo thứ tự ngược lại
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    return $reversedString;
}

// Sử dụng chương trình để đảo ngược chuỗi "Hello World"
$string = "Hello World";

$reversedString = reverseString($string);

echo "Chuỗi đảo ngược là: " . $reversedString;

// Cau 16

function countElements($array) {
    $count = 0;

    // Duyệt qua từng phần tử trong mảng và tăng biến đếm lên 1
    for ($i = 0; $i < count($array); $i++) {
        $count++;
    }

    return $count;
}

// Sử dụng chương trình để tính số lượng phần tử trong mảng [1, 2, 3, 4, 5]
$array = [1, 2, 3, 4, 5];

$count = countElements($array);

echo "Số lượng phần tử trong mảng là: " . $count;

// Cau 17
    function checkStringPalindrome(){
        $str = "aaaaaa";
        if ($str == strrev($str)) {
            echo "Chuỗi " . $str . " là chuỗi Palindrome.";
        } else {
            echo "Chuỗi " . $str . " không là chuỗi Palindrome.";
        }
    }
    echo checkStringPalindrome();

// Cau 18
    function countOccourrences() {
        $str = "Dinh Thi Thuong";
        $text = "T";
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($text == $str[$i]) {
                $count++;
            } 
    }
    echo "Số lần xuất hiện của " . $text . " bên trong " . $str . " là: " . $count;
}
    echo countOccourrences();

// Cau 19
function sortArrayDescending($array) {
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] < $array[$j]) {
                // Hoán đổi giá trị của hai phần tử
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }

    return $array;
}

// Sử dụng chương trình để sắp xếp mảng [5, 2, 8, 1, 9] theo thứ tự giảm dần
$array = [5, 2, 8, 1, 9];

$sortedArray = sortArrayDescending($array);

echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: ";
echo implode(", ", $sortedArray);

// Cau 20
function addElementAtBeginning($array, $element) {
    $length = count($array);
    $newArray = [];

    $newArray[0] = $element;

    for ($i = 0; $i < $length; $i++) {
        $newArray[$i + 1] = $array[$i];
    }

    return $newArray;
}

// Sử dụng chương trình để thêm phần tử 4 vào đầu mảng [1, 2, 3]
$array = [1, 2, 3];
$element = 4;

$newArray = addElementAtBeginning($array, $element);

echo "Mảng sau khi thêm phần tử vào đầu: ";
echo implode(", ", $newArray);

function addElementAtEnd($array, $element) {
            $length = count($array);
            $newArray = [];
        
            for ($i = 0; $i < $length; $i++) {
                $newArray[$i] = $array[$i];
            }
        
            $newArray[$length] = $element;
        
            return $newArray;
        }
        
        // Sử dụng chương trình để thêm phần tử 4 vào cuối mảng [1, 2, 3]
        $array = [1, 2, 3];
        $element = 4;
        
        $newArray = addElementAtEnd($array, $element);
        
        echo "Mảng sau khi thêm phần tử vào cuối: ";
        echo implode(", ", $newArray);

// // Cau 21
function findSecondLargest($array) {
    $length = count($array);

    if ($length < 2) {
        return null; // Trả về null nếu mảng không có đủ phần tử
    }

    $largest = $array[0];
    $secondLargest = null;

    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $array[$i];
        } elseif ($array[$i] < $largest && ($secondLargest === null || $array[$i] > $secondLargest)) {
            $secondLargest = $array[$i];
        }
    }

    return $secondLargest;
}

$array = [1, 3, 2, 5, 4];

$secondLargest = findSecondLargest($array);

if ($secondLargest !== null) {
    echo "Số lớn thứ hai trong mảng là: {$secondLargest}";
} else {
    echo "Không tìm thấy số lớn thứ hai trong mảng.";
}

// // Cau 22
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findLCM($a, $b) {
    $gcd = findGCD($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}

// Sử dụng chương trình để tìm USCLN và BSCNN của hai số 12 và 18
$a = 12;
$b = 18;

$gcd = findGCD($a, $b);
$lcm = findLCM($a, $b);

echo "USCLN của {$a} và {$b} là: {$gcd}\n";
echo "BSCNN của {$a} và {$b} là: {$lcm}\n";

// Cau 23
function isPerfectNumber($number) {
    $sum = 0;
    
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    
    return $sum == $number;
}

$number = 28;

if (isPerfectNumber($number)) {
    echo "{$number} là số hoàn hảo.";
} else {
    echo "{$number} không phải là số hoàn hảo.";
}

// Cau 24
    function FindMaxOdd(){
        $arr = [];
		for ($i= 0; $i < 10; $i++) { 
			array_push($arr, rand(0, 100));
		}

		echo "Mảng tự sinh là: <br> array[";
		foreach ($arr as $item) {
			echo (string)$item . ", ";
		}

		echo "] <br>";    
        $max = $arr[0];
        for ($i = 1; $i < count($arr); $i++) { 
            if ($max < $arr[$i] && $arr[$i] % 2 != 0) {
                $max = $arr[$i];
            }
        }
        echo "Số lẻ lớn nhất trong mảng là: " . $max;    
    }
    echo FindMaxOdd();

// Cau 25
function PrimeNumber() {
    $number = 17;
    if($number < 2){
        echo $number . " không phải là số nguyên tố. <br>";
    }
    $count = 0;
    for($j = 2; $j <= sqrt($number); $j++){
        if($number % $j == 0){
            $count++;
        }
    }

    if($count == 0){
        echo $number . " là số nguyên tố. <br>";
    } else {
        echo $number . " không phải là số nguyên tố. <br>";
    }
}   
    echo PrimeNumber();

// Cau 26
    function findLargestPositiveNumber(){
        $arr = [1,50,68,-45,-99,100];
        $max = $arr[0];
        for ($i = 1; $i < count($arr); $i++) { 
            if ($max < $arr[$i] && $arr[$i] > 0) {
                $max = $arr[$i];
            }
        }

        echo "Số dương lớn nhất trong mảng là: " . $max;        
    }
    echo findLargestPositiveNumber();

// Cau 27
    function findLargestNegativeNumber() {
        $arr = [1,50,68,-45,-99,100];
        $arrNew = [];
        foreach ($arr as $value) {
            if ($value < 0)
                array_push($arrNew, $value);
        }
        $max = $arrNew[0];
        for ($i = 1; $i < count($arrNew); $i++) { 
            if ($max < $arrNew[$i]) {
                $max = $arrNew[$i];
            }
        }

        echo "Số âm lớn nhất trong mảng là: " . $max;       
    }
    echo findLargestNegativeNumber();

// Cau 28
    function sum() {
        $num = 5;
        $sum = 0;
        for ($i = 1; $i <= $num; $i++) { 
            if ($i %2 != 0) {
            $sum += $i;
            }
        }

        echo "Tổng các số từ 1 đến " . $num . " là: " . $sum;       
    }
    echo sum();

// Cau 29
    function findPerfectSquare() {
        $numberStart = 1;
        $numberEnd = 100;
        for ($i = $numberStart; $i <= $numberEnd; $i++) { 
            $x = sqrt($i);
            if ((int)$x*(int)$x == $i) {
                echo $i . " là số chính phương <br>";
            }
        }        
    }
    echo findPerfectSquare();

Cau 30
  
    function isSubstring($string, $substring) {
        $stringLength = strlen($string);
        $substringLength = strlen($substring);
    
        if ($substringLength > $stringLength) {
            return false;
        }
    
        for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
            $j = 0;
    
            while ($j < $substringLength && $string[$i + $j] === $substring[$j]) {
                $j++;
            }
    
            if ($j === $substringLength) {
                return true;
            }
        }
    
        return false;
    }
    $string = "xyzabcde";
$substring = "kmn";

if (isSubstring($string, $substring)) {
    echo "Chuỗi '{$substring}' là chuỗi con của chuỗi '{$string}'";
} else {
    echo "Chuỗi '{$substring}' không là chuỗi con của chuỗi '{$string}'";
}