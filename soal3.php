<?php 
	function cekExist($arr,$n){
		$res=null; 
		for($i=0;$i<count($arr);$i++){
			if($arr[$i] == $n){
				$res = $i;
				break;
			}
		}
		if($res != null)
			return $res;
		return false;
	}
?>