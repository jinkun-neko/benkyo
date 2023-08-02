
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    list($N,$c1,$c2) = explode(" ",trim(fgets(STDIN)));
    
    // var_dump($N,$c1,$c2);
    
    $total = 0;
    $kabu = 0;
    for($i=0;$i<$N;$i++){
        $V = trim(fgets(STDIN));
        
        // $Vは株価 $c_1 (110)購入する値段
        if($V <= $c1){
            $kabu += 1;
            $total -= $V;
        }else if($V >= $c2){
            $total += $V * $kabu;
            $kabu = 0;
        }
        // 最終日に売却
        if($i === $N - 1){
            $total += $V * $kabu;
            $kabu = 0;
        }
    }
    
    echo $total;
    
?>