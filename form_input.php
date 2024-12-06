<?php
include "form.php";
include "database.php";

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("process.php", "Submit Data");
$form->addField("txtnim", "NIM");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silakan isi form berikut:</h3>";
$form->displayForm();
echo "</body></html>";
?>
