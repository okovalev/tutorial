<?php

class Router
{
    private $controller;
    private $action;
    private $params;

    public function __construct()
    {
        $this->controller = filter_input(INPUT_GET, 'controller');
        $this->action = filter_input(INPUT_GET, 'action');
        $this->params = filter_input(INPUT_GET, 'params');

        if (!$this->controller) {
            $this->controller = 'main';
        }

        if (!$this->action) {
            $this->action = 'first';
        }

        if (!$this->params) {
            $this->params = [];
        } else {
            $this->params = explode(';', $this->params);
        }
    }

    public function exec()
    {
        $controllerName = ucfirst(strtolower($this->controller)) . 'Controller';
        $action = strtolower($this->action);

        $controller = new $controllerName(); //Main ...
        $result = $controller->$action(...$this->params);
        
        return $result;

    }
}
