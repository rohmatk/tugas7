<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/bootstrap.css"> 
	<title>Rohmat Kamil</title> 
</head> 
<body> 

	<div class="container-fluid">
 
		<div class="bg-primary text-white text-center">
			<br/>
			<h1>PERHITUNGAN NILAI PESERTA PELATIHAN</h1>
			<br/>
		</div>
 
	</div>

	<div class="container">
		<br/>
		<h5>Input Nilai</h5>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" data-redirect="" class="from">
			<div class="form-group">
				<label class="label">Nilai Praktik</label>
				<input type="number" name="praktik" class="form-control" placeholder="Masukan nilai praktik.">
			</div>

			<div class="form-group">
				<label class="label">Nilai Pilihan Ganda</label>
				<input type="number" name="pilihanganda" class="form-control" placeholder="Masukan nilai pilihan ganda">
			</div>

			<div class="form-group">
				<label class="label">Nilai Kehadiran</label>
				<input type="number" name="kehadiran" class="form-control" placeholder="Masukan nilai kehadiran">
			</div>

			<div class="form-group">
				<label class="label">Nilai Sikap</label>
				<input type="number" name="sikap" class="form-control" placeholder="Masukan nilai sikap">
			</div>

			<button type="submit" class="btn btn-primary" name="submit" >Hitung</button>
		</form>
			<?php
			$nilai_akhir = "";
			$kriteria = "";
			if (isset($_POST['submit'])){
				$praktik = $_POST['praktik'];
				$pilihanganda = $_POST['pilihanganda'];
				$kehadiran = $_POST['kehadiran'];
				$sikap = $_POST['sikap'];
				$nilai_akhir = (0.6*$praktik) + (0.3*$pilihanganda) + (0.05*$kehadiran) + (0.05*$sikap);
				if(($nilai_akhir >= 100) || ($nilai_akhir == 0 )){ 
					$kriteria = "Nilai akhir tidak valid";
				} elseif ($nilai_akhir >= 95){
					$kriteria = "Memuaskan";
				} elseif ($nilai_akhir >= 85){
					$kriteria = "Baik Sekali";
				} elseif ($nilai_akhir >= 75){
					$kriteria = "Baik";
				} elseif ($nilai_akhir >= 65){
					$kriteria = "Cukup";
				} else {
					$kriteria = "Tidak Lulus";
				}
			}
			echo "<br>";
			echo "Nilai Akhir = ".$nilai_akhir ;
			echo "<br>";
			echo "Kriteria Kelulusan = ".$kriteria ;
		?>	
	</div>
	<div class="container-fluid">
 
		<div class="bg-primary text-white text-center">
			<br/>
			<br/>
			<br/>
			<br/><br/>
		</div>
 
	</div>


	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
</body> 
</html>





