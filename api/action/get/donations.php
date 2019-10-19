<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database connection file
include_once '../../config/dbconnection.php';
include_once '../../objects/donation.php';
//include_once '../../objects/ngo.php';
 //instantiate dbConnection class
$database = new dbconnection();
//establish connection to database
$db = $database->connect();
 
// instantiate donation class and initialize db object
$donation = new Donation($db);
 
// query donation information
$stmt = $donation->get_donations();
//count number of rows
$num = $stmt->rowCount();
 
if($num>0){
 
    $donation_array=array();
    //$donation_array["info"]=array();
     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $donation_list=array(
            "status"=>"200",
            "id" => $id,
            "ngoId" => $ngoId,
            "name" => $name,
            "amount" => $amount,
            "created" => $created
        );
 
        array_push($donation_array, $donation_list);
    }
 
    echo json_encode($donation_array);
}
 
else{
    echo json_encode(
        array("status"=>"404","message" => "No donations found.")
    );
}
?>
