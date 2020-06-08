<?php

namespace KomAuras\Evelo;

use KomAuras\Evelo\Tools;

class Evelogin
{
    public function show(String $Name)
    {
        $class = new Tools\SuperString();
        return 'Привет ' . $Name . '<br>Длинна вашего имени (символов): ' . $class->len($Name);
    }
}
