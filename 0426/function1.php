<?php
	function goukei( $a, $b, $c ){
		$total = $a + $b +$c;
		return $total;
	}


	function mypow( $x, $n){
		$kai = 1;
		for ($cnt=0; $cnt<$n; $cnt++){
			$kai= $kai * $x;
		}
		return $kai;
	}
