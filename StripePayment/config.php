<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

	$stripeDetails = array(
		"secretKey" => "sk_test_51OwNfvSFXdCF6QlR7Kf2NMmTM2j9TAqGALjrRK1kSmD0f3mxGJwQUlOktJSppKmQIsyCf8d7slLcviplkyefCMYd00M4bduZIe",  // Stripe Secret key
		"publishableKey" => "pk_test_51OwNfvSFXdCF6QlRUqRWyzVR89XivgHZyKcRxOBH9rcJSH6GRHaMbTf1O66p7KsBIZkSzZTaVix5PiZJS82s5F8000SEWtKPML"  //Stripe Publishable key
	);

	// Set secret key: remember to change this to live secret key in production
	// See keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
