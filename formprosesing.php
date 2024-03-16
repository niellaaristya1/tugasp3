<?php
if(isset($_POST['btnSubmit'])){
    $judul_buku = $_POST["Judul_Buku"];
    $kategori_buku = $_POST["Kategori_Buku"];
    $tgl  = $_POST["date"];
    $lama_pinjam = $_POST["lama_pinjam"];
    $nama_anggota = $_POST["nama_anggota"];
    $nama_petugas = $_POST["nama_petugas"];
    
//--------------------------------------------------

      $harga=0;
      if ($kategori_buku == "Karya_Ilmiah") {
          $harga = 10000;
      }
      else {
          $harga = 5000;
      }
      $total = $harga*$lama_pinjam;


//--------------------------------------------------

    echo "Judul buku : $judul_buku<br>";
    echo "Kategori buku :  $kategori_buku<br>";
    echo "tanggal pinjam :  $tgl<br>";
    echo "lama pinjam :  $lama_pinjam<br>";
    echo "Nama anggota :  $nama_anggota<br>";
    echo "Nama petugas :  $nama_petugas<br>";
    echo "Total : $total "; 

    
}
?>
