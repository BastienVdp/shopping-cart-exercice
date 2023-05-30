<?php

if ($addToCart) {
	$id = $addToCart;
	$key = array_search($id, array_column($products, 'id'));

	$product = $products[$key];
	if($key === false) {
		die('Product not found'); exit;
	}
	$isInCart = in_array($id, array_column($cart, 'id'));
	if($isInCart) {
		$keyCart = array_search($id, array_column($cart, 'id'));
		$cart[$keyCart]['quantity']++;
		$_SESSION['cart'] = $cart;
	} else {
		$product = [
			...$product,
			'quantity' => 1
		];
		$_SESSION['cart'] = [...$cart, $product];
	}
	header('Location: /');
}