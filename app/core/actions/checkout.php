<?php

if($page === 'cart') {
	if(isset($_GET['checkout'])) {
		$page = $pages['checkout'];

		if(empty($cart)) header('Location: /cart?error');
		$_SESSION['cart'] = $cart = [];
	}
}