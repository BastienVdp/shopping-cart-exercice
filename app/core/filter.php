<?php

if(isset($_GET['filter'])) {
	if($_GET['filter'] !== '') {
		$filteredProducts = array_filter($products, function($product) {
			if (
				strpos(
					strtolower($product['name']), 
					strtolower($_GET['filter'])
				) !== false
			) return true;
			
			return false;
		});
	}
}