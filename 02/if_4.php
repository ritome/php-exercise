<?php 

// score_math、score_inglishともに60以上の数字が入力された場合
// score_math、score_inglishのどちらかが30点以上、60点未満の数字が入力された場合
// score_math、score_inglishともに30点以下の数字が入力された場合

$score_math = 50;
$score_english = 24;

if ($score_math >= 60 && $score_english >= 60) {
    echo '合格';
} elseif ($score_mat >= 30 || $score_mat < 60 || $score_english >= 30 || $score_english < 60) {
    echo '再試験';
} elseif ($score_math < 30 && $score_english < 30) {
    echo '不合格';    
}
