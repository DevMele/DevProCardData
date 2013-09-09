<?php
	$ids =[];
	$knownsets = './series1-3';
	$knownsets =	scandir($knownsets);
	foreach ($knownsets as $key => $value) {
		$ids[$key] = file($value);
	}
	print_r($ids);
?>