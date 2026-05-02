<!DOCTYPE html>
<html>
<head>
    <title>Playlist Favorit</title>

    <!-- CSS (pakai absolut biar pasti kebaca) -->
    <link rel="stylesheet" href="/playlist/style.css">
</head>
<body>

<div class="container">
    <h2>🎧 Playlist Favorit Gen Z</h2>

    <a href="tambah.php" class="btn">+ Tambah Data</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Lagu</th>
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
            <td><?= $row['lagu']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>" class="edit">Edit</a> |
                <a href="../index.php?hapus=<?= $row['id']; ?>" class="hapus">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>