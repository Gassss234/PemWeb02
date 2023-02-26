<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>
					Hello!
				</h2>
				<p>
					Ini merupakan rekap data rekayasa anak-anak SI 14 yang saya buat, sebagai tugas mata perkuliahan Pemrograman Web 2 :)
				</p>
			</div>
		</div>
	</div>
</div>

<?php
$ns1 = ['id'=>1,'nama'=>'Arbitio Bagas','nim'=>'01101','uts'=>'80','uas'=>'84','tugas'=>'78'];
$ns2 = ['id'=>2,'nama'=>'Dimas Julian','nim'=>'01121','uts'=>'70','uas'=>'50','tugas'=>'68'];
$ns3 = ['id'=>3,'nama'=>'Jasrino M','nim'=>'01130','uts'=>'60','uas'=>'86','tugas'=>'70'];
$ns4 = ['id'=>4,'nama'=>'Alika Gusti','nim'=>'01134','uts'=>'90','uas'=>'92','tugas'=>'82'];
$ns5 = ['id'=>5,'nama'=>'Fadly Kalam','nim'=>'01144','uts'=>'83','uas'=>'88','tugas'=>'89'];
$ns6 = ['id'=>6,'nama'=>'Abdul Halim','nim'=>'01292','uts'=>'93','uas'=>'87','tugas'=>'97'];
$ns7 = ['id'=>6,'nama'=>'Fahlia Athiya','nim'=>'01232','uts'=>'92','uas'=>'82','tugas'=>'90'];
$ns8 = ['id'=>6,'nama'=>'Fatya Komsah','nim'=>'01392','uts'=>'96','uas'=>'83','tugas'=>'84'];
$ns9 = ['id'=>6,'nama'=>'Hamzah Abdullah','nim'=>'01192','uts'=>'98','uas'=>'81','tugas'=>'80'];
$ns10 = ['id'=>6,'nama'=>'Dewi','nim'=>'01912','uts'=>'88','uas'=>'90','tugas'=>'86'];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5, $ns6, $ns7, $ns8, $ns9, $ns10];

?>
<div class="daftar-nilai";
<h2 align=center>Daftar Nilai Siswa</h2>
<table border="1" width="100%">
<thead>
    <tr>
        <th>No</th><th>Nama</th><th>NIM</th><th>UTS</th>
        <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
    </tr>
    <link rel="stylesheet" href="css1.css">
    <link 
      rel="stylesheet" 
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    />
</thead>
<tbody>
    <?php
    $nomor =1;
    foreach($ar_nilai as $ns){
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$ns['nama'].'</td>';
        echo '<td>'.$ns['nim'].'</td>';
        echo '<td>'.$ns['uts'].'</td>';
        echo '<td>'.$ns['uas'].'</td>';
        echo '<td>'.$ns['tugas'].'</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;

    }
    ?>
</tbody>
</table>



<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-554647">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-554647" class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-554647">
					</li>
					<li data-slide-to="2" data-target="#carousel-554647">
					</li>
				</ol>
				<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-success alert-dismissable">		 
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">					
				</button>
				<h4>
					Perhatian
				</h4> <strong>Nilai dibawah B-</strong> Diwajibkan Untuk Mengulang Mata Kuliah <a href="#" class="alert-link">( Peringatan Penting )</a>
			</div>
		</div>
	</div>
</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block" alt="Carousel Bootstrap First" src="https://beta.nurulfikri.ac.id/images/artikel/artikel/A1_png.png" />
						<div class="carousel-caption">
							<h4>
                            Sekolah Tinggi Teknologi Terpadu Nurul Fikri (populer disebut STT-NF) 
							</h4>
                            <p>
                            merupakan perguruan tinggi yang memadukan keilmuan praktis di bidang teknologi informasi dengan pengembangan kepribadian islami, kompeten dan berkarakter.
                            </p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block" alt="Carousel Bootstrap Second" src="https://biayakuliah.kelas-karyawan.com/wp-content/uploads/2022/12/hero-1.webp" />
						<div class="carousel-caption">
							<h4>
                            Salah satu tujuan berdirinya STT-NF adalah 
							</h4>
                            <p>
                            “Mencetak Sarjana komputer berakhlak mulia, profesional, dan bersertifikasi IT”. Tujuan itu untuk memenuhi kebutuhan sarjana teknologi informasi ditengah masyarakat, dengan konsisten mengusung nilai-nilai profesionalisme dan keislaman.
                            </p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block" alt="Carousel Bootstrap Third" src="https://kuliah-sabtu-minggu.com/wp-content/uploads/2022/11/maxresdefault-2.jpg" />
						<div class="carousel-caption">
							<h4>
								Alamat Sekolah Tinggi Teknologi Terpadu Nurul Fikri
							</h4>
							<p>
                            Alamat: Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640
							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-554647" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-554647" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 


    