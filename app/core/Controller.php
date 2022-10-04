<?php

class Controller {
    public function view($view, $data = []){
        include "app/view/" . $view. '.php';
    }

    public function model($model, $data = []){
        include "app/model/dbms_information/Connection.php";
        include "app/model/" . $model . ".php";
        new $model();
    }
}

?>