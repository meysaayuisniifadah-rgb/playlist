<link rel="stylesheet" href="../style.css">

<div class="container">
<h2>Edit Playlist</h2>

<?php
include_once "../controllers/PlaylistController.php";
$controller = new PlaylistController();

$id = $_GET['id'];
$data = $controller->model->getById($id);
$row = $data->fetch_assoc();

if(isset($_POST['update'])) {
 $controller->model->update($id, $_POST['nama'], $_POST['lagu']);
 header("Location: ../index.php");
}
?>

<form method="POST">
Nama:<br>
<input type="text" name="nama" value="<?= $row['nama']; ?>"><br><br>

Lagu:<br>
<input type="text" name="lagu" value="<?= $row['lagu']; ?>"><br><br>

<button type="submit" name="update">Update</button>
</form>
</div>