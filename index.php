<?php
// $num=12347878;
// $index =4;
// $str=(string)$num;
// echo($index<strlen($str) ? ($str[$index]%2==0 ? "Chentoye":"Nechet"):"Not Valid");
// if($str[$index]%2==0){
//     echo
// }
// else{
//     echo "Nechenoye";
// }
// }
// else{
//     echo "TooMuch"
// }
// $str =(string)$num;
//  echo $str[0]+$str[1]+$str[2];
// $str1="hulahup ";
// echo $str+"man 50"+5;
//$num =123;
// echo gettype($num);
// if(is_int($num)){
//     echo "true";
// }
//  $arr=["Kuplinov","Lexa","Varuchan"];
//  $new=$arr[0] . " " . $arr[1][0] . ". " . $arr[2][0] . ".";
//  echo $new;
// $arr[]="BTOOM";
// echo $arr[4];

// $person=["name"=>"Leha"];
// echo $person["name"];
// $a="0";
// if(strlen($str)>10){
//     echo "More 10";
// }
// else{
//     echo "Less 10";
// }

// $a=3;
// echo($a==5 ? "equal": "not equal");
//$a=6;
//
//switch($a){
//    case $a<6:
//        echo "Budniy";
//        break;
//    case $a>5:
//        echo "Vihodnoy";
//        break;
//    default:
//        echo "error";
//        break;
//}

///////////////////////////////////
//$count = 0;
//
//for ($i = 0; $i < rand(1, 20); $i++) {
//    $arr[] = rand(0, 100);
//    for ($j = 0; $j < rand(0, 6); $j++) {
//        $arr[$i][] = rand(0, 10);
//    }
//}
//
//for ($i = 0; $i < count($arr);$i++) {
//    for ($j = 0; $j < count($arr[$i]); $j++) {
//        if ($arr[$i][$j] % 2 == 0) {
//            $count++;
//        }
//    }
//}
//$num = 45456456;
//$str = (string)$num;
//$str2 = "";
//for ($i = 0; $i < strlen($str); $i++) {
//    $str2 .= $str[$i] * 2;
//}
//echo $str2;

//$n = 2;
//$number = 3;
//for ($i = 1; $i <= $number; $i++) {
//    $res = 1;
//    for ($j = 1; $j <= $n; $j++) {
//        $res *= $i;
//    }
//    echo $res;
//
//}

///////////////////////////////////////////////////////
//$arr =[[1,2,3,4]];
//foreach ($arr as &$item){
//    $item*=2;
//}
//$person=["name"=>"Leha",
//        "first_name"=>"Petrov"];
//foreach ($person as $key=>$value){
//    echo $key . $value;
//}
//var_dump($arr);

//function myCount(string $str)
//{
//    $a = 0;
//    while (isset($str[$a])) {
//        $a++;
//    }
//    return $a;
//}

//function char_replace(string $search, string $replace, string $str)
//{
//    $str1 = "";
//    if (strlen($str) > strlen($search)) {
//        for ($i = 0; $i < strlen($str); $i += strlen($search)) {
//            for ($j = $i; $j < strlen($search); j++){
//                $str1 .= $str[$j];
//            }
//            if ($str1 == $search)
//        }
//    }
//}
//function sortString(string $str){
//
//}
//
//
//$str = "dsfgsfsdfsf";
//
//echo myCount($str);
//////////////////////////////////////////////////
//echo (int)$_GET["my_var"];
//echo $_GET["name"];
include "./classes/MyClass.php";
include "./classes/Number.php";
include "./classes/Worker.php";
include "./classes/Tag.php";
//$workerFirst = new Worker("Ivan",10,110);
//while ($workerFirst->isAlive()){
//    $workerFirst->growUp();
//
//    echo "Age: " . $workerFirst->getAge() . " Height:" . $workerFirst->getHeight() . "</br>";
//    $workerFirst->randomDeath();
//}
$featured = array("href" => "//link", "target" => "_blank");
$tag=new Tag("a",true);
$tag->setAttributes($featured);
$tag->setAttribute("href", "//google.com");
$tag->setBody("I m aaa");
echo $tag->getString();




