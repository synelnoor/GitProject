<?php
	if(!defined("INDEX")) die("---");
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "beranda";
	
	if( $tampil == "beranda" )		include("beranda.php");	
	elseif( $tampil == "keluar" )	include("keluar.php");
	
	elseif( $tampil == "menu" )					include("menu/menu_tampil.php");
	elseif( $tampil == "menu_tambah" )			include("menu/menu_tambah.php");
	elseif( $tampil == "menu_tambahproses" )	include("menu/menu_tambahproses.php");
	elseif( $tampil == "menu_edit" )			include("menu/menu_edit.php");
	elseif( $tampil == "menu_editproses" )		include("menu/menu_editproses.php");
	elseif( $tampil == "menu_hapus" )			include("menu/menu_hapus.php");
	

	elseif( $tampil == "submenu" )				include("submenu/submenu_tampil.php");
	elseif( $tampil == "submenu_tambah" )		include("submenu/submenu_tambah.php");
	elseif( $tampil == "submenu_tambahproses" )	include("submenu/submenu_tambahproses.php");
	elseif( $tampil == "submenu_edit" )			include("submenu/submenu_edit.php");
	elseif( $tampil == "submenu_editproses" )	include("submenu/submenu_editproses.php");
	elseif( $tampil == "submenu_hapus" )		include("submenu/submenu_hapus.php");

	elseif( $tampil == "subsubmenu" )				include("subsubmenu/subsubmenu_tampil.php");
	elseif( $tampil == "subsubmenu_tambah" )		include("subsubmenu/subsubmenu_tambah.php");
	elseif( $tampil == "subsubmenu_tambahproses")	include("subsubmenu/subsubmenu_tambahproses.php");
	elseif( $tampil == "subsubmenu_edit" )			include("subsubmenu/subsubmenu_edit.php");
	elseif( $tampil == "subsubmenu_editproses" )	include("subsubmenu/subsubmenu_editproses.php");
	elseif( $tampil == "subsubmenu_hapus" )			include("submenu/subsubmenu_hapus.php");

	elseif( $tampil == "dosen" )				include("dosen/dosen_tampil.php");
	elseif( $tampil == "dosen_tambah" )			include("dosen/dosen_tambah.php");
	elseif( $tampil == "dosen_tambahproses" )	include("dosen/dosen_tambahproses.php");
	elseif( $tampil == "dosen_edit" )			include("dosen/dosen_edit.php");
	elseif( $tampil == "dosen_editproses" )		include("dosen/dosen_editproses.php");
	elseif( $tampil == "dosen_hapus" )			include("dosen/dosen_hapus.php");


	elseif( $tampil == "artikel" )				include("artikel/artikel_tampil.php");
	elseif( $tampil == "artikel_tambah" )		include("artikel/artikel_tambah.php");
	elseif( $tampil == "artikel_tambahproses" )	include("artikel/artikel_tambahproses.php");
	elseif( $tampil == "artikel_edit" )			include("artikel/artikel_edit.php");
	elseif( $tampil == "artikel_editproses" )	include("artikel/artikel_editproses.php");
	elseif( $tampil == "artikel_hapus" )		include("artikel/artikel_hapus.php");


	elseif( $tampil == "berita" )				include("berita/berita_tampil.php");
	elseif( $tampil == "berita_tambah" )		include("berita/berita_tambah.php");
	elseif( $tampil == "berita_tambahproses" )	include("berita/berita_tambahproses.php");
	elseif( $tampil == "berita_edit" )			include("berita/berita_edit.php");
	elseif( $tampil == "berita_editproses" )	include("berita/berita_editproses.php");
	elseif( $tampil == "berita_hapus" )			include("berita/berita_hapus.php");
	
	
	elseif( $tampil == "halaman" )				include("halaman/halaman_tampil.php");
	elseif( $tampil == "halaman_tambah" )		include("halaman/halaman_tambah.php");
	elseif( $tampil == "halaman_tambahproses" )	include("halaman/halaman_tambahproses.php");
	elseif( $tampil == "halaman_edit" )			include("halaman/halaman_edit.php");
	elseif( $tampil == "halaman_editproses" )	include("halaman/halaman_editproses.php");
	elseif( $tampil == "halaman_hapus" )		include("halaman/halaman_hapus.php");

	elseif( $tampil == "gallery" )				include("gallery/gallery_tampil.php");
	elseif( $tampil == "gallery_tambah" )		include("gallery/gallery_tambah.php");
	elseif( $tampil == "gallery_tambahproses" )	include("gallery/gallery_tambahproses.php");
	elseif( $tampil == "gallery_edit" )			include("gallery/gallery_edit.php");
	elseif( $tampil == "gallery_editproses" )	include("gallery/gallery_editproses.php");
	elseif( $tampil == "gallery_hapus" )		include("gallery/gallery_hapus.php");

	elseif( $tampil == "kalender" )				include("kalender/kalender_tampil.php");
	elseif( $tampil == "kalender_tambah" )		include("kalender/kalender_tambah.php");
	elseif( $tampil == "kalender_tambahproses" )	include("kalender/kalender_tambahproses.php");
	elseif( $tampil == "kalender_edit" )			include("kalender/kalender_edit.php");
	elseif( $tampil == "kalender_editproses" )	include("kalender/kalender_editproses.php");
	elseif( $tampil == "kalender_hapus" )		include("kalender/kalender_hapus.php");

	elseif( $tampil == "organisasi" )				include("organisasi/organisasi_tampil.php");
	elseif( $tampil == "organisasi_tambah" )		include("organisasi/organisasi_tambah.php");
	elseif( $tampil == "organisasi_tambahproses" )	include("organisasi/organisasi_tambahproses.php");
	elseif( $tampil == "organisasi_edit" )			include("organisasi/organisasi_edit.php");
	elseif( $tampil == "organisasi_editproses" )	include("organisasi/organisasi_editproses.php");
	elseif( $tampil == "organisasi_hapus" )			include("organisasi/organisasi_hapus.php");

	elseif( $tampil == "karyawan" )				include("karyawan/karyawan_tampil.php");
	elseif( $tampil == "karyawan_tambah" )		include("karyawan/karyawan_tambah.php");
	elseif( $tampil == "karyawan_tambahproses" )	include("karyawan/karyawan_tambahproses.php");
	elseif( $tampil == "karyawan_edit" )			include("karyawan/karyawan_edit.php");
	elseif( $tampil == "karyawan_editproses" )	include("karyawan/karyawan_editproses.php");
	elseif( $tampil == "karyawan_hapus" )			include("karyawan/karyawan_hapus.php");


	elseif( $tampil == "lulusan" )				include("lulusan/lulusan_tampil.php");
	elseif( $tampil == "lulusan_tambah" )		include("lulusan/lulusan_tambah.php");
	elseif( $tampil == "lulusan_tambahproses" )	include("lulusan/lulusan_tambahproses.php");
	elseif( $tampil == "lulusan_edit" )			include("lulusan/lulusan_edit.php");
	elseif( $tampil == "lulusan_editproses" )	include("lulusan/lulusan_editproses.php");
	elseif( $tampil == "lulusan_hapus" )			include("lulusan/lulusan_hapus.php");

	elseif( $tampil == "jurnal" )				include("jurnal/jurnal_tampil.php");
	elseif( $tampil == "jurnal_tambah" )		include("jurnal/jurnal_tambah.php");
	elseif( $tampil == "jurnal_tambahproses" )	include("jurnal/jurnal_tambahproses.php");
	elseif( $tampil == "jurnal_edit" )			include("jurnal/jurnal_edit.php");
	elseif( $tampil == "jurnal_editproses" )	include("jurnal/jurnal_editproses.php");
	elseif( $tampil == "jurnal_hapus" )			include("jurnal/jurnal_hapus.php");

	elseif( $tampil == "buku" )					include("buku/buku_tampil.php");
	elseif( $tampil == "buku_tambah" )			include("buku/buku_tambah.php");
	elseif( $tampil == "buku_tambahproses" )	include("buku/buku_tambahproses.php");
	elseif( $tampil == "buku_edit" )			include("buku/buku_edit.php");
	elseif( $tampil == "buku_editproses" )		include("buku/buku_editproses.php");
	elseif( $tampil == "buku_hapus" )			include("buku/buku_hapus.php");

	elseif( $tampil == "penelitian" )				include("penelitian/penelitian_tampil.php");
	elseif( $tampil == "penelitian_tambah" )		include("penelitian/penelitian_tambah.php");
	elseif( $tampil == "penelitian_tambahproses" )	include("penelitian/penelitian_tambahproses.php");
	elseif( $tampil == "penelitian_edit" )			include("penelitian/penelitian_edit.php");
	elseif( $tampil == "penelitian_editproses" )	include("penelitian/penelitian_editproses.php");
	elseif( $tampil == "penelitian_hapus" )			include("penelitian/penelitian_hapus.php");


	elseif( $tampil == "dokumen" )				include("dokumen/dokumen_tampil.php");
	elseif( $tampil == "dokumen_tambah" )		include("dokumen/dokumen_tambah.php");
	elseif( $tampil == "dokumen_tambahproses" )	include("dokumen/dokumen_tambahproses.php");
	elseif( $tampil == "dokumen_edit" )			include("dokumen/dokumen_edit.php");
	elseif( $tampil == "dokumen_editproses" )	include("dokumen/dokumen_editproses.php");
	elseif( $tampil == "dokumen_hapus" )			include("dokumen/dokumen_hapus.php");

	elseif( $tampil == "pmahasiswa" )				include("pmahasiswa/pmahasiswa_tampil.php");
	elseif( $tampil == "pmahasiswa_tambah" )		include("pmahasiswa/pmahasiswa_tambah.php");
	elseif( $tampil == "pmahasiswa_tambahproses" )	include("pmahasiswa/pmahasiswa_tambahproses.php");
	elseif( $tampil == "pmahasiswa_edit" )			include("pmahasiswa/pmahasiswa_edit.php");
	elseif( $tampil == "pmahasiswa_editproses" )	include("pmahasiswa/pmahasiswa_editproses.php");
	elseif( $tampil == "pmahasiswa_hapus" )			include("pmahasiswa/pmahasiswa_hapus.php");

	elseif( $tampil == "jurnalan" )				include("jurnalan/jurnalan_tampil.php");
	elseif( $tampil == "jurnalan_tambah" )		include("jurnalan/jurnalan_tambah.php");
	elseif( $tampil == "jurnalan_tambahproses" )	include("jurnalan/jurnalan_tambahproses.php");
	elseif( $tampil == "jurnalan_edit" )			include("jurnalan/jurnalan_edit.php");
	elseif( $tampil == "jurnalan_editproses" )	include("jurnalan/jurnalan_editproses.php");
	elseif( $tampil == "jurnalan_hapus" )			include("jurnalan/jurnalan_hapus.php");


	elseif( $tampil == "jurnalhi" )				include("jurnalhi/jurnalhi_tampil.php");
	elseif( $tampil == "jurnalhi_tambah" )		include("jurnalhi/jurnalhi_tambah.php");
	elseif( $tampil == "jurnalhi_tambahproses" )	include("jurnalhi/jurnalhi_tambahproses.php");
	elseif( $tampil == "jurnalhi_edit" )			include("jurnalhi/jurnalhi_edit.php");
	elseif( $tampil == "jurnalhi_editproses" )	include("jurnalhi/jurnalhi_editproses.php");
	elseif( $tampil == "jurnalhi_hapus" )			include("jurnalhi/jurnalhi_hapus.php");

	elseif( $tampil == "jwkuliah" )				include("jwkuliah/jwkuliah_tampil.php");
	elseif( $tampil == "jwkuliah_tambah" )		include("jwkuliah/jwkuliah_tambah.php");
	elseif( $tampil == "jwkuliah_tambahproses" )	include("jwkuliah/jwkuliah_tambahproses.php");
	elseif( $tampil == "jwkuliah_edit" )			include("jwkuliah/jwkuliah_edit.php");
	elseif( $tampil == "jwkuliah_editproses" )	include("jwkuliah/jwkuliah_editproses.php");
	elseif( $tampil == "jwkuliah_hapus" )			include("jwkuliah/jwkuliah_hapus.php");
	
	elseif( $tampil == "sertifikat" )				include("sertifikat/sertifikat_tampil.php");
	elseif( $tampil == "sertifikat_tambah" )		include("sertifikat/sertifikat_tambah.php");
	elseif( $tampil == "sertifikat_tambahproses" )	include("sertifikat/sertifikat_tambahproses.php");
	elseif( $tampil == "sertifikat_edit" )			include("sertifikat/sertifikat_edit.php");
	elseif( $tampil == "sertifikat_editproses" )	include("sertifikat/sertifikat_editproses.php");
	elseif( $tampil == "sertifikat_hapus" )			include("sertifikat/sertifikat_hapus.php");
	
	
	
	elseif( $tampil == "user_edit" ) 			include("user/user_edit.php");
	elseif( $tampil == "user_editproses" )		include("user/user_editproses.php");
	
	else echo"KONTEN TIDAK ADA";
?>