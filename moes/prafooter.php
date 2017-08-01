 <?php
  if(!defined("INDEX")) die("---");
  ?>
 
				<!-- extra -->
<div id="extra-wrap">
	<div id="extra" class="clearfix">

	  

	    <div class="col-md-4">

		    <h3>Kontak info</h3>
        <img class="img-circle" src="css/img/logo.png" alt="Generic placeholder image" style="width: 80px; height: 80px;">

		    <p>
		    <strong>Phone: </strong>+1234567<br/>
		    <strong>Fax: </strong>+123456789
		    </p>

		    <p><strong>Alamat: </strong>Jl Hanglekir I No 8, Jakarta </p>
            <p><strong>E-mail: </strong>moestopofisip@gmail.com/p>
		    <p>info lebih lanjut <a href="moestopofisip@gmail.com">kontak kami</a></p>

            <h3>Sosial Media</h3>

            <ul class="subscribe-stuff">
      	        <li><a title="Facebook" href="https://www.facebook.com/fisipmoestopo" rel="nofollow">
				<img alt="Facebook" title="Facebook" src="css/img/sosial_f.png" /></a>
			    </li>
           <li><a title="Instagram" href="https://www.instagram.com/fisipmoestopo" rel="nofollow">
        <img alt="Instagram" title="Instagram" src="css/img/sosial_in.png" /></a>
          </li>
			    <li><a title="Twitter" href="https://twitter.com/fisip_moestopo" rel="nofollow">
				<img alt="Twitter" title="Twitter" src="css/img/sosial_t.png" /></a>
			    </li>
           <li><a title="Youtube" href="https://www.youtube.com/channel/UCgqtiBBfdGMykz5zJA2EFKg" rel="nofollow">
        <img alt="Youtube" title="Youtube" src="css/img/sosial_y.png" /></a>
          </li>
			    <li><a title="E-mail this story to a friend!" href="moestopofisip@gmail.com" rel="nofollow">
				<img alt="E-mail this story to a friend!" title="E-mail this story to a friend!" src="css/img/sosial_g.png" /></a>
			    </li>
            </ul>

          

	    </div>

	    <div class="col-md-4">

   	        <h3>Artikel</h3>

		    <div class="footer-list">
			    <ul>
				    <?php	
					$artikel = mysql_query("select * from artikel order by id_artikel desc limit 5");
					while($data=mysql_fetch_array($artikel)){
						echo "<li><a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
					}
				?>
			    </ul>
		    </div>

            <h3>Link Tautan</h3>

		    <div class="footer-list">
			    <ul>
				    <li><a href="https://moestopo.ac.id/">Universitas Prof.Dr.Moestopo</a></li>
				    <li><a href="https://dosen.moestopo.ac.id/">Anjungan Dosen</a></li>
				    <li><a href="https://mahasiswa.moestopo.ac.id/">Anjungan Mahasiswa</a></li>
				    <li><a href="index.html">Site Map</a></li>
			    </ul>
		    </div>

	    </div>

       

        <div class="col-md-4">

            <h3>Berita</h3>

	        <div class="footer-list">
			    <ul>
				      <?php	
					$berita = mysql_query("select * from berita order by id_berita desc limit 5");
					while($data=mysql_fetch_array($berita)){
						echo "<li><a href='?tampil=berita_detail&id=$data[id_berita]'>$data[judul]</a></li>";
					}
				?>
			    </ul>
		    </div>
	    </div>

<!-- /extra -->
				
			</div>
	</div>




