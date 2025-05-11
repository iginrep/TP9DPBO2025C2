<?php

/******************************************
 Asisten Pemrogaman 13 & 14
 ******************************************/

// Kelas yang berisikan tabel dari mahasiswa
class TabelMahasiswa extends DB
{
	function getMahasiswa()
	{
		// Query mysql select data mahasiswa
		$query = "SELECT * FROM mahasiswa";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function insertMahasiswa($data)
	{
		$nim = $data['nim'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		$query = "INSERT INTO mahasiswa (nim, nama, tempat, tl, gender, email, telp) 
				VALUES ('$nim', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";
		return $this->execute($query);
	}

	function updateMahasiswa($id, $data)
	{
		$nim = $data['nim'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		$query = "UPDATE mahasiswa 
				SET nim='$nim', nama='$nama', tempat='$tempat', 
					tl='$tl', gender='$gender', email='$email', telp='$telp'
				WHERE id=$id";
		return $this->execute($query);
	}

	function deleteMahasiswa($id)
	{
		$query = "DELETE FROM mahasiswa WHERE id=$id";
		return $this->execute($query);
	}

	function getMahasiswaById($id)
	{
		$query = "SELECT * FROM mahasiswa WHERE id=$id";
		return $this->execute($query);
	}
}
