<h1> Murat Yaşar - PatikaDev (PHP) - Ödev 02 </h1>
<h3>Ödev.02: Verilen Dizideki boş elemanları temizleyen fonksiyon</h3>

<form method='POST'>
  <input type='number' name='nums'/>Numbers<br>
  <input type='number' name='blanks'/>Blanks<br>
  <input type='number' name='limit'/>Limit<br>
  <button type='submit'>Submit</button>
</form>
<?php
	# Kullanıcıdan veri al
	$nums = $_POST['nums'];		// Numara sayısı
	$blanks = $_POST['blanks'];	// Boşluk sayısı
	$limit = $_POST['limit'];	// Sayı limiti
	
	# Boşluklar içeren dizi oluştur
	$refArr = range(1,100);							// 1'den 100'e kadar sayılardan oluşan dizi oluştur
	$numArr = array_rand($refArr,$nums);			// $num adedince rastgele sayılardan oluşan bir dizi oluştur
	$blankArr = array_fill(0, $blanks, '');			// boşluklardan oluşan dizi oluştur
	$mergedArr = array_merge($numArr, $blankArr); 	// iki diziyi birleştir
	shuffle($mergedArr);							// birleşik diziyi karıştır
	
	echo '<pre>';
	echo '<b>Raw array with blanks: </b><br>';
	print_r($mergedArr);
	
	function filterArray($rawArr){
		$filteredArr = array_filter($rawArr, function ($el) {
			if($el != '') return $el;
		});
		return $filteredArr;
	}
	
	$cleanArr = filterArray($mergedArr);
	echo '<br><b>Clean array without blanks: </b><br>';
	print_r($cleanArr);
	
	function createRandArr($arr, $num){
		$newArr = [];
		
		for($i=0; $i<$num; $i++){
			array_push($newArr, $arr[array_rand($arr,1)]);
		}
		
		return $newArr;
	}
	
	echo '<br><b>Randomly created array without blanks: </b><br>';
	print_r(createRandArr($cleanArr, $limit));
?>
