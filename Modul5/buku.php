<?php require_once('koneksi.php'); ?>
<body>
	<a href="formbuku.php">Tambah</a>
    </div>
    <table border="1">
        <thead>
			<tr>
					<th>ID Buku</th>
					<th>Judul</th>
					<th>Penulis</th>
					<th>Penerbit</th>
					<th>Tahun Terbit</th>
					<th>Aksi</th>
				
            </tr>
        </thead>
        <tbody>
            <?php
				include("model.php");
				if(isset($_GET['function'])&&($_GET['id_buku'])){
                    hapusbuku($_GET['id_buku']);
                }
				
				$stmt = konek()->prepare("SELECT * FROM buku ORDER BY id_buku ASC");
				$stmt->execute();
				$result = $stmt->fetchAll();

				if (!empty($result)) {
					foreach ($result as $row) {
						echo "<tr>";
						echo "<td>" . $row['id_buku'] . "</td>";
						echo "<td>" . $row['judul_buku'] . "</td>";
						echo "<td>" . $row['penulis'] . "</td>";
						echo "<td>" . $row["penerbit"] . "</td>";
						echo "<td>" . $row["tahun_terbit"] . "</td>";
						echo "<td>";
						echo "<a href='formbuku.php?id_buku=" . $row['id_buku'] . "'>Edit</a>";
						echo " | ";
						echo "<a href='buku.php?function=1&id_buku=" . $row['id_buku'] . "' onclick=\"return confirm('Hapus?')\">Hapus</a>";							
						echo "</td>";
						echo "</tr>";
					}
				}
            ?>
        </tbody>
    </table>
	<a href="index.php">Kembali</a>
</body>