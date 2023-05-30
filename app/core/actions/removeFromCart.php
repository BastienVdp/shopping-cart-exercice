<?php

if ($removeFromCart) {
	$id = $removeFromCart;
	$key = array_search($id, array_column($products, 'id'));

	if($key === false) {
		die('Product not found'); exit;
	}
	
	$keyCart = array_search($id, array_column($cart, 'id'));
	if($keyCart === false) {
		die('Product not found in cart'); exit;
	}
	if($cart[$keyCart]['quantity'] > 1) {
		$cart[$keyCart]['quantity']--;
	} else {
		unset($cart[$keyCart]);
	}
	$_SESSION['cart'] = array_values($cart);
	header('Location: /cart');
}