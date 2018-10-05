<form method="POST">
	<font size="7" color="blue">KOMENTAR</font><br>
	<textarea name="komentar"></textarea><br>
	<input type="submit" name="kirim" value="Kirim">
</form>
	
<?php
	if (isset($_POST['kirim'])) {
		$komen = $_POST['komentar'];
		if (str_word_count($komen)>=5) {
			echo $komen;
		}
		else{
			echo "Komentar harus diatas 5 kalimat";		
		}	
	}
?>
