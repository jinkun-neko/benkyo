<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $p = trim(fgets(STDIN));
    
    $array = array();
    $flour = array();
    while ($s = trim(fgets(STDIN))){
        // 通常の配列おそらく比べるように配列を取っておく
        $flour[] = $s; 
        // この配列で回転させたりすることで、判定できるようにする。
        $array[] = str_split($s);
    }
    
    // p回for文を回す
    for($i=0;$i<$p;$i++){
        $back_array = end($array[1]);
        // 後ろの取得した配列を取得するが、後ろの配列を削除しないと
        array_pop($array[1]);
        // 配列の先頭に要素を追加 
        array_unshift($array[1], $back_array);
        $kansei = implode($array[1]);
        // if文で全くおんなじになった場合if文に入りブレイク
        if ($flour[0] == $kansei){
            echo "Yes";
            break;
        // else if で$iと$pの数が一緒に"Noを出力するようにする。"
        }else if($i == $p - 1){
            echo "No";
        }
    }
?>