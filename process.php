<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $kategori = $_POST['kategori'];
    $fitur = isset($_POST['fitur']) ? implode(", ", $_POST['fitur']) : "";
    $status = $_POST['status'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO produk (nama, kode, kategori, fitur, status, deskripsi) 
            VALUES ('$nama', '$kode', '$kategori', '$fitur', '$status', '$deskripsi')";
    
    if (mysqli_query($conn, $sql)) {
        echo "✅ Data berhasil disimpan!";
        echo "<br><a href='index.php'>Kembali</a>";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>
