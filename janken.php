<?php

$dsn = 'sqlite:./db/db_file.sqlite3';


$input = 1;
$enemy = rand(0, 2);
$janken = ["グー", "パー", "チョキ"];

print "あなたは $janken[$input] を出しました。私は $janken[$enemy] を出しました。<br>";
print "判定は… ";

// 第２問：$input変数を使ってジャンケンをできるように、入力の処理を書いてみましょう。
if ($input == $enemy) {
    print "あいこです！もう一度戻って決着をつけましょう。。。！";
    print '<a href="http://127.0.0.1:8080/lamp20/step3.html">戻る</a>';
} else if (($input==1 and $enemy==0) or
           ($input==0 and $enemy==2) or
           ($input==2 and $enemy==1)){
    print "あなたの勝ち。おめでとうございます！";
    print '<a href="http://127.0.0.1:8080/lamp20/step3.html">戻る</a>';
} else {
    print "残念。。。負けてしまいました。もう一度チャレンジしましょう！";
    print '<a href="http://127.0.0.1:8080/lamp20/step3.html">戻る</a>';
}

?>