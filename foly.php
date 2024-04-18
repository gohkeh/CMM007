<?php
// API endpoint URL
$url = 'http://154.113.16.142:8088/appdevapi/api/PiPCreateReservedAccountNumber';

// Request data
$data = array(
    'account_name' => 'Dev Afo',
    'bvn' => ''
);

// Convert data to JSON format
$data_json = json_encode($data);

// Initialize curl session
$ch = curl_init($url);

// Set curl options
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Client-Id: dGVzdF9Qcm92aWR1cw==',
    'X-Auth-Signature: BE09BEE831CF262226B426E39BD1092AF84DC63076D4174FAC78A2261F9A3D6E59744983B8326B69CDF2963FE314DFC89635CFA37A40596508DD6EAAB09402C7',
    'Authorization: Hawk id="dGVzdF9Qcm92aWR1cw==", ts="1712985830", nonce="pIhuf_", mac="oMgYpS59jsPHR9aYWN0sFo79AcvKP0BfpW4bNIZgprk="'
));

// Execute curl request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
}

// Close curl session
curl_close($ch);

// Output API response
echo $response;
?>

?>