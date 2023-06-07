<?php
// Câu 1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không
function checkNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number là số lẻ.";
    }
}
checkNumber(4);  

// Câu 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n
function sum($n) {
    $sum = 0;
    
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }

    return $sum;
}
$n = 10;
$result = sum($n);
echo "Tổng các số từ 1 đến $n là: $result";
// Câu 3: Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function subtendMultiTable(){
    for($i = 1; $i <= 10; $i++) {
        for($j = 1; $j <=10; $j++) {
            echo "$i x $j = ". $i * $j;
            echo '</br>';
        }
    }
}
echo subtendMultiTable();
// Câu 4: Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function containsWord($string, $word) {
    $stringLength = strlen($string);
    $wordLength = strlen($word);
    if ($wordLength > $stringLength) {
      return false;
    }
    for ($i = 0; $i <= $stringLength - $wordLength; $i++) {
      $match = true;
      for ($j = 0; $j < $wordLength; $j++) {
        if ($string[$i + $j] !== $word[$j]) {
          $match = false;
          break;
        }
      }
      if ($match) {
        return true;
      }
    }
    return false;
  }
  $string = "Phạm M!nh Thái . 2002";
  $word = "Thái";
  if (containsWord($string, $word)) {
    echo "Chuỗi chứa từ '{$word}'";
  } else {
    echo "Chuỗi không chứa từ '{$word}'";
  }
// câu 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
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

  return ['min' => $min, 'max' => $max];
}

$array = [5, 2, 9, 1, 7, 4];
$result = findMinMax($array);

echo "Giá trị nhỏ nhất: " . $result['min'] . "<br>";
echo "Giá trị lớn nhất: " . $result['max'];
// Câu 6: Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortArray($arr) {
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
  $array = [5, 2, 9, 1, 7, 4];
  $sortedArray = sortArray($array);
  
  echo "Mảng sau khi sắp xếp: ";
  foreach ($sortedArray as $value) {
    echo $value . " ";
  }
// Câu 7: Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calculateFactorial($number) {
    if ($number < 0) {
      return "Không thể tính giai thừa của số âm";
    }
  
    $factorial = 1;
  
    for ($i = 1; $i <= $number; $i++) {
      $factorial *= $i;
    }
  
    return $factorial;
  }
  
  $number = 5;
  $result = calculateFactorial($number);
  
  echo "Giai thừa của {$number} là: {$result}";
// Câu 8: Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
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
  function findPrimesInRange($start, $end) {
    $primes = [];
  
    for ($i = $start; $i <= $end; $i++) {
      if (isPrime($i)) {
        $primes[] = $i;
      }
    }
    return $primes;
  }
  $start = 1;
  $end = 20;
  $primeNumbers = findPrimesInRange($start, $end);
  echo "Các số nguyên tố từ {$start} đến {$end} là: ";
  foreach ($primeNumbers as $prime) {
    echo $prime . " ";
  }
// Câu 9: Viết chương trình PHP để tính tổng của các số trong một mảng.
function calculateSum($arr) {
    $sum = 0;
    $length = count($arr);
    for ($i = 0; $i < $length; $i++) {
      $sum += $arr[$i];
    }
    return $sum;
  }
  
  $array = [5, 2, 9, 1, 7, 4];
  $result = calculateSum($array);
  echo "Tổng của các số trong mảng: " . $result;
// Câu 10: Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function generateFibonacci($n) {
  $fibonacci = [];
  $fibonacci[0] = 0;
  $fibonacci[1] = 1;

  for ($i = 2; $i < $n; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
  }

  return $fibonacci;
}
$n = 10;
$fibonacciNumbers = generateFibonacci($n);

echo "Các số Fibonacci trong khoảng từ 0 đến {$n}: ";
foreach ($fibonacciNumbers as $fibonacci) {
  echo $fibonacci . " ";
}
// Câu 11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function checkArmstrongNum($number) {
  $sum = 0;
  $temp = $number;

  while ($temp != 0) {
    $remainder = $temp % 10;
    $sum += $remainder ** 3;
    $temp = (int)($temp / 10);
  }

  return $sum == $number;
}
$number = 123;
if (checkArmstrongNum($number)) {
  echo "{$number} là số Armstrong";
} else {
  echo "{$number} không phải là số Armstrong";
}
// Câu 12: Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
    $length = count($array);
  
    if ($position < 0 || $position > $length) {
      return "Vị trí chèn không hợp lệ";
    }
  
    for ($i = $length; $i > $position; $i--) {
      $array[$i] = $array[$i - 1];
    }
  
    $array[$position] = $element;
  
    return $array;
  }
  $array = [1, 2, 7, 4, 20];
  $element = 10;
  $position = 3;
  $result = insertElement($array, $element, $position);
  if (is_array($result)) {
    echo "Mảng sau khi chèn phần tử: ";
    foreach ($result as $value) {
      echo $value . " ";
    }
  } else {
    echo $result;
  }
// Câu 13: Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($array) {
  $result = array();
  $length = count($array);

  for ($i = 0; $i < $length; $i++) {
    if (!in_array($array[$i], $result)) {
      $result[] = $array[$i];
    }
  }

  return $result;
}
$array = [1, 2, 2, 2, 7, 1, 3, 3, 5,1,8];
$result = removeDuplicates($array);
echo "Mảng sau khi loại bỏ phần tử trùng lặp: ";
foreach ($result as $value) {
  echo $value . " ";
}
//Câu 14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findPosition($array, $element)
{
    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] === $element) {
            return $i; // Trả về vị trí nếu tìm thấy phần tử
        }
    }
    return -1; // Trả về -1 nếu không tìm thấy phần tử
}

$numbers = [1, 4, -12, 5, 19, 0, -7];
$element = 5;
$position = findPosition($numbers, $element);

if ($position !== -1) {
    echo "Vị trí của phần tử $element trong mảng là: $position";
} else {
    echo "Không tìm thấy phần tử $element trong mảng";
}
//Câu 15: Viết chương trình PHP để đảo ngược một chuỗi.
function reverseStr($str) {
    $length = strlen($str);
    $reversed = '';
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}
$string = "xin chào moi nguoi";
$reversedStr = reverseStr($string);
echo $reversedStr;
//Câu 16: Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($array) {
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        $count++;
    }
    return $count;
}

$myArray = [-5,2,8,10,12,1];
$count = countElements($myArray);
echo "Số lượng phần tử trong mảng là: " . $count;
//Câu 17: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($str) {
    $length = strlen($str);
    $isPalindrome = true;
    for ($i = 0; $i < $length / 2; $i++) {
        if ($str[$i] !== $str[$length - $i - 1]) {
            $isPalindrome = false;
            break;
        }
    }
    return $isPalindrome;
}

$string1 = "racecar";
$string2 = "hi";

if (isPalindrome($string1)) {
    echo "$string1 là chuỗi Palindrome";
} else {
    echo "$string1 không là chuỗi Palindrome";
}
//Câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccur($array, $element) {
    $count = 0;
    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] === $element) {
            $count++;
        }
    }
    return $count;
}
$myArray = [0, 2, 1, 4, 5, 2, 5, 7];
$element = 2;
$occur = countOccur($myArray, $element);
echo "Số lần xuất hiện của phần tử $element trong mảng là: " . $occur;
// Câu 19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortDescend($array) {
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

$myArray = [5, 3, 9, 1, 7];
$sortedArray = sortDescend($myArray);
echo "Mảng sau khi sắp xếp giảm dần là: ";
foreach ($sortedArray as $element) {
    echo $element . " ";
}
//Câu 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElementToArray($array, $element, $position) {
  $length = count($array);
  $newArray = [];
  if ($position === 'start') {
      $newArray[0] = $element;
      for ($i = 0; $i < $length; $i++) {
          $newArray[$i + 1] = $array[$i];
      }
  } elseif ($position === 'end') {
      for ($i = 0; $i < $length; $i++) {
          $newArray[$i] = $array[$i];
      }
      $newArray[$length] = $element;
  }
  return $newArray;
}
$myArray = [1, 9, 3, 7];
$element = 0;
// Thêm phần tử vào đầu mảng
$newArrayStart = addElementToArray($myArray, $element, 'start');
echo "Mảng sau khi thêm phần tử vào đầu là: ";
foreach ($newArrayStart as $item) {
  echo $item . " ";
}
echo "<br>";
// Thêm phần tử vào cuối mảng
$newArrayEnd = addElementToArray($myArray, $element, 'end');
echo "Mảng sau khi thêm phần tử vào cuối là: ";
foreach ($newArrayEnd as $item) {
  echo $item . " ";
}
//Câu 21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($arr) {
    $n = count($arr);
    if ($n < 2) {
        echo "Mảng không đủ phần tử.";
        return;
    }

    $largest = $arr[0];
    $secondLargest = $arr[0];

    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $arr[$i];
        } elseif ($arr[$i] < $largest && $arr[$i] > $secondLargest) {
            $secondLargest = $arr[$i];
        }
    }

    if ($secondLargest == $arr[0]) {
        echo "Không tìm thấy số lớn thứ hai.";
    } else {
        echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
    }
}
$array = [5, 2, 8, 10, 1, 9];
findSecondLargest($array);
//Câu 22: Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findBSCNN($a, $b) {
    $uscln = findUSCLN($a, $b);
    $bscnn = ($a * $b) / $uscln;
    return $bscnn;
}

$num1 = 15;
$num2 = 18;

echo "Ước số chung lớn nhất của $num1 và $num2 là: " . findUSCLN($num1, $num2) . "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . findBSCNN($num1, $num2) . "<br>";

//Câu 23: Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNum($number) {
  if ($number <= 0) {
      return false;
  }
  $sum = 0;
  for ($i = 1; $i <= $number / 2; $i++) {
      if ($number % $i == 0) {
          $sum += $i;
      }
  }
  if ($sum == $number) {
      return true;
  } else {
      return false;
  }
}
$number = 25;
if (isPerfectNum($number)) {
  echo "$number là một số hoàn hảo.";
} else {
  echo "$number không phải là một số hoàn hảo.";
}
//Câu 24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($arr) {
  $largestOddNumber = null;

  foreach ($arr as $number) {
      if ($number % 2 != 0) { 
          if ($largestOddNumber === null || $number > $largestOddNumber) {
              $largestOddNumber = $number;
          }
      }
  }

  return $largestOddNumber;
}

$array = [2, 5, 9, 12, 7, 4, 11];
$largestOddNumber = findLargestOddNumber($array);
if ($largestOddNumber !== null) {
  echo "Số lẻ lớn nhất trong mảng là: " . $largestOddNumber;
} else {
  echo "Không tìm thấy số lẻ trong mảng.";
}
//Câu 25: Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
$number = 11;
if (isPrime($number)) {
    echo "{$number} là số nguyên tố";
} else {
    echo "{$number} không là số nguyên tố";
}
//Câu 26: Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findMaxPositiveNum($arr) {
  $maxPositiveNum = null;

  foreach ($arr as $number) {
      if ($number > 0) { // Kiểm tra số dương
          if ($maxPositiveNum === null || $number > $maxPositiveNum) {
              $maxPositiveNum = $number;
          }
      }
  }

  return $maxPositiveNum;
}

$array = [-2, 5, -9, 12, 7, 4, 11];
$maxPositiveNum = findMaxPositiveNum($array);

if ($maxPositiveNum !== null) {
  echo "Số dương lớn nhất trong mảng là: " . $maxPositiveNum;
} else {
  echo "Không tìm thấy số dương trong mảng.";
}
//Câu 27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findMaxNegativeNumber($arr) {
  $maxNegativeNumber = null;

  foreach ($arr as $number) {
      if ($number < 0) { // Kiểm tra số âm
          if ($maxNegativeNumber === null || $number > $maxNegativeNumber) {
              $maxNegativeNumber = $number;
          }
      }
  }

  return $maxNegativeNumber;
}

$array = [-1, 5, -5, 12, -9, 4, -11];
$maxNegativeNumber = findMaxNegativeNumber($array);

if ($maxNegativeNumber !== null) {
  echo "Số âm lớn nhất trong mảng là: " . $maxNegativeNumber;
} else {
  echo "Không tìm thấy số âm trong mảng.";
}
//Câu 28: Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOddNumbers($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }

    return $sum;
}
$n = 14;
$sum = sumOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến {$n} là: " . $sum;
// Câu 29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end) {
    $perfectSquares = [];

    for ($i = $start; $i <= $end; $i++) {
        $sqrt = sqrt($i);
        if ($sqrt == (int)$sqrt) {
            $perfectSquares[] = $i;
        }
    }

    return $perfectSquares;
}
$start = 1;
$end = 50;
$perfectSquares = findPerfectSquares($start, $end);
if (!empty($perfectSquares)) {
    echo "Các số chính phương trong khoảng từ $start đến $end là: ";
    foreach ($perfectSquares as $square) {
        echo $square . " ";
    }
} else {
    echo "Không tìm thấy số chính phương trong khoảng từ $start đến $end.";
}
// Câu 30: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($string, $substring) {
    $stringLength = strlen($string);
    $substringLength = strlen($substring);
    if ($substringLength > $stringLength) {
        return false;
    }
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $match = true;
        for ($j = 0; $j < $substringLength; $j++) {
            if ($string[$i + $j] !== $substring[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            return true;
        }
    }
    return false;
}
$string = "Pham Minh Thai";
$substring = "Minh";
if (isSubstring($string, $substring)) {
    echo "$substring là một chuỗi con của $string.";
} else {
    echo "$substring không phải là một chuỗi con của $string.";
}
?>





