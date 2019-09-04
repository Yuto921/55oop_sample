<?php

// ピカチュウの設計図が書かれたファイルの読み込み
require_once ('Pikachu.php');
require_once ('team.php');
require_once ('SuperSaiyan.php');

// ピカチュウの設計図をもとに、実態を作成
// インスタンス化( new クラス名() )
$pikachu1 = new Pikachu(10, 20);

// クラスをもとにつくったピカチュウの操作
// プロパティとかメソッドの使い方

// ピカチュウ1にHP100を設定する ->(アロー演算子)
$pikachu1->hp = 100;

// ピカチュウ1にMP50を設定する
$pikachu1->mp = 50;

// 画面にピカチュウ1のHPとMPを表示
echo 'ピカチュウのHPは、';
echo $pikachu1->hp;
echo '<br>';

echo 'ピカチュウのMPは、';
echo $pikachu1->mp;
echo '<br>';


// メソッド(振る舞い)の実行
// サンダーボルトの実行
$pikachu1->thunderVolt();
echo $pikachu1->mp;
echo '<br>';


// アイアンテールの実行
$pikachu1->ironTail();


$pikachu2 = new Pikachu(20, 40);
$pikachu2->hp = 500;
$pikachu2->mp = 1500;

echo 'ピカチュウ2のHPは、';
echo $pikachu2->hp;
echo '<br>';
echo 'ピカチュウ2のMPは、';
echo $pikachu2->mp;
echo '<br>';

echo '<br>';


// ピカチュウ3の作成
// new Pikachu ()に引数があると、まず、コンストラクタの処理が実行される
$pikachu3 = new Pikachu(999, 50);

echo 'ピカチュウ3のHPは';
echo $pikachu3->hp;


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



// チームのポケモン

$mimikyu = new Mimikyu();

$mimikyu->hp = 100;
$mimikyu->hp = 100;
$mimikyu->deathblow = 0;

$migawari = 'ピカチュウ';

$mimikyu->migawari($migawari);

$enemy = 'しゅんや';

$mimikyu->shadowClaw($enemy);

$mimikyu->recovery();

echo 'hpは、'.$mimikyu->hp ;
echo '<br>';
echo 'mpは、'.$mimikyu->mp ;
echo '<br>';
echo '必殺技ゲージは、'.$mimikyu->deathblow ;
echo '<br>';



$goku = new SuperSaiyan(100, 100);
echo $goku->hp;
echo $goku->angry();

$shinka = 'しゅんや';
echo $goku->shinka($shinka);

$goku->kamehameha();
$goku->kamehameha();
$goku->kamehameha();

$goku->shinka($shinka);

$goku->kamehameha();

$goku->shinka($shinka);



