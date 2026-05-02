<?php
include_once dirname(__DIR__) . "/config/Database.php";
include_once dirname(__DIR__) . "/models/Playlist.php";

class PlaylistController {
 public $model;

 public function __construct() {
  $database = new Database();
  $db = $database->connect();
  $this->model = new Playlist($db);
 }
}
?>