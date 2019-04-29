<?php
include('dbConfig.php');

if(isset($_POST["company_id"]) && !empty($_POST["company_id"])){

    $query = $db->query("SELECT * FROM company WHERE company_id = ".$_POST['company_id']." AND status = 1 ORDER BY company_name ASC");
    
    $rowCount = $query->num_rows;
}

?>



