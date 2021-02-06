<?php

// 課題1
function double_num($num) {
  return $num * 2;
}

echo double_num(4) . "\n";

// 課題2
function sum_two_num($a, $b) {
  return $a + $b;
}

echo sum_two_num(1, 2) . "\n";

// 課題3
function multi_array($arr) {
  $product = 1;
  foreach($arr as $num) {
    $product *= $num;
  }
  return $product;
}

$arr = [1, 3, 5, 7, 9];

echo multi_array($arr) ."\n";

// 課題4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    if ($max_number < $a) {
      $max_number = $a;
    }
  }
  return $max_number;
}

echo max_array($arr) . "\n";

// 課題5

// strip_tags 文字列からHTMLのタグを取り除く

$str = "<h1>タグを取り除いた見出し</h1>";
echo strip_tags($str) ."\n";

// array_push 配列に要素を追加
array_push($arr, 11, 13);
print_r($arr);

// array_merge 配列の結合 
$add_arr = [15, 17];
$merge_arr = array_merge($arr, $add_arr);
print_r($merge_arr);

// time UNIXタイムスタンプ（1970年1月1日午前0時0分0秒からの経過秒数)を取得
echo time() . "\n";

// mktime 指定した時刻のタイムスタンプを取得
echo mktime(1, 2, 3, 4, 5, 2021) . "\n";

// date 第二引数で指定したタイムスタンプを第一引数で指定したフォーマットで取得
//第二引数を省略した場合、現在日時
echo date("y/m/d h:i:s") . "\n";

?>