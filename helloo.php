<?php
$name = Homare;

if($name==Daichi){
  echo "私はDaichiです";
}else{
  echo "Daichiではありません";
}

for($i = 1;$i<10000;$i++){
  echo $i."\n";
}

$fruits=array("banana","aple","mwron","suika","orange");

foreach($fruits as $fruit){
  echo $fruit."\n";
}


$start = 1;

$end = 100;

for($i = $start; $i < $end; $i++){

  if($i % 5 == 0){
    echo $i;
  }
}





?>
