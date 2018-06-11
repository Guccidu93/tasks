<?php
  require_once $app."/database/tasks.php";
  class TaskController extends TaskModel {

    public function getTasks () {
      $tasksList = parent::getAll();
      global $app;
      $content = $app."/views/tasks.php";
      require_once $app."/views/layout.php";
    }

    public function createOneTask($name){
      parent::createOne($name);
      $tasksList = parent::getAll();
      global $app;
      $content = $app."/views/tasks.php";
      require_once $app."/views/layout.php";
    }

    public function deleteTask($id){
      parent::delete($id);
      $tasksList = parent::getAll();
      global $app;
      $content = $app."/views/tasks.php";
      require_once $app."/views/layout.php";
    }
  }
  $tasks = new TaskController();
  global $route;
  $method = $route->getMethod();

  switch ($method) {
    case "GET":
        $tasks->getTasks();
        break;
    case "POST":
        if($route->getAction() == 'delete'){
          $tasks->deleteTask($_POST['id']);
        }
        else if(isset($_POST['formu'])){
          $tasks->createOneTask($_POST['formu']);          
        }

        break;     
  }
?>