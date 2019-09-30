<?php
 $a = 3;
 $b = 7;
 echo $a + $b;
?>
<?php
 $array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
 echo $array_month[7];
?>

<?php
 $hello = "Hello,";
 $name = "ユウキ";
 $world = "'s World!";
 echo $hello . $name . $world ;
?>

<?php
 $tech_boost = "tech ";
 $tech_boost .= "boost";
 echo $tech_boost;
?>

<?php
$calender_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
 echo $calender_2018 ["December"]; 

?>

<?php
  $name = "ゆう";
  if($name =="ゆうき") {
      echo "私は{$name}です";
  }else{
      echo "{$name}ではありません";
      echo "\n";
  }

?>
<?php
  $total = 0;
  
  for($i = 1; $i <= 10000; $i++) {
      $total += $i;
  }
  echo $total;
?>

<?php
  $fruits = array("apple","orange","peach","mango","berry");
  foreach($fruits as $fruit) {
  echo $fruit;
  echo "\n";
  }
  print_r($fruits);
?>
<?php
  $start = 1;
  $end = 100;
  
  for($i = $start; $i <= $end; $i++){
      if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
?>

<?php
  function sum($result) {
      echo $result * 2;
  }
     sum(2);
?>

<?php
  function f($a,$b) {
      echo $a + $b;
  }
     f(2,3);
?>

<?php
  function ar($arr) {
      $total = 1;
      foreach($arr as $a) {
      $total *= $a;
      }
      echo $total;
  }
      ar(array(1,3,5,7,9));
    echo "\n";
?>
<?php
  function max_array($arr) {
      $max_number =$arr[0];
      foreach($arr as $a) {
          if($max_number < $a){
             $max_number = $a;
          }
      }
      return $max_number;
  }
     echo max_array(array(1,2,9,4,5));
?>

<?php
$text = "<p>はじめまして</p>";
echo strip_tags($text);
echo "\n";

?>

<?php
  $fruits = array("apple","orange","peach");
  array_push($fruits,"mango","grape");
  print_r($fruits);
?>

<?php
  $value1 = array(1,2,3);
  $value2 = array(4,5,6);
  $value = array_merge($value1,$value2);
  print_r($value);
?>

<?php
  echo date("Y/m/d H:i:s",mktime(0,0,0,9,30,2019));

?>

<?php
  $date = time();  
  echo  $date;
  echo "\n";
?>

<?php
  echo date("Y年m月d日 H時i分s秒");

?>