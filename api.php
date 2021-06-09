<?php 
    include_once './data/db.php';

    header('Content-Type: application/json');

    $genres=[];
    $albums= empty($_GET['genre']) || $_GET['genre'] === "all" ? $database : [] ;


    foreach($database as $album){
        if(!in_array($album['genre'],$genres)){
            $genres[]=$album['genre'];
        }
    };

    
    if(count($albums) === 0){
        
        foreach($database as $album){
            if( $_GET['genre'] === $album['genre']){
                $albums[] = $album;
            }
        }
    };
    
    $response=[
        'albums'=> $albums,
        'genres' => $genres
    ];

    echo json_encode($response);
?>