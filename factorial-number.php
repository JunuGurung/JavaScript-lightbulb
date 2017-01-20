
<?php 
	function factorial_num($num){
		$inital = 1;

		for($i = 1; $i <=$num; $i++){
			$inital = $inital * $i;
		}
		echo $inital;

	}

	factorial_num(6);

?>