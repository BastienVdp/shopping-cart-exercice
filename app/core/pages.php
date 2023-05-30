<?php

$pages = [
	'index' => 'products',
	'cart' => 'cart',
	'checkout' => 'checkout'
];

$page = $_GET['p'] ?? 'index';
$page = $pages[$page] ?? '404';
