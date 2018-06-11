<?php
  
  $app = __DIR__;
  require_once "route.php";
  $route = new Route();
  $route->getController();
?>