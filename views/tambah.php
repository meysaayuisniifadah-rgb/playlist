<link rel="stylesheet" href="../style.css">

<div class="container">
<h2>Tambah Playlist</h2>

<?php
include_once "../controllers/PlaylistController.php";
$controller = new PlaylistController();

if(isset($_POST['simpan'])) {
 $controller->model->create($_POST['nama'], $_POST['lagu']);
 header("Location: ../index.php");
}
?>

<form method="POST">
Nama:<br>
<input type="text" name="nama"><br><br>

Lagu:<br>
<input type="text" name="lagu"><br><br>

<button type="submit" name="simpan">Simpan</button>
</form>
</div>