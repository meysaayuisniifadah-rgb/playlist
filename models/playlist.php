<?php
class Playlist {
 private $conn;

 public function __construct($db) {
  $this->conn = $db;
 }

 public function getAll() {
  return $this->conn->query("SELECT * FROM playlist");
 }

 public function getById($id) {
  return $this->conn->query("SELECT * FROM playlist WHERE id=$id");
 }

 public function create($nama, $lagu) {
  return $this->conn->query("INSERT INTO playlist(nama,lagu) VALUES('$nama','$lagu')");
 }

 public function update($id, $nama, $lagu) {
  return $this->conn->query("UPDATE playlist SET nama='$nama', lagu='$lagu' WHERE id=$id");
 }

 public function delete($id) {
  return $this->conn->query("DELETE FROM playlist WHERE id=$id");
 }
}
?>