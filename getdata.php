<?php
include 'conn.php';
$id   = $_POST['barcode_id'];
$queryResult = $connect->query("
SELECT 
clients.id, clients.first_name, clients.infix, clients.last_name, clients.bloodtype, clients.bsn_number, 
client_checkup.client_id, client_checkup.temperature, client_checkup.blood_presure, client_checkup.heart_beat, client_checkup.comment, client_checkup.date_placed
FROM clients
INNER JOIN client_checkup ON clients.id = client_checkup.client_id
WHERE clients.id = {$id}
; ");

$result = array();

while ($fetchData=$queryResult->fetch_assoc()) {
    $result[]=$fetchData;
}

echo json_encode($result);
