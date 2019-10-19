
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
 
// set url encoded values to donation properties 
//$donation->id = $_GET['id'];
$donation->ngoId = $_POST['ngoId'];
$donation->amount = $_POST['amount'];

//$donation->ngoId = $_GET['ngoId'];
//$donation->amount = $_GET['amount'];


// save donation
if($donation->create_donation()){
    
     echo json_encode(array("status"=>"201","message" => "The donation has been placed."));

}
 
// if unable to save donation, show status code and message
else{
 	
 	echo json_encode($donation->create_donation());

    //echo json_encode(array("status"=>"409","message" => "Unable to place the donation."));
}

?>