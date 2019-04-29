<?php
include('dbConfig.php');

if(isset($_POST["client_id"]) && !empty($_POST["client_id"])){

    $query = $db->query("SELECT * FROM clients WHERE client_id = ".$_POST['client_id']." AND status = 1 ORDER BY client_name ASC");
    
    $rowCount = $query->num_rows;
}

?>