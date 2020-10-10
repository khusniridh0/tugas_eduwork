<?php 
require '../php/olahdata.php';
	$cari = $_GET['email'];
	$data = query("SELECT email FROM pendaftaran WHERE email = '$cari';");

 ?>

<!doctype html>
<html lang="en">
 <head>
<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- bootstrap -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<!-- jquerycss -->
	<link rel="stylesheet" href="../bootstrap/css/jquery-ui.css">
	<!-- my css -->
	<link rel="stylesheet" href="../css/mycss.css">

	<title>Pendaftaran Online</title>
</head>
<body>
    

	<div class="card bg-pendaftara">
		<div class="card-header d-flex justify-content-center bg-info text-white"><h1>Pendandaftaran Online</h1></div>
		<div class="mt-3 pr-3 d-flex justify-content-end">
			<?php 
				if (isset($_POST['kirim'])) {
					if (tambahData($_POST) > 0) {
						echo "<div class='alert alert-success position-absolute' role='alert'>Data berhasi di ubah</div>";
					}else{
						echo "<div class='alert alert-danger position-absolute' role='alert'>Data gagal di ubah</div>";
					}
				}
			?>
		</div>
		<div class="container mt-5">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8">
					<form action="" method="POST" class="was-validated my-5 my-5">
						<div class="form-grup">
							<label for="validationCustom01">Nama Lengkap</label>
					    	<input type="text" name="nama" class="form-control" id="validationCustom01" required>
					    	<div class="valid-feedback">Semoga Berhasil!</div>
					    	<div class="invalid-feedback">Nama lengkap.</div>
					    </div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-8 mt-3">
									<label for="validationCustom02">Tempat Lahir</label>
									<input type="text" name="tempat lahir" class="form-control" id="validationCustom02" required>
					    			<div class="valid-feedback">Semoga Berhasil!</div>
					    			<div class="invalid-feedback">Tampat lahir.</div>
								</div>
								<div class="col-md-4 mt-3">
									<label for="validationCustom04">Tanggal Lahir</label>
									<input type="date" name="tanggal lahir" class="form-control" id="validationCustom04" required>
					    			<div class="valid-feedback">Semoga Berhasil!</div>
					    			<div class="invalid-feedback">Tanggal lahir.</div>
								</div>
							</div>				
						</div>
						<div class="form-group mb-5">
					        <label for="validationCustom05">Alamat</label>
					        <textarea class="form-control" name="alamat" id="validationCustom05" required></textarea>
					        <div class="valid-feedback">Semoga Berhasil!</div>
					   		<div class="invalid-feedback">Alamat domisili.</div>
						</div>
						<div class="form-group mt-5">
							<label for="validationCustom06">Email</label>
							<input type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control" id="validationCustom06" readonly>
							<div class="valid-feedback">Semoga Berhasil!</div>
					    	<div class="invalid-feedback">Alamat emali yang masih aktif.</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<label for="validationCustom07">Posisi Pekerjaan</label>
									<input type="text" name="posisi" class="form-control" id="validationCustom07" required>
					    			<div class="valid-feedback">Semoga Berhasil!</div>
					    			<div class="invalid-feedback">Posisi pekerjaan apa yang anda cari.</div>
								</div>
								<div class="col-md-4">
									<label for="validationCustom08">Nomor HP/Whatsapp</label>
									<input type="number" name="nohp" class="form-control" id="validationCustom08" required>
					    			<div class="valid-feedback">Semoga Berhasil!</div>
					    			<div class="invalid-feedback">Nomor yang masih aktif.</div>
								</div>
								<div class="col-md-2">
									<label for="validationCustom09">Usia</label>
									<input type="number" name="usia" class="form-control" id="validationCustom09"required>
					    			<div class="valid-feedback">Semoga Berhasil!</div>
					    			<div class="invalid-feedback">Usia.</div>
								</div>
							</div>	
						</div>
						<div class="form-group">
							<label for="validationCustom010">Kelayakan</label>
							<textarea class="form-control" name="kelayakan" id="validationCustom010" required></textarea>
							<div class="valid-feedback">Semoga Berhasil!</div>
					    	<div class="invalid-feedback">Kenapa anda merasa layank bekerja di posisi tersebut.</div>
						</div>
						<div class="form-grup">
							<label for="validationCustom11">Pengalaman kerja</label>
					    	<textarea class="form-control" name="pengalaman" id="validationCustom011" required></textarea>
					    	<div class="valid-feedback">Semoga Berhasil!</div>
					    	<div class="invalid-feedback">Pengalaman kerja Jika ada. (di utamakan)</div>
					    </div>
					    <div class="mt-3"><label>Pendidikan Terahir</label></div>
						<div class="uncheck">
						    <!-- Material unchecked -->
							<div class="form-check pt-4 ml-4">
								<input type="radio" name="pendidikan" value="SMA/SMK" class="form-check-input" id="materialChecked" name="materialExampleRadios" required>
								<label class="form-check-label" for="materialChecked">SMA/SMK</label>
							</div>
							<!-- Material checked -->
							<div class="form-check mt-3 ml-4">
								<input type="radio" name="pendidikan" value="D3/S1" class="form-check-input" id="materialChecked" name="materialExampleRadios" required>
								<label class="form-check-label" for="materialChecked">D3/S1</label>
							</div>
							<!-- Material checked -->
							<div class="form-check pb-4 mt-3 ml-4">
								<input type="radio" name="pendidikan" value="S2/S3" class="form-check-input" id="materialChecked" name="materialExampleRadios" required>
								<label class="form-check-label" for="materialChecked">S2/S3</label>
								<div class="valid-feedback">Semoga Berhasil!</div>
							   	<div class="invalid-feedback">Pendidikan formal terahir.</div>
							</div>
						</div>
						<div class="form-grup mt-3">
							<label for="validationCustom12">Skill/Keterampilan?</label>
					    	 <textarea name="skill" class="form-control" id="validationCustom12" required></textarea>
					    	<div class="valid-feedback">Semoga Berhasil!</div>
					    	<div class="invalid-feedback">Menurutmu, apa saja skill/keterampilan yang telah kamu kuasai?</div>
					    </div>
					    <div class="form-grup mt-3">
					    	<label for="inputGroupSelect13">Bahasa</label>
						    <div class="input-group">
								<select name="bahasa" class="custom-select" id="inputGroupSelect13">
									<option value="Indonesia">Indonesia</option>
									<option value="Inggris">Inggris</option>
									<option value="Mandarin">Mandarin</option>
									<option value="Jepang">Jepang</option>
									<option value="Jerman">Jerman</option>
									<option value="Lainnya">Lainya</option>
								</select>
								<div class="input-group-append">
								<label class="input-group-text" for="inputGroupSelect13">Options</label>
								</div>
								<div class="valid-feedback">(*Mengusai bahasa asing menjadi nilai plus*) Semoga Berhasil!</div>
							</div>
						</div>
						<div class="form-grup mt-3">
							<label for="validationCustom15">Tunjangan?</label>
					    	<input type="text" name="tunjanggan" class="form-control" id="validationCustom15" required>
					    	<div class="valid-feedback">Semoga Berhasil!</div>
					    	<div class="invalid-feedback">Tunjangan apa yang anda harapkan?</div>
					    </div>
						<div class="form-grup mt-3">
							<label for="validationCustom15">Besar Gaji?</label>
					    	<input type="text" name="gaji" class="form-control" id="validationCustom15" required>
					    	<div class="valid-feedback">Semoga Berhasil!</div>
					    	<div class="invalid-feedback">Berapa besar gaji yang anda harapkan?</div>
					    </div>
						<div class="form-grup mt-3">
							<label for="inputGroupFile01">Upload CV anda</label>
							<div class="custom-file">
								<input type="file" name="cv" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
								<label	class="custom-file-label" for="inputGroupFile01">Choose file</label>
								<div class="valid-feedback">Semoga Berhasil!</div>
								<div class="invalid-feedback">Format pdf,jpg,jpeg,png</div>
							</div>
						</div>
						<button class="btn btn-primary mt-5" name="kirim" value="1">Kirim Lamaran</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="../bootstrap/js/jquery.js"></script>
	<script src="../bootstrap/js/script.js"></script>
</body>
</html>










