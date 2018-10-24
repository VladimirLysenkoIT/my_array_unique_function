<?php
/*
 *	realize an analogue of the function "array_unique"
 **/

$array = explode(" ", "2 Apple Samsung 2 Samsung Lenovo Apple Epson Samsung qwerty Epson");

function my_array_unique($array) {
	$array_unique = array();
	foreach($array as $item) {
		if (!in_array($item, $array_unique)) {
			$array_unique[] = $item;
		}
	}

	echo "<pre>";
		print_r($array_unique);
	echo "</pre>";
}

my_array_unique($array);