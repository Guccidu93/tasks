<?php
  require_once $app."/database/model.php";
  class TaskModel extends Model {
    public function getAll () {
      $db = parent::connect();
      $sql = 'select * from task';
      $query = $db->prepare($sql);
      $query->execute();
      $tasks = $query->fetchAll();
      return $tasks;
  }
 public function createOne ($name) {
     $db = parent::connect();
     $sql = 'insert into task set name=:name';
     $query =$db->prepare($sql);
     $query->bindValue(':name' ,$name);
     $query->execute();
   }
  public function delete ($id) {
    $db = parent::connect();
    $sql = 'delete from task where id='.$id;
    $query = $db->prepare($sql);
    $query->execute();
  } 
  }


?>