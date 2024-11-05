<?php
class App
{
    protected $controller = "home";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        // var_dump($url);
        //cek controller
        if (!empty($url) && file_exists("../app/controllers/" . $url[0] . ".php")) {
            $this->controller = $url[0];
            unset($url[0]);
            // var_dump($url);
        }

        require_once("../app/controllers/" . $this->controller . ".php");
        $this->controller = new $this->controller;

        //cek method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //cek parameter 
        if (!empty($url)) {
            $this->params = $url;
        }

        //memanggil controller, method, dan params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseURL()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
