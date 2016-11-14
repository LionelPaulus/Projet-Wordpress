<?php

Class Paypal{

	private $user = "siri2017_api1.hetic.net";
	private $password = "FS447YAJ4252DY38";
    private $signature = "AFcWxV21C7fd0v3bYYYRCpSSRl31AfgOFyznlz7Wi68J1LLwbWOT4ccv";
    private $endpoint = 'https://sandbox.api-3T.paypal.com/nvp';
    public $errors = array();

    public function __consctruct($user = false, $password = false, $signature = false, $prod = true) {
    	if($user) {
    		$this->user = $user;
    	}
    	if($password) {
    		$this->password = $password;
    	}
    	if($user) {
    		$this->password = $password;
    	}
    }

    public function request($method, $params) {
    	   $params = array_merge($params, array(
        	'METHOD' => $method,
       		'VERSION' => '74.0',
        	'USER' => $this->user,
        	'SIGNATURE' => $this->signature,
        	'PWD' => $this->password,

        ));
    	 $params = http_build_query($params);
        $endpoint = 'https://sandbox.api-3T.paypal.com/nvp';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->endpoint,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_VERBOSE => 1
            ));
        $response = curl_exec($curl);
        $responseArray = array();
        parse_str($response, $responseArray);
        if(curl_errno($curl)) {

           $this->errors = curl_error($curl);
            curl_close($curl);
            return false;

        }else{
            if($responseArray['ACK'] == 'Success') {
            	return $responseArray;
            }else {
                $this->errors = $responseArray;
            	curl_close($curl);
                return false;
            }
        }
        
    }
}