<?php
include "database.php";

$db = new Database();
$data = [
    'nim' => $_POST['txtnim'],
    'nama' => $_POST['txtnama'],
    'alamat' => $_POST['txtalamat']
];

if ($db->insert("mahasiswa", $data)) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data.";
}
?>
