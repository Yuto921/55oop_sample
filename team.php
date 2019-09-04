<?php

class Mimikyu
{
    public $hp;
    public $mp;
    public $deathblow; // 必殺わざ

    function migawari($migawari)
    {
        echo '身代わりを発動した。';
        $this->mp -= 10;
        echo $migawari . 'を身代わりとした';

        $this->deathblow += 10;
        echo '<br>';
    }

    function recovery()
    {
        echo '自己回復した。';
        $this->hp += 50;
        $this->mp += 50;

        $this->deathblow += 10;
        echo '<br>';
    }

    function shadowClaw($enemy)
    {
        echo  $enemy. 'に、シャドークローを発動した';
        $this->mp -= 30;

        $this->deathblow += 10;
        
        echo '<br>';
    }
}