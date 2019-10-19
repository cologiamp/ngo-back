<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database connection file
include_once '../../config/dbconnection.php';
include_once '../../objects/donation.php';
 //instantiate dbConnection class
$database = new dbconnection();
//establish connection to database
$db = $database->connect();
 
// instantiate donation class and initialize db object
$donation = new Donation($db);
$donation->id = $_GET['id'];
 
// query donation information
$stmt = $donation->get_single_donation();
//count number of rows
$num = $stmt->rowCount();
 
if($num==1){
 
    $donation_array=array();
    $donation_array["info"]=array();
     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $donation_list=array(
            "status"=>"200",
            "id" => $id,
            "ngoId" => $ngoId,
            "amount" => $amount
        );
 
        array_push($donation_array["info"], $donation_list);
    }
 
    echo json_encode($donation_list);
}
 
else{
    echo json_encode(
        array("status"=>"404","message" => "No donation found.")
    );
}
?>
