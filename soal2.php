<?php
	function cekGanjilGenap($n){
		if($n % 2 !== 0)
			return 'ganjil';
		return 'genap'; 
	}

	function outlier($n){
		if(!is_array($n))
			return false;
		$j = count($n);
		if($j < 3)
			return false;
		$odd = 0;
		$even = 0;
		$ganjil = [];
		$genap = [];
		for($i=0;$i<$j;$i++){
			if(cekGanjilGenap($n[$i]) == 'ganjil'){
				$odd++;
				$ganjil[]=$n[$i];
			}
			else{
				$even++;
				$genap[]=$n[$i];
			}
		}

		if(count($ganjil) == 0 || count($genap) == 0)
			return false;
		elseif(count($ganjil) == 1)
			return $ganjil[0];
		elseif(count($genap) == 1)
			return $genap[0];
		else
			return false;
	}
?>
