<?php 

class Controller
{
	public function view_data()
	{
		global $db;
		$sql = ("SELECT * FROM data");
		
		$result = $db->query($sql);

		if ($result->num_rows > 0) {
			$i = 0;
			$list = "";
			while ($row = $result->fetch_assoc()) {
				$list[$i] = $row;
				$i++;
			}
			return $list;
		}else{
			return false;
		}
	}

	public function create_data($nama, $ktp, $phone, $alamat)
	{
		global $db;
		$sql = "INSERT INTO data SET nama = '$nama', no_ktp = '$ktp', no_telp = '$phone', alamat = '$alamat' ";
		$result = $db->query($sql);

		if ($result) {
			return $result;
		}else{
			return false;
		}
	}

	public function get_id($id)
	{
		global $db;

		$sql = "SELECT * FROM data WHERE id = '{$id}'";
		$result = $db->query($sql);

		if ($result->num_rows > 0 ) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return false;
		}
	}

	public function edit_data($id, $nama, $ktp, $phone, $alamat)
	{
		global $db;
		$sql = "UPDATE data SET nama = '$nama', no_ktp = '$ktp', no_telp = '$phone', alamat = '$alamat' WHERE id = '{$id}'";

		$result = $db->query($sql);
		if ($result) {
			return $result;
		}else {
			return false;
		}
	}

	public function delete_data($id)
	{
		global $db;

		$sql = "DELETE FROM data WHERE id = '{$id}'";
		$result = $db->query($sql);
		if ($result) {
			return $result;
		}else{
			return false;
		}
	}
}

?>