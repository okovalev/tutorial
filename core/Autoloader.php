<?php

class Autoloader 
{
    public static function loadClass($className) 
    {
        require $className . '.php'; //Main.php
    }
}