<?php
    header("Content-type: application/json");
    require_once('../config/connection.php');
    $conn = connect();

        // Four Function will be applied in this page
// readAll , Insert , Update, and Delete Functions

// POST
$action = $_POST['action']; // that action could be CREATE, UPDATE, READ AND DELETE

// function readServices($conn){
//     $data = array();
//     $message = array();
//     $id = $_POST['id'];

//     $query = "SELECT * FROM services WHERE id = '$id'";
//     $result = mysqli_query($conn, $query);
    
//     if($result):
//         while($row = mysqli_fetch_object($result)):
//             $data[] = $row;
//         endwhile;
//         $message = array("status"=>true, "data"=>$data);
//     else:
//         $message = array("status"=>false, "data"=> mysqli_error($conn));
//     endif;

//     echo json_encode($message);
// }
// function updateServices($conn){
//     $id = $_POST['id'];
//     $title = $_POST['title'];
//     $content = $_POST['content'];

//     $data = array();

//     $query = "UPDATE services SET card_title = '$title', card_content = '$content' WHERE id = $id";

//     $result = mysqli_query($conn, $query);

//     if (!$result) :
//         $data = array("status" => false, "data" => mysqli_error($conn));
//     else :
//         $data = array("status" => true, "data" => "Updated successfully");
//     endif;

//     echo json_encode($data);
// }


// if (isset($action)) :
//     if ($action == "readAll") :
//         $action($conn, $tbl);
//     else :
//         $action($conn);
//     endif;
// else :
//     echo "Action Required....";
// endif;
?>