<?php require_once('koneksi.php'); ?>
<body>
	<a href="formmember.php">Tambah</a>
    </div>
    <table border="1">
        <thead>
			<tr>
					<th>ID Member</th>
					<th>Nama</th>
					<th>No. Telp</th>
					<th>Alamat</th>
					<th>Tanggal Mendaftar</th>
					<th>Tanggal Terakhir Bayar</th>
					<th>Aksi</th>
				
            </tr>
        </thead>
        <tbody>
            <?php
				include("model.php");
				if(isset($_GET['function'])&&($_GET['id_member'])){
                    hapusmember($_GET['id_member']);
                }
				
				$stmt = konek()->prepare("SELECT * FROM member ORDER BY id_member ASC");
				$stmt->execute();
				$result = $stmt->fetchAll();

				if (!empty($result)) {
					foreach ($result as $row) {
						echo "<tr>";
						echo "<td>" . $row['id_member'] . "</td>";
						echo "<td>" . $row['nama_member'] . "</td>";
						echo "<td>" . $row['nomor_member'] . "</td>";
						echo "<td>" . $row["alamat"] . "</td>";
						echo "<td>" . $row["tgl_mendaftar"] . "</td>";
						echo "<td>" . $row["tgl_terakhir_bayar"] . "</td>";
						echo "<td>";
						echo "<a href='formmember.php?id_member=" . $row['id_member'] . "'>Edit</a>";
						echo " | ";
						echo "<a href='member.php?function=1&id_member=" . $row['id_member'] . "' onclick=\"return confirm('Hapus?')\">Hapus</a>";							
						echo "</td>";
						echo "</tr>";
					}
				}
            ?>
        </tbody>
    </table>
	<a href="index.php">Kembali</a>
</body>