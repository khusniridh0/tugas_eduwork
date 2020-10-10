<?php 

	try {
		
		$conn = new PDO("mysql:host=localhost;dbname=aTugas", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				function query($query){
					global $conn;

					$b = $conn->prepare($query);
					$b->execute();
					$rows = [];
					while ( $row = $b->fetch(PDO::FETCH_ASSOC)) {
						$rows = $row;
					};
					return($rows);
					
				};

				function tambahData($data){
					global $conn;
						$email = htmlspecialchars($data['email']);

						$nama = htmlspecialchars($data['nama']);
						$tempat_lahir = htmlspecialchars($data['tempat_lahir']);
						$tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
						$alamat = htmlspecialchars($data['alamat']);
						$posisi = htmlspecialchars($data['posisi']);
						$nohp = htmlspecialchars($data['nohp']);
						$usia = htmlspecialchars($data['usia']);
						$kelayakan = htmlspecialchars($data['kelayakan']);
						$pengalaman = htmlspecialchars($data['pengalaman']);
						$pendidikan = htmlspecialchars($data['pendidikan']);
						$skill = htmlspecialchars($data['skill']);
						$bahasa = htmlspecialchars($data['bahasa']);
						$tunjanggan = htmlspecialchars($data['tunjanggan']);
						$gaji = htmlspecialchars($data['gaji']);
						$cv = htmlspecialchars($data['cv']);

							$query = "UPDATE `pendaftaran` SET
										`nama lengkap` = '$nama',
										`tampat lahir` = '$tempat_lahir',
										`tanggal lahir` = '$tanggal_lahir',
										`alamat` = '$alamat',
										`posisi` = '$posisi',
										`nohp` = '$nohp',
										`usia` = '$usia',
										`kelayakan` = '$kelayakan',
										`pengalaman` = '$pengalaman',
										`pendidikan` = '$pendidikan',
										`skil` = '$skill',
										`bahasa` = '$bahasa',
										`tunjangan` = '$tunjanggan',
										`gaji` = '$gaji',
										`cv` = '$cv'
									WHERE `pendaftaran`.`email` = '$email';";
							$stmn = $conn->prepare($query);
							$stmn->execute();
							return $stmn->rowCount();
				};


				function daftar($daftar){
					global $conn;

					$email = htmlspecialchars($daftar['email']);
					$password = htmlspecialchars($daftar['password']);

					$query = "INSERT INTO pendaftaran VALUES (NULL, '', '', '', '', '$email', '', '', '', '', '', '', '', '', '', '', '')";
					$stmn = $conn->prepare($query);
					$stmn->execute();
					
					$query = "INSERT INTO angota VALUES (NULL, '$email', '$password');";
					$stmn = $conn->prepare($query);
					$stmn->execute();
					return $stmn->rowCount();

					
				};

				function login($login){
					/*ambil semau data*/
					$email = $login['email'];
					$password = $login['password'];

					$query = query("SELECT * FROM angota WHERE email = '$email';");

					if ( isset($query['email']) === $email && isset($query['password']) === $password) {
						header("location: pendaftaran.php?email=$email");
						// print_r($email);
					}else{
						echo "<div class='alert alert-danger position-absolute' role='alert'>Email atau Password yang anda masukan salah! coba lagi</div>";
					}
				}

			
	} catch (Exception $e) {
		echo"gagal coneksi". $e->getMessage();
	}






 ?>

