<link rel="stylesheet" href="/playlist/style.css?v=3">

<div class="container">
<h2>➕ Tambah Playlist</h2>

<?php
include_once "../controllers/PlaylistController.php";
$controller = new PlaylistController();

if(isset($_POST['simpan'])) {
 $controller->model->create(
    $_POST['nama'], 
    $_POST['lagu'], 
    $_POST['penyanyi']
 );
 header("Location: /playlist/index.php");
 exit;
}
?>

<form method="POST">
Nama:<br>
<input type="text" name="nama"><br><br>

Lagu:<br>
<input type="text" name="lagu"><br><br>

Penyanyi:<br>
<input type="text" name="penyanyi"><br><br>

<button type="submit" name="simpan">Simpan</button>
</form>
</div>