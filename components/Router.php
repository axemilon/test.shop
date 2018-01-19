<?php
class Router {
    
    private $routes;
    
    public function __construct(){        
        $this->routes = include($_SERVER['DOCUMENT_ROOT'].'/config/routes.php');
    }
    
    
    /**
     * Returns request string
     */
    private function  getURI(){
        if (!empty($_SERVER['REQUEST_URI'])){            
            return trim($_SERVER['REQUEST_URI'], '/');
        } 
    }
    
    public function run(){
        $uri = $this->getURI(); 
        foreach ($this->routes as $uriPattern => $path) {  
            if (preg_match("~$uriPattern~", $uri)) { 

                /** Replace parameter value*/
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri, -1, $count);                
                
                /***********/
                $segments = explode('/', $internalRoute);  
                
                /**Get controller name*/
                $controllerName = array_shift($segments)."Controller";
                $controllerName = ucfirst($controllerName); 
                
                /**Get action name*/               
                $actionName = 'action'.ucfirst(array_shift($segments));  

                /**Get parameters*/
                $parameter1 = array_shift($segments);
                $parameter2 = array_shift($segments);
                


                /** Include file*/
                $controllerFile = $_SERVER['DOCUMENT_ROOT']."/controllers/".$controllerName.".php";              
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);                    
                }
                else {
                    echo "File not found!";
                }
                
                /** Create conntroller class object*/
                $controllerObject = new $controllerName;
                $result = $controllerObject->$actionName($parameter1,$parameter2);
                
                if ($result != null) {
                    break;
                }
                
            }          
        }
    }
}

?>