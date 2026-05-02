<?php
include_once "controllers/PlaylistController.php";
$controller = new PlaylistController();

if(isset($_GET['hapus'])) {
 $controller->model->delete($_GET['hapus']);
 header("Location: index.php");
}

include_once "views/list.php";
?>