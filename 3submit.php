<?php

$dsn = 'sqlite:./db/db_file.sqlite3';



$input = $_POST["message"];
if ($input == "%"){

print "メッセージありがとうございます！ほかのボタンも遊んでみてください！";
print "<br>";
print "<br>";
print '<img src="assets/img/step3/messagephp.png" class="img-fluid" alt="">';
}


$yt = $_POST["youtube"];
$tw = $_POST["twitter"];
$ig = $_POST["instagram"];

if ($yt== "on" or $tw == "on" or $ig == "on"){
    if ($yt == "on"){
        print "YouTube";
        print "<br>";
    }

    if ($tw == "on"){
        print "twitter";
        print "<br>";
    }

    if ($ig == "on"){
        print "instagram";
        print "<br>";
    }
    print '<img src="assets/img/step3/messagephp.png" class="img-fluid" alt="">';
}

$waza = $_POST["waza"];
if ($waza == "10万ボルト" or $waza = "アイアンテール" or $waza =="ボルテッカー" or $waza == "なきごえ"){
    if ($waza == "10万ボルト"){
        print "10万ボルト";
    } else if ($waza =="アイアンテール"){
        print "アイアンテール";
    } else if ($waza == "ボルテッカー"){
        print "ボルテッカー";
    }else if ($waza == "なきごえ"){
        print "なきごえ";
    }
    print "<br>";
    print '<img src="assets/img/step3/messagephp.png" class="img-fluid" alt="">';
    print "<br>";
    print '<a href="http://127.0.0.1:8080/lamp20/step3.html">戻る</a>';
}


?>