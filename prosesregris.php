<?php
	include"koneksi.php";

  	if (isset($_POST['submit'])) {
		include"koneksi.php";

		if ($koneksi) {
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$query = mysqli_query($koneksi,"SELECT*FROM mhs WHERE nim ='$nim'");
			$row = mysqli_fetch_array($query);
			$cari = strpos($nama, is_numeric($nama));

			if(strlen($nim)==10 && is_numeric($nim) == TRUE ){
				if (strlen($nama)<=25 && is_string($nama) ==TRUE) {
					if(strpos($email, '@gmail.com')==TRUE){
						if ($nim!==$row['nim']) {
							
							$sql = $koneksi->query("
								INSERT INTO `mhs` (`nim`, `nama`, `email`)
								VALUES ('$nim', '$nama', '$email')");
							echo "REGISTRASI SUKSES<br>";
						}
						else{
							echo "Nim sudah digunakan";
						}
					}
					else{
						echo "Email tidak valid";
					}
				}	
				else{
					echo "Nama tidak boleh melebihi 25 karakter dan harus berupa huruf.";
				}
			}
			else{
				echo "Nim harus 10 karakter dan berupa angka.";
			}
					
		}
		else{
			echo "REGISTRASI GAGAL";
		}
	}  		
 ?>
