<?php
//создаем класс роутер
class Router{

    private $routes;

    public function __construct()      
    {
        //определяем путь к файлу с маршрутами (массив с маршрутами)
        $routesPath= ROOT.'/config/routes.php';
        //подключаем файл с маршрутами
        $this->routes = include($routesPath);
    }

    /*
    rerurn request string
    */
    private function getURI(){
        //получаем строку с адресом, которую ввел пользователь в адресной строке
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/?');

        }
    }

    public function run(){
              //получаем результат работы метода getURI         
            $uri=$this->getURI();                  
        
            //сравниваем то что ввел пользователь с нашими маршрутами
            foreach ($this->routes as $uriPattern => $path) {
             //  echo "<br> $uriPattern -> $path ";
         
              //если совпадает, тогда
            if(preg_match("~$uriPattern~", $uri)){               
          /*
                echo '<br> Где ищем (запрос, который набрал пользователь): ' . $uri;
                echo '<br> Что ищем (совпадение из правил): ' . $uriPattern;
                echo '<br> Кто обрабатывает: '. $path;
            */
                //получаем внутренний путь из внешнего согласно правилу
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
               // echo 'Нужно сформировать: '. $internalRoute;
                //нужно определить контроллер, экшн и параметры         
                 $segments = explode ('/', $internalRoute);  
                //получаем имя контроллера          
                 $controllerName= array_shift($segments).'Controller';              
                 $controllerName = ucfirst($controllerName);    
                //получаем имя экшена        
                $actionName='action' . ucfirst(array_shift($segments));
              
                $parameters =  $segments; 
                //определяем какой контроллер подключить
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
               
                //если файл - контроллер существует, то подключаем его
                if(file_exists($controllerFile)){
                    include_once ($controllerFile);                    
                }
               //создать объект, вызвать метод в контроллере 
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if($result != null){
                    break;
                }
            
            }
            }
          
    }

}




?>

