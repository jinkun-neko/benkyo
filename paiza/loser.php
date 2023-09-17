
<?php
    list($N,$M) = explode(" ", trim(fgets(STDIN)));
    
    $rank = array();
    for ($i = 0; $i < $N; $i++) {
      $rank[] = explode(" ", trim(fgets(STDIN)));
      // 平均の処理
      $average[] = array_sum($rank[$i]) / count($rank[$i]);
    }
    
    // 昇順にアソートして順位順にする
    asort($average);
    
    // 3位以下の配列だけ残す処理
    $count = 0;
    foreach ($average as $ave_k => $ave_v){
      unset($average[$ave_k]);
      // カウントが2になった時点で終了（3位）
      if($count == 2){
          break;
      }
      $count += 1;
    }
    
    $loser_count = array();
    // foreachして3以上の点数があるバリューに対し
    foreach ($average as $ave_k => $ave_v){
      foreach ($rank[$ave_k] as $value){
        if($value <= 3) {
          $loser_count[] = $ave_k;
        }  
      }
    }
    
    echo count($loser_count);
?>