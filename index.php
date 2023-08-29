<?php
//code php here
$x = 10;
$x = "Hello";
echo $x;

$arr = [];
$arr[] = 10;
$arr[] = "Hello";
$arr[] = true;

for ($i=0; $i<count($arr); $i++) {

}
foreach ($arr as $item) {

}

$sv = [];
$sv["name"] = "Nguyen Van A";
$sv["age"] = 18;

$teacher = [
    "fullname"=> 'dang van toan',
    "age" => 22,
    "email"=> "dangvantoan@gmail.com"
];
echo '<ul>';
foreach ($teacher as $k=>$v) {
  echo '<li>' .$k."=".$v."</li>";
}
echo '</ul>';
echo '<br/>';
echo "Ten giao vien:".$teacher["fullname"];
echo '<pre>';
print_r($teacher);
echo '</pre>';

function tinhTong($a,$b) {
    echo $a+$b;
}
tinhTong(3,6);
