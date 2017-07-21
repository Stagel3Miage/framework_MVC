<?php

class App
{
  protected $controller = 'home';

  protected $method = 'index';

  protected $params = [];


  /*public function __construct() {
    $this->doUrl();
  }*/

  public static function doUrl()
  {
      $url = App::parseUrl();

      echo " FILE = ". '../app/controllers/' . $url[0] . '.php';
     
      if (file_exists('../app/controllers/' . $url[0] . '.php'))
      {
        //echo "XXXXXXXXXXXXXXXXXXXXXXXx";
        $this->controller = $url[0];
        echo " CONTROLLER = " . $this->controller;
        unset($url[0]);
      }
      else {
        //echo "tsy mety";
      }
      require_once '../app/controllers/' . $this->controller . '.php';



      $this->controller = new $this->controller;


      if(isset($url[1]))
      {
          if(method_exists($this->controller, $url[1]))
          {
            $this->method = $url[1];
            echo " METHOD= " . $this->method;
            unset($url[1]);
          }
      }

      $this->params = $url ? array_values($url) : [];

      call_user_func_array([$this->controller, $this->method], $this->params);

  }


  public static function parseUrl()
  {

    if(isset($_GET['url']))
    {
      echo filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
      return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
  }

}
