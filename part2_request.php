<?php
	// NOTE: This will serve as API, the logic is the same. I'm actually encountering a network issue at my local environment
	$numVal = $_POST["numVal"];
	$result = "";

	/*
		"Fizz" if x%3 == 0
		"Buzz" if x%5 == 0
		x if x%3 != 0 && x%5 != 0
	*/

	if ($numVal == 0) {
		$result = "Please enter value more than 0";
	} else {
		if ($numVal % 3 == 0) {
			$result .= "Fizz";
		}

		if ($numVal % 5 == 0) {
			$result .= "Buzz";
		}

		if ($numVal % 3 != 0 && $numVal % 5 != 0) {
			$result = "";
			$result = "x";
		}
	}

	$data = array();
	$data['result'] = $result;
	$data['test'] = "TESTING";
	$returnJson = json_encode($data);
	echo $returnJson;
?>