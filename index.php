<?php
session_start();
include_once 'model/model.php';
include_once 'controller/controller.php';
$model = new model();
$controller = new controller($model);
//$controller = new controller();
$controller->control();

?>