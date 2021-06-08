<?php 
    include_once './data/db.php';

    header('Content-Type: application/json');
    echo json_encode($database);
?>