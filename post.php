
<?php

  $url = 'https://api.rootnet.in/covid19-in/unofficial/covid19india.org/statewise';

$request_url = $url;
$curl = curl_init($request_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

$myArray = json_decode($response);

print_r($myArray->data->statewise[0]->state);

    
?>