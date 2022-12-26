<?php 
	function blueOcean($a,$b){
		if(!is_array($a) || !is_array($b))
			return false;
		$res = [];
		for($i=0;$i<count($a);$i++){
			if(!in_array($a[$i],$b)){
				$res[] = $a[$i];
			}

		}
		return $res;
	}
?>