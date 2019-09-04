<?php

// 関数名: echo Hello
// 処理: 画面に"Hello"と出力する

function echoHello() {
    echo "Hello";
}

echoHello();



function echoUserName($username) {
    echo "私は、" . $username . "です。";
}

$username = "taro";

echoUserName($username);


//クラス: Human
//プロパティ: name
//メソッド: echoUserName
// -処理: 「私は〇〇(自分の名前)です。」

class Human
{
    public $name;

    public function echoUserName($name) {
        echo "私は、" . $name . "です。";
    }
}


$yuto = new Human();

$name = "yuto";

$yuto->echoUserName($name);

// Human::$this->name('yuto');