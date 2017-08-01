<?php
  if(!defined("INDEX")) die("---");
  
  if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
  else $tampil = "home";
?>

<div id='content'>

<?php 
  if( $tampil == "home" )   include("konten/home.php"); 
    
  elseif( $tampil == "halaman" )                include("konten/halaman.php");
  elseif( $tampil == "galeri" )                 include("konten/galeri.php");
  elseif( $tampil == "artikel_detail" )         include("konten/artikel_detail.php");
  elseif( $tampil == "berita_detail" )          include("konten/berita_detail.php");
  elseif( $tampil == "kontak" )                 include("konten/kontak.php");
  elseif( $tampil == "pencarian" )              include("konten/pencarian.php");
  elseif( $tampil == "kontak_proses" )          include("konten/kontak_proses.php");
  elseif( $tampil == "pencarian" )              include("konten/pencarian.php");
  elseif( $tampil == "komentar_proses" )        include("konten/komentar_proses.php");
  elseif( $tampil == "jurnaldinamika" )         include("konten/jurnaldinamika.php");
  elseif( $tampil == "publikasidosen" )         include("konten/publikasidosen.php");
  elseif( $tampil == "publikasidosen_detail" )  include("konten/publikasidosen_detail.php");
  elseif( $tampil == "visimisi" )               include("konten/visimisi.php");
  elseif( $tampil == "organisasifakultas" )     include("konten/organisasifakultas.php");
  elseif( $tampil == "pimpinan" )               include("konten/pimpinan.php");
  elseif( $tampil == "administrasinegara" )     include("konten/administrasinegara.php");
  elseif( $tampil == "hubunganinternasional" )  include("konten/hubunganinternasional.php");
  elseif( $tampil == "sdm_dosen" )              include("konten/sdm_dosen.php");
  elseif( $tampil == "sdm_karyawan" )           include("konten/sdm_karyawan.php");
  elseif( $tampil == "daftar_alumni" )           include("konten/daftar_alumni.php");
  elseif( $tampil == "kalender" )               include("konten/kalender.php");
  elseif( $tampil == "sambutan" )               include("konten/sambutan.php");
  elseif( $tampil == "kontak" )                 include("konten/kontak.php");
  elseif( $tampil == "download_jur" )               include("konten/download_jur.php");
  elseif( $tampil == "download_pen" )               include("konten/download_pen.php");
  elseif( $tampil == "download_buk" )               include("konten/download_buk.php");
  elseif( $tampil == "download_dok" )               include("konten/download_dok.php");
  elseif( $tampil == "perpustakaan_fisip" )               include("konten/perpustakaan_fisip.php");
  elseif( $tampil == "jwkuliah" )               include("konten/jwkuliah.php");
  elseif( $tampil == "sertifikat" )               include("konten/sertifikat.php");
  elseif( $tampil == "infopen" )               include("konten/infopen.php");
  elseif( $tampil == "dokpen" )               include("konten/dokpen.php");
  elseif( $tampil == "penjur" )               include("konten/penjur.php");
  elseif( $tampil == "jurnaldos" )               include("konten/jurnaldos.php");
  elseif( $tampil == "bukudos" )               include("konten/bukudos.php");
  elseif( $tampil == "pendos" )               include("konten/pendos.php");
  elseif( $tampil == "dokdos" )               include("konten/dokdos.php");
  elseif( $tampil == "jurnalan" )               include("konten/jurnalan.php");
  elseif( $tampil == "jurnalhi" )               include("konten/jurnalhi.php");
  elseif( $tampil == "buku" )               include("konten/buku.php");
  elseif( $tampil == "pmahasiswa" )               include("konten/pmahasiswa.php");
   elseif( $tampil == "beralumni" )               include("konten/beralumni.php");
  else echo"Halaman tidak ditemukan";
?>
</div>
