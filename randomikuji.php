<?php

$omikuji = array(
  1 => "大吉",
  2 =>"中吉",
  3 =>"小吉",
  4 =>"吉",
  5 =>"凶",
  6 =>"大凶"
);

function omikujiRand($array){
  $count = count($array);
  $rand = rand(1,$count);
  foreach($array as $key => $value){
    if ($key == $rand){
      if($key == 1){
        echo $value.です！."\n"."やったね！";
      }else if($key == 2){
        echo $value.です！."\n"."まあまあ";
      }else if($key == 3){
        echo $value."\n"."なんとなく良さそう";
      }else if($key == 4){
        echo $value."\n"."ギリセーフ";
      }else if($key == 5){
        echo $value."\n"."残念、、";
      }else if($key == 6){
        echo $value."\n"."まあ逆に？？";
      }else{
        echo $value;
      }
    }
  }
}

  echo omikujiRand($omikuji);

?>

