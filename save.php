<?php
/*$json_data = $_POST['json_data'];*/
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);
// Recipient email address
$to = "jorge@laclavegrafica.com";

// Email subject
$subject = "JSON data via email";

// Email headers
$headers = "From: jorge@laclavegrafica.com\r\n";
$headers .= "Reply-To: jorge@laclavegrafica.com\r\n";
$headers .= "Content-Type: application/json\r\n";

// Send email with JSON data
mail($to, $subject, $json_data, $headers);
?>