<?php

class App
{
    //Assigned Default value 
    protected $controller = 'Login';

    protected $method = 'index';

    protected $params = [];



    public function __construct()
    {
        $url = $this->splitURL();
        // show($url);

        //check if the value input is existing 
        if(isset($url[0])) {
            //ucfirst is to set first letter to capital
            if(file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {

                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }else {
                // set if the inputted value is not existing 
                $this->controller = '_404';
            }
        }
            //default value is Home.php
        require '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        

        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {

                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];   
        call_user_func_array([$this->controller, $this->method], $this->params);
    }



    private function splitURL()
    {
        if (isset($_GET['url'])) {
            $url = (explode("/", trim($_GET['url'], "/")));
            return $url;
        }
    }
}