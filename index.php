<?php
include_once "controllers/PlaylistController.php";
$controller = new PlaylistController();

// HAPUS
if(isset($_GET['hapus'])) {
    $controller->model->delete($_GET['hapus']);
    header("Location: index.php");
    exit;
}

// TAMPILKAN LIST
include_once "views/list.php";
?>