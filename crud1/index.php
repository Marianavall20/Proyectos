<?php 
header("Access-Control-Allow-Origin: *");
//En caso de que el método no sea POST mo ingrese//
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo json_decode(array('status' => false));
    exit;
}

echo $postdata = file_get_contents("php://input");

$datos=json_decode($postdata, true);
?>