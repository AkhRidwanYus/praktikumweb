<?php require_once("koneksi.php"); ?> 
<body>
<?php
	function tambahmember($nama, $no, $alamat, $tgldft, $tgltrkhrbyr){
		if (!empty($_POST["addmember"])) {
			$sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (:nama, :no, :alamat, :mendaftar, :terakhir)";
			$stmt = konek()->prepare($sql);
			$result = $stmt->execute(array(':nama' => $nama, ':no' => $no, ':alamat' => $alamat, ':mendaftar' => $tgldft, ':terakhir' => $tgltrkhrbyr));
			if (!empty($result)) {
				header('location:member.php');
			}
		}
	}
	
	function editmember(){
		$stmt = konek()->prepare("SELECT * FROM member where id_member=" . $_GET["id_member"]);
		$stmt->execute();
		$GLOBALS['result'] = $stmt->fetchAll();
	}

	function updatemember($id, $nama, $no, $alamat, $tgldft, $tgltrkhrbyr){
		$pdo_statement = konek()->prepare(
			"update member set nama_member='" . $nama . "', nomor_member='" . $no . "', alamat='" . $alamat . "', tgl_mendaftar='" . $tgldft . "', tgl_terakhir_bayar='" . $tgltrkhrbyr . "' where id_member=" . $id
		);
		$result = $pdo_statement->execute();
		if ($result) {
			header('location:member.php');
		}
	}
	
	function hapusmember($id){
		$stmt = konek()->prepare("delete from member where id_member=" . $id);
		$result = $stmt->execute();
		if ($result) {
			header('location:member.php');
		}
	}	
	
	function tambahbuku($judul, $penulis, $penerbit, $tahun){
		if (!empty($_POST["addbuku"])) {
			$sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (:judul, :penulis, :penerbit, :tahun)";
			$stmt = konek()->prepare($sql);
			$result = $stmt->execute(array(':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun' => $tahun));
			if (!empty($result)) {
				header('location:buku.php');
			}
		}
	}
	
	function editbuku(){
		$stmt = konek()->prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
		$stmt->execute();
		$GLOBALS['result'] = $stmt->fetchAll();
	}

	function updatebuku($id, $judul, $penulis, $penerbit, $tahun){
		$pdo_statement = konek()->prepare(
			"update buku set judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $tahun . "' where id_buku=" . $id
		);
		$result = $pdo_statement->execute();
		if ($result) {
			header('location:buku.php');
		}
	}
	
	function hapusbuku($id){
		$stmt = konek()->prepare("delete from buku where id_buku=" . $id);
		$result = $stmt->execute();
		if ($result) {
			header('location:buku.php');
		}
	}	
	
	function tambahpeminjaman($pinjam, $kembali){
		if (!empty($_POST["addpeminjaman"])) {
			$sql = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali) VALUES (:pinjam, :kembali)";
			$stmt = konek()->prepare($sql);
			$result = $stmt->execute(array(':pinjam' => $pinjam, ':kembali' => $kembali));
			if (!empty($result)) {
				header('location:peminjaman.php');
			}
		}
	}
	
	function editpeminjaman(){
		$stmt = konek()->prepare("SELECT * FROM peminjaman where id_peminjaman=" . $_GET["id_peminjaman"]);
		$stmt->execute();
		$GLOBALS['result'] = $stmt->fetchAll();
	}

	function updatepeminjaman($id, $pinjam, $kembali){
		$pdo_statement = konek()->prepare(
			"update peminjaman set tgl_pinjam='" . $pinjam . "', tgl_kembali='" . $kembali . "' where id_peminjaman=" . $id
		);
		$result = $pdo_statement->execute();
		if ($result) {
			header('location:peminjaman.php');
		}
	}
	
	function hapuspeminjaman($id){
		$stmt = konek()->prepare("delete from peminjaman where id_peminjaman=" . $id);
		$result = $stmt->execute();
		if ($result) {
			header('location:peminjaman.php');
		}
	}	
?>
</body>