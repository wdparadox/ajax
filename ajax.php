<?php 
    $returnData = array(
        "status" => 200,
        "info"   => "OK",
        "data"   => $_POST["data"]
        );
    echo json_encode($returnData);
 ?>