<?php
// Câu 1: Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
function countCharacters($string) {
    return strlen($string);
}
$string = "xinchao";
echo countCharacters($string);
echo '<br>';

// Câu 2: Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
function countWord($string) {
    return str_word_count($string);
}
$string = "xin chao";
echo countWord($string);
echo '<br>';

// Câu 3: Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
function reverseString($string) {
    return strrev($string);
}
$string = "xin chao";
echo reverseString($string);
echo '<br>';

//Câu 4: Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function searchSubstring($string,$substring) {
    return strpos($string,$substring);
}
$string = "xin chao";
$substring = "chao";
if (strpos($string,$substring) == true) {
    echo "Tim thay chuoi con tai vi tri" , strpos($string,$substring);
} else {
    echo "Khong tim thay chuoi con";
}
echo '<br>';
// Câu 5: Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
function replaceString($substring, $replacement, $string) {
    return str_replace($substring, $replacement, $string);
}
$string = "Xin Chao";
$substring = "Xin";
$replacement = "Khong";
echo replaceString($substring, $replacement, $string);
echo '<br>';
// Câu 6: Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
function startString($string, $substring) {
    return strpos($string, $substring) == 0;
}
$string = "Hello, World!";
$substring = "Hello";
if (startString($string, $substring)) {
    echo "Chuoi '$string' bat dau bang chuoi '$substring'";
} else {
    echo "Chuoi '$string' khong bat dau bang chuoi '$substring'";
}
echo '<br>';

// Câu 7: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper()
function uppercaseString($string) {
    return strtoupper($string);
}
$string = "xin chao";
echo uppercaseString($string) ; 
echo '<br>';

// Câu 8: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
function lowercaseString($string) {
    return strtolower($string);
}
$string = "XIN CHAO";
echo lowercaseString($string);
echo '<br>';

// Câu 9: Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
function firstLetter($string) {
    return ucwords($string);
}
$string = "xin chao";
echo firstLetter($string);
echo '<br>';

// Câu 10: viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
function trimmedString($string) {
    return trim($string);
}
$string = "   Xin Chao   ";
echo trimmedString($string);
echo '<br>';

// Câu 11: Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
function removeFirstLetter($string) {
    return ltrim($string, $string[0]);  // $string[0] kí tự đầu của chuỗi
}
$string = "xin chao";
echo removeFirstLetter($string);
echo '<br>';

// Câu 12: Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function removeLastLetter($string) {
    return rtrim($string, $string[strlen($string) - 1]);    // $string[strlen($string) - 1] kí tự cuối của chuỗi
}
$string = "xin chao";
echo removeLastLetter($string);
echo '<br>';

//Câu 13: Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function splitString($separator,$string)
{
    return explode($separator,$string);
}
$string = "Xin,Chao";
$separator = ",";   // dùng để chỉ định điểm tách chuỗi ban đầu thành các phần tử trong mảng
$result = splitString($separator,$string);
print_r($result);
echo '<br>';

//Câu 14: Viết ctrinh nối các phần tử của 1 mảng thành 1 chuỗi sdung hàm implode()
function convertToString($arr)
{
    $deli=',';
    echo implode($deli,$arr);
    echo '<br>';
}
convertToString(["Pham","Minh","Thai"]);
//Câu 15
function addString($st)
{
$pad_st='world';
$totalLen= strlen($st)+ strlen($pad_st);
echo str_pad($st, $totalLen, $pad_st, STR_PAD_LEFT);
echo '<br>';
echo str_pad($st, $totalLen, $pad_st, STR_PAD_RIGHT);
echo '<br>';
}
addString('hello');
// Câu 16
function endWith($pass, $ending)
{
    $length= strlen($ending);
    if($length==0){
        return true;
    }
    $end= substr($pass, -$length);
    return $end==$ending;
}
$pass='he is a teacher';
$ending='teacher';
if (endWith($pass, $ending)) {
    echo 'string finish with substring<br>';
}
else {
    echo 'string dont finish with substring<br>';
}
//Câu 17
function containSubstring ($content, $subContent) 
{
    $len= strlen($subContent);
    $contentLen= strlen($content);
    if ($len > $contentLen) {
        return false;
    }
    for ($i1= 0; $i1 <=($contentLen - $len); $i1++) {
        if (substr($content, $i1, $len)=== $subContent) {
            return true;
        }
    }
    return false;
}
$content='prototyping model has four types';
$subContent='model ';
if (containSubstring($content, $subContent)) {
    echo 'string contains substring<br>';
}
else {
    echo 'string dont contain substring<br>';
}
//Câu 18
function replaceNonAlphanumeric($rep, $replacement) 
{
    $pattern='/[^a-zA-Z0-9]/';
    echo preg_replace($pattern, $replacement, $rep);
    echo '<br>';
}
replaceNonAlphanumeric('phamminhthai.190902@','*');
//Câu 19
function isInteger($string19) 
{
    return ctype_digit($string19);
}
$string19 ='123456';
if (isInteger($string19)) {
    echo 'string is an integer<br>';
}
else {
    echo 'string is not an integer<br>';
}
//Câu 20
function isEmailValid($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL)!== false;
}
$email= "pmthai2002@gmail.com";
if (isEmailValid($email)) {
    echo 'email is validation<br>';
}
else {
    echo 'email is not validation<br>';
}
