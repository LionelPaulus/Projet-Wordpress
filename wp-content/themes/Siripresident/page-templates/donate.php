<?php
/*
Template Name: Page de donation
*/
?><?php 
    require '../inc/paypal.php';
    $paypal = new Paypal();
    $params = array (

        'RETURNURL' => 'http://lionedpaul.us/projet-wordpress/process',
        'CANCELURL' => 'http://lionedpaul.us/projet-wordpress/cancel',

        'PAYMENTREQUEST_0_AMT' => $_POST['montant'],
        'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR',

        'L_PAYMENTREQUEST_0_NAME0' => 'Donation Siri',
        'L_PAYMENTREQUEST_0_AMT0' => $_POST['montant'],
        'L_PAYMENTREQUEST_0_QTY0' => 1
        );
   $response = $paypal->request('SetExpressCheckOut', $params);



   if($response) 
    {
        $paypal = "https://www.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=" . $response['TOKEN'];
    }
        else {
            var_dump($paypal->errors);
            die('Erreur');
        }

?>
<?php
  get_header();

  get_template_part('page-templates/header');
?>
    <form>
        <label for="montant">Montant de votre donation :</label>
        <input class="montant" type="text" id="montant" name="montant"></input>
        <button type="validate">Valider</button>
    </form>

<?php

  get_template_part('page-templates/footer');

  get_footer();
?>