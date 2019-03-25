<?php

class Autoloader
{
    public static function loadClass($className)
    {
      if (substr($className, -10) == 'Controller') {
        require __DIR__ . '/../controllers/' . $className . '.php';
      }elseif (substr($className, -5) == 'Model') {
        require __DIR__ . '/../models/' . $className . '.php';
      }else {
        require $className . '.php';
      }
    }
}
