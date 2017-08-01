<?php
  if(!defined("INDEX")) die("---");
 ?>

 <ul class="breadcrumb">
    <li>Beranda</li>
    <li class="active">Sambutan</li>
  </ul>

  <h3>SAMBUTAN PIMPINAN FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</h3>

  <?php
	if(!defined("INDEX")) die("---");
	
	$dosen = mysql_query("select * FROM dosen WHERE namadosen ='Dr. Himsar Silaban, MM'")or die(mysql_error());
	while($data=mysql_fetch_array($dosen)) {
		$namadosen = substr($data['namadosen'],0,300);
		$namadosen = substr($data['namadosen'],0,strrpos($namadosen," "));
	
	
?>

	<div class="pimpinan">
		<div class="row">
		<div class="col-lg-4"></div>
			<div class="col-lg-3" align="center" >
			 	<?php if($data['gambar']!="") ?> <img class="img-circle" src="gambar/dosen/<?php echo $data['gambar']; ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
			 	<h3>DEKAN</h3>
          		<p><?php echo $data['namadosen']; ?></p>	
			</div>
		</div>	
	</div>

	<?php
}
	?>


	<div class="col-lg-12" align="left">
		<h2><font size="5">SAMBUTAN PIMPINAN</font></h2>

<p><font size="4">Puji Syukur dan rasa terimakasih kita panjatkan ke-Hadirat Tuhan Yang Maha Esa atas segala berkat dan rahmat-Nya kepada kita semua sehingga penyusunan Website Fakultas Ilmu Sosial dan Ilmu Politik Universitas Prof. Dr. Moestopo (Beragama) inidapat terwujud dengan baik.</font></p>
<p><font size="4">Website FISIP UPDM (B) ini dimaksudkan sebagai media informasi tentang profil FISIP UPDM(B) yang dapat diakses oleh Para dosen, mahasiswa dan para user lainnya termasuk proses perkuliahannya.</font></p>
<p><font size="4">Perlu di informasikan bahwa Fakultas Ilmu Sosial dan Ilmu Politik Universitas Prof. Dr. Moestopo (Beragama) mempunyai Program Studi Administrasi Negara dengan status <strong>Terakreditasi dengan nilai A</strong> berdasarkan pada Surat Keputusan Badan Akreditasi Nasional Perguruan Tinggi, Kementerian Pendidikan dan Kebudayaan Republik Indonesia Nomor: 257/BAN-PT/Ak-XVI/S/XII/2013 tanggal 26 Desember 2013 dan Program Studi Hubungan Internasional secara bertutut-turut tiga kali dapat mempertahankan Akreditasi dengan nilai A dan Akreditasi Yang Ke 3 dalam Surat Keputusan Badan Akreditasi Nasional Perguruan Tinggi, Kementerian Pendidikan dan Kebudayaan Republik Indonesia Nomor: 1011/SK/BAN-PT/Akred/S/IX/2015 tanggal 19 September 2015.</font></p>

<p><font size="4">Selain dari pada itu bahwa sejak semester ganjil tahun Akademik 2016/2017 bahwa FISIP UPDM(B) baik Program Studi Administrasi Negara Maupun Program Studi Hubungan Internasional Telah Menerapkan Kurikilum Baru Berbasis Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Proses Pembelajaran Sebagian Besar Mata Kuliah Inti telah diajarkan dengan menggunakan Bahasa Pengantar Bahasa Inggris.</font></p>
<p><font size="4">Beberapa Informasi Lain Seperti Tenaga Pengajar,sebagian Besar Telah bergelar Strata 3 (S3) danProfesor (Guru Besar).</font></p>
<p><font size="4">Demikian Sekilas Informasi dalam Website ini, dan kami menyadari masih Perlu Penyempurnaan secara berkelanjutan (sustainable) agar datanya tetap akurat dan Up to date.Dan harapan kita kehadiran Website ini benar-benar bermanfaat bagi para user.</font></p>


<p><font size="4">Sekian dan terima kasih.</font></p>

	</div>