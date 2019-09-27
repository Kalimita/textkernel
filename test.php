<?php

define("API_URL", "https://home.textkernel.nl/match/extract.do?useJsonErrorMsg=true");
define("LOGOUT_URL", "https://home.textkernel.nl/sourcebox/logout.jsp");
define("ACCOUNT", "tkdemo_ml_cv");
define("USERNAME", "behrud_demo");
define("PASSWORD", ".8sT0%Cjc'");

$fields = [
  "account" => ACCOUNT,
  "username"=> USERNAME,
  "password" => PASSWORD,
  "uploaded_file" => curl_file_create('cv.docx')
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
$result = curl_exec($ch);
file_put_contents("result.xml", $result);
curl_close($ch);

$xmlNode = simplexml_load_file('result.xml');
$json = json_encode($xmlNode);
file_put_contents("result.json", $json);

?>
