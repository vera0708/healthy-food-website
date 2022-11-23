<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// if(isset($_POST['incidentDetails']))
// {
//     echo 'Responce from server:  ' . $_POST['incidentDetails'];
// }
// else
// {
//     echo 'Request without paramenter';  
// }
// 
$_POST = json_decode(file_get_contents("php://input"), true);
echo var_dump($_POST);