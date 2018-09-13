<?php 	

require_once 'core.php';

$sql = "SELECT product_id,brand_id, quantity,  categories_id FROM product WHERE status = 1 AND active = 1";
$result = $connect->query($sql);

$data = $result->fetch_all();

$connect->close();

echo json_encode($data);