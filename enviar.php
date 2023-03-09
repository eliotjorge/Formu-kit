<?php
//$q = $_REQUEST["q"];
$data = json_decode($_POST['q'], true);
$to = "jorge@laclavegrafica.com";
$subject = "Test email";
//$message = "This is a test email.";

$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "Content-type: text/plain\r\n";

mail($to, $subject, $data, $headers);


/*
$filename = "envios.txt";
$content = file($filename);

$insertData = $data;
$fp = fopen($filename,"w");
fputs($fp,$data);
fclose($fp);
*/




?>