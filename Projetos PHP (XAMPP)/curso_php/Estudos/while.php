<?php 

	$num = 1;
	while ($num < 10) {
		# code...

		$num = $num + 1; 

		if ($num == 3) {
			continue;
		}

		echo $num;
		echo '<br />';
		$num = $num + 1 ;


	}






?>