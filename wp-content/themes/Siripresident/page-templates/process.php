<?php
/*
Template Name: Page de process Paypal
*/
?><?php
	require "inc/paypal.php";
	$paypal = new Paypal();
	$response = $paypal->request('GetExpressCheckoutDetails', array(
		'TOKEN' => $_GET['token'],
		));

        if($response) {
        if($response['CHECKOUTSTATUS'] == 'PaymentActionCompleted'){
		$message = 'Cette donation a déjà été validé';
	}
        }else{
        	$message = 'Il y a eu une erreur ...';
        }

		$prenom = $response['FIRSTNAME'];
		$nom = $response['LASTNAME'];
		$email = $response['EMAIL'];
		$statut = $response['ACK'];
        $response = $paypal->request('DoExpressCheckoutPayment', array(
        	'TOKEN' => $_GET['token'],
        	'PAYERID' => $_GET ['PayerID'],
        	'PAYMENTACTION' => 'Sale',

			'PAYMENTREQUEST_0_AMT' => $response['PAYMENTREQUEST_0_ITEMAMT'],
			'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR',
			'PAYMENTREQUEST_0_ITEMAMT' => $response['PAYMENTREQUEST_0_ITEMAMT'],
        	));

   if($response) {
        	$message = "Votre donation a bien été enregistré, nous vous remercions pour votre soutien ...";
            $message_redir = 'Vous allez être redirigé vers <a href="http://lionelpaul.us/projet-wordpress/">notre page d\'accueil</a>';
        	$montant = $response['PAYMENTINFO_0_AMT'];

			$transaction_id = $response['PAYMENTINFO_0_TRANSACTIONID'];
        	header ("Refresh: 5;URL=home"); 
        }else{
        	$message_erreur = 'Il y a eu une erreur ...';

        }
?><?php
  get_header();

  get_template_part('page-templates/header');
?>


<?php

  get_template_part('page-templates/footer');

  get_footer();
?>