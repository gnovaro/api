<?php
/**
 * Get product Reviews
 * CualElijo.com
 * @version 1.0.0
 * API call example
 * http://API_URL/method-name/API-KEY/Parameters
 */
    // Unique API Key of your site
    $api_key = '3bc39b44acd7f44ec215ba905d26ceac0ecff679d10bae2dd814aea715e2c803';

    // API URL Sandbox
    $api_url = 'http://api-sandbox.cualelijo.com'; // Use 'http://api.cualelijo.com' // For Production

    // Product name or model
    $product = rawurlencode('PEABODY PE-KV8213');

    // create curl resource
    $curl = curl_init();

    // GET call to the cualelijo.com API
    $url = $api_url."/$api_key/reviews/$product";

    //Debug url
    //echo $url."\n";

    $params = array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
    );

    curl_setopt_array($curl, $params);

    // $response contains the JSON output string
    $response = curl_exec($curl);

    // close curl resource to free up system resources
    curl_close($curl);

    $data = json_decode($response);

    var_dump($data);
