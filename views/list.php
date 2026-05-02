<link rel="stylesheet" href="/playlist/style.css?v=3">

<div class="container">
<h2>🎧 My Music Library</h2>
<p class="subtitle">Your personal playlist collection 🎶</p>

<a href="/playlist/views/tambah.php"><button>+ Tambah Data</button></a>

<table>
 <tr>
  <th>No</th>
  <th>Nama</th>
  <th>Lagu</th>
  <th>Penyanyi</th>
  <th>Aksi</th>
 </tr>

<?php
include_once __DIR__ . "/../controllers/PlaylistController.php";
$controller = new PlaylistController();
$data = $controller->model->getAll();
$no = 1;

while($row = $data->fetch_assoc()) {
?>
<tr>
 <td><?= $no++; ?></td>
 <td><?= $row['nama']; ?></td>
 <td>🎵 <?= $row['lagu']; ?></td>
 <td>🎤 <?= $row['penyanyi']; ?></td>
 <td>
  <a href="/playlist/views/edit.php?id=<?= $row['id']; ?>">Edit</a> |
  <a href="/playlist/index.php?hapus=<?= $row['id']; ?>">Hapus</a>
 </td>
</tr>
<?php } ?>
</table>
</div>