<?php
	require_once "src/gburtini/HumanizePHP/HumanizePHP.php";

	date_default_timezone_set("UTC");
	use gburtini\HumanizePHP\HumanizePHP;
	for($i=0;$i<100;$i++) {
		echo HumanizePHP::ordinal($i) . "\t" . HumanizePHP::apnumber($i) . "\t" . HumanizePHP::intword($i*22000000) . "\n";
	}


	echo HumanizePHP::naturalday(strtotime("-3 hours")) . "\n";
	echo HumanizePHP::naturalday(strtotime("+24 hours")) . "\n";
	echo HumanizePHP::naturalday(strtotime("-25 hours")) . "\n";
	echo HumanizePHP::naturalday(strtotime("-3 weeks")) . "\n";
	
	echo HumanizePHP::checkize(144) . "\n";

	echo HumanizePHP::checkize(198234) . "\n";
	echo HumanizePHP::checkize(198) . "\n";
	echo HumanizePHP::checkize(999) . "\n";

	echo HumanizePHP::naturaltime(time() + 60) . "\n";
	echo HumanizePHP::checkize(100) . "\n";
	echo HumanizePHP::checkize(9999999999) . "\n";		
?>
