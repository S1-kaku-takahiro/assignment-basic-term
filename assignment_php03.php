<?php

// 課題1
$name = "Takahiro";

if ($name == "Takahiro") {
  echo "私は $name です\n";
} else {
  echo "あなたの名前ではありません\n";
}

// 課題2
$total = 0;

for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}

echo $total;
echo "\n";

// 課題3
$fruits = ["orange", "watermelon", "pear", "grape", "chestnut"];

foreach($fruits as $fruit) {
  echo $fruit . "\n";
}

// 課題4
/* 訂正箇所
・初めの値を定義する部分のコメントを修正
・for文のループ継続条件を < から <= に修正
・if文の処理内容に改行とセミコロン;追加
*/

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i . "\n";
  }
}