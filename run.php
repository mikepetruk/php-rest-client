<?php

$offset = 0;
$limit = 50;
$totalrecords = 5058427;
$k = round($totalrecords / $limit);

function sendRequest ($limit, $offset) {
    $url="http://localhost/";

    $postdata='{"limit": '.$limit.',"offset": '.$offset.',"filters": [{}]}';

    $headers = array("Authorization: 234234dw0eif0nmm23423qe3431"); 

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


    if( ! $result = curl_exec($ch)) { 
          trigger_error(curl_error($ch)); 
    }

    curl_close($ch); 

   var_dump( $result); 
   echo "\n";


   
} 

for ($i = 1; $i <= 3; $i++) {
    sendRequest ($limit, $offset);
    $offset = $offset + $limit;
}


?>