<h1> Murat Yaşar - PatikaDev (PHP) - Ödev 01 </h1>

<form method='POST'>
	<input type='number' name='input' min='1'>
	<button type='submit'>Submit</button>
</form>

<?php	// Ödev.01: Üçgen Çizen Fonksiyon
	$input = $_POST['input'];

	function drawTriangle($num){
		echo $num . '<br>';
		$html = '';
		$line = 0;
		
		while($line < $num){
			$html .= '<br>';	
			for($i=0; $i<=$line; $i++){ $html .= '<b>0</b>'; }			
			$line++;
		}
		return $html;
	}
	
	echo drawTriangle($input);
?>
