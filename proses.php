<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $jumlahBarang = $_POST["jumlah-barang"];
  $ukuran = $_POST["ukuran"];
  $telepon = $_POST["telepon"];
  $metodePembayaran = $_POST["metode-pembayaran"];
  
  // Format pesanan
  $pesanan = "Nama: $nama\nAlamat: $alamat\nJumlah Barang: $jumlahBarang\nUkuran: $ukuran\nNomor Telepon: $telepon\nMetode Pembayaran: $metodePembayaran\n\n";
  
  // Menyimpan pesanan ke dalam file
  $filePesanan = fopen("pesanan.txt", "a");
  fwrite($filePesanan, $pesanan);
  fclose($filePesanan);
  
  // Redirect ke halaman berhasil
  header("Location: berhasil.html");
  exit;
}
?>
