<?php
include "form_class.php";

$form = new Form("process.php", "Simpan");

$form->addField("nama", "Nama Produk/Jasa", "text");
$form->addField("kode", "Kode Akses", "password");
$form->addField("kategori", "Kategori", "radio", [
    "produk" => "Produk",
    "jasa" => "Jasa",
    "layanan" => "Layanan"
]);
$form->addField("fitur", "Fitur", "checkbox", [
    "garansi" => "Garansi",
    "support" => "Support 24/7",
    "gratis" => "Gratis Ongkir"
]);
$form->addField("status", "Status", "select", [
    "aktif" => "Aktif",
    "nonaktif" => "Nonaktif"
]);
$form->addField("deskripsi", "Deskripsi", "textarea");

$form->displayForm();
?>
