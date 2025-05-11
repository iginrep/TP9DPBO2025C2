<?php

/******************************************
 Asisten Pemrogaman 13 & 14
 ******************************************/

include("KontrakView.php");
include("presenter/ProsesMahasiswa.php");

class TampilMahasiswa implements KontrakView
{
	private $prosesmahasiswa;
	private $tpl;

	function __construct()
	{
		$this->prosesmahasiswa = new ProsesMahasiswa();
	}

	function tampil()
	{
		// Handle form submissions
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_POST['add'])) {
				$this->prosesmahasiswa->insertDataMahasiswa($_POST);
			} else if (isset($_POST['update'])) {
				$id = $_POST['id'];
				unset($_POST['id']);
				unset($_POST['update']);
				$this->prosesmahasiswa->updateDataMahasiswa($id, $_POST);
			} else if (isset($_POST['delete'])) {
				$id = $_POST['delete_id'];
				$this->prosesmahasiswa->deleteDataMahasiswa($id);
			}
		}

		$this->prosesmahasiswa->prosesDataMahasiswa();
		$data = null;

		for ($i = 0; $i < $this->prosesmahasiswa->getSize(); $i++) {
			$no = $i + 1;
			$id = $this->prosesmahasiswa->getId($i);
			$nim = $this->prosesmahasiswa->getNim($i);
			$nama = $this->prosesmahasiswa->getNama($i);
			$tempat = $this->prosesmahasiswa->getTempat($i);
			$tl = $this->prosesmahasiswa->getTl($i);
			$gender = $this->prosesmahasiswa->getGender($i);
			$email = $this->prosesmahasiswa->getEmail($i);
			$telp = $this->prosesmahasiswa->getTelp($i);

			$data .= "<tr>
				<td>" . $no . "</td>
				<td>" . $nim . "</td>
				<td>" . $nama . "</td>
				<td>" . $tempat . "</td>
				<td>" . $tl . "</td>
				<td>" . $gender . "</td>
				<td>" . $email . "</td>
				<td>" . $telp . "</td>
				<td class='action-buttons'>
					<button type='button' class='btn btn-sm btn-primary' data-toggle='modal' data-target='#editModal'
						onclick='editMahasiswa($id, \"$nim\", \"$nama\", \"$tempat\", \"$tl\", \"$gender\", \"$email\", \"$telp\")'>
						Edit
					</button>
					<button type='button' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#deleteModal'
						onclick='deleteMahasiswa($id)'>
						Hapus
					</button>
				</td>
			</tr>";
		}

		$this->tpl = new Template("templates/skin.html");
		$this->tpl->replace("DATA_TABEL", $data);
		$this->tpl->write();
	}
}
