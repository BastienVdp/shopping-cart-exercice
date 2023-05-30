<?php
	$cart = $_SESSION['cart'] ?? [];

	$addToCart = isset($_GET['add']);
	$removeFromCart = isset($_GET['remove']);

	require_once 'actions/addToCart.php';
	require_once 'actions/removeFromCart.php';
	require_once 'actions/checkout.php';

	$totalItemCart = 0;
	$totalCart = 0;
	
	foreach($cart as $product) {
		$totalItemCart += $product['quantity'];
		$totalCart += $product['quantity'] * $product['price'];
	}

	