<?php

class SuperSaiyan
{
    public $hp;
    public $mp;
    public $energy;

    public function __construct($hp, $mp)
    {
        echo "スーパーサイヤ人が作られました。";
        echo "<br>";
        $this->hp = $hp;
        $this->mp = $mp;
        $this->energy = 0;
        echo "・現在のHPは、". $this->hp;
        echo "<br>";
        echo "・現在のMPは、". $this->mp;
        echo "<br>";
        echo "・現在のエナジーは、". $this->energy;
        echo "<br>";
        echo "<br>";
    }

    function angry()
    {
        $this->energy +=10;
        echo "You mean Kuririn! <br> クリリンのことかーー！！！";
        echo '<br>';
        echo "・現在のHPは、". $this->hp;
        echo "<br>";
        echo "・現在のMPは、". $this->mp;
        echo "<br>";
        echo "・現在のエナジーは、". $this->energy;
        echo "<br>";
        echo "<br>";
    }

    function kamehameha()
    {
        $this->mp -= 10;
        $this->energy += 5;
        echo "かめ・はめ・は〜〜〜！！";
        echo '<br>';
        echo "・現在のHPは、". $this->hp;
        echo "<br>";
        echo "・現在のMPは、". $this->mp;
        echo "<br>";
        echo "・現在のエナジーは、". $this->energy;
        echo "<br>";
        echo "<br>";
    }

    
    function shinka($shinka)
    {
        if($this->energy >= 30){
            $this->hp = 10000;
            $this->mp = 5000;
            echo $shinka."サイヤ人に進化した";
            $this->energy = 0;

            echo '<br>';
            echo "・現在のHPは、". $this->hp;
            echo "<br>";
            echo "・現在のMPは、". $this->mp;
            echo "<br>";
            echo "・現在のエナジーは、". $this->energy;
            echo "<br>";
            echo "<br>";
        } else {
            $rest = 30 - $this->energy;
            echo $shinka."サイヤ人にまだ進化できません";
            echo "残り" . $rest . "エナジーで進化できます";
            echo '<br>';
            echo "・現在のHPは、". $this->hp;
            echo "<br>";
            echo "・現在のMPは、". $this->mp;
            echo "<br>";
            echo "・現在のエナジーは、". $this->energy;
            echo "<br>";
            echo "<br>";
        }
    }
    
}