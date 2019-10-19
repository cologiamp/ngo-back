<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database connection file
include_once '../../config/dbconnection.php';
include_once '../../objects/ngo.php';
 //instantiate dbConnection class
$database = new dbconnection();
//establish connection to database
$db = $database->connect();
 
// instantiate ngo class and initialize db object
$ngo = new Ngo($db);
$ngo->id = $_GET['id'];
 
// query ngo information
$stmt = $ngo->get_single_ngo();
//count number of rows
$num = $stmt->rowCount();
 
if($num==1){
 
    $ngo_array=array();
    $ngo_array["info"]=array();
     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $ngo_list=array(
            "status"=>"200",
            "id" => $id,
            "name" => $name
        );
 
        array_push($ngo_array["info"], $ngo_list);
    }
 
    echo json_encode($ngo_list);
}
 
else{
    echo json_encode(
        array("status"=>"404","message" => "No NGO found.")
    );
}
?>
