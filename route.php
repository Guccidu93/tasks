<?php
    class Route {
       private function formatUrl () {

            if(!isset($_SERVER{"PATH_INFO"}))
            {
                $_SERVER{"PATH_INFO"} = "/home/";
            }
            $url = $_SERVER['PATH_INFO'];
            $urlTrim = trim($url, '/');
            return explode('/', $urlTrim);
            echo "<br/>".$urlTab[1];
                return $urlTab;
        }

        public function getMethod () {
            return $_SERVER['REQUEST_METHOD'];
        }
        public function getAction () {
            $urlTab = $this->formatUrl();
            if (isset( $urlTab[1])) {
                $action = $urlTab[1];

                if ($action) {
                    return $action;
                }
            }   
        }
        public function getController () {
            $urlTab = $this->formatUrl();
            $controller = $urlTab[0];
            
            global $app;
            $path = 'controllers/'.$controller.'.php';
            if ( file_exists($path) ) {
                require_once $path;
            }
            else {
                require_once "views/404.php";
            }
        }
    }
?>