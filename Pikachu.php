<?php

// クラス(設計図)の構文
/*
class クラス名 
{

}
*/

// ピカチュウクラス(設計図)
class Pikachu
{
    // 属性: プロパティ
    // - HP 
    // - MP
    // HPとかそれぞれ違うけど、どのピカチュウも持ってるよね

    // 振る舞い: メソッドともいう(関数)
    // - 10万ボルト(サンダーボルト)
    // - アイアンテール

    // HP
    public $hp;

    // MP
    public $mp;



    // コンストラクタ
    // インスタンス化した時に呼ばれる(インスタンス化するときに引数がないとエラーがでる→全員がHPとMPが設定された状態で作られるメソッド)
    // new Pikachu()　をした時に呼ばれる
    // Pikachu(ここにコントラクトで指定した引数を入れる)
        /* わざわざ、毎回 $pikachu->hp = 100; とかしなくていい　*/
    
    public function __construct($hp, $mp) {
        echo 'ピカチュウが生まれた';
        echo '<br>';

        // $this: インスタンスのことを指している
        // 今回の場合は、生まれたピカチュウ
        $this->hp = $hp;
        $this->mp = $mp;
    }






    
    // サンダーボルト
    function thunderVolt()
    {
        echo 'サンダーボルトを発動した';
        // クラスをもとにインスタンスした実体のことをthisは指している
        $this->mp -= 10;
        echo '<br>';
    }

    // アイアンテール
    function ironTail()
    {
        echo 'アイアンテールを発動した';
        echo '<br>';
    }


}