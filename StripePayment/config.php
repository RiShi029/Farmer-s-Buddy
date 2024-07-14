<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

	$stripeDetails = array(
		"secretKey" => "",  // Stripe Secret key
		"publishableKey" => ""  //Stripe Publishable key
	);

	// Set secret key: remember to change this to live secret key in production
	// See keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
