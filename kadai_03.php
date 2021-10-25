<<?php
$name = "hayato";
if($name == "hayato"){
 echo "私はあなたの名前です";
 echo "\n";
}else{
 echo "あなたの名前ではありません";
 echo "\n";
}

$total = 0;
echo $total;

for ($i = 0; $i <= 1000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

$fruits = array("りんご", "なし", "ぶどう", "れもん", "みかん");

foreach($fruits as $fruits){
  echo "好きなフルーツは" . $fruits;
  echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

 ?>
