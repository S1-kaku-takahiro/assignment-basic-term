<?php
// 課題1
$a = 3;
$b = 7;

echo $a + $b;
echo "\n";

// 課題2
for ($num = 0; $num < 12; $num++) {
  $array_month[$num] = $num + 1 . "月";
}

echo $array_month[7] . "\n";

// 課題3
$hello = "Hello, ";
$name = "Takahiro";
$world = "'s World!";

echo $hello . $name . $world . "\n";

// 課題4
$tech_boost = "tech ";
$tech_boost .= "boost";

echo $tech_boost . "\n";

// 課題5
/* 訂正箇所
変数名$2018_calendar => $calendar_2018
配列の囲み{} => []
"2月"の後 読点 => コンマ
6月のキーと要素の間の=を=>に変更
10月をダブルクオートで囲む
echoで取り出すときの配列のキーをダブルクオートで囲む
*/

$calendar_2018 = [
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

// 12月を表示する
echo $calendar_2018["December"] . "\n";

