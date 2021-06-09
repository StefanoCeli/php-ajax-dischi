<?php 
    include_once './data/db.php';

    header('Content-Type: application/json');

    //uso la funzione array_multisort che va a ordinare gli array multidimensionali in base al primo valore che trova,all'interno uso array_column che va a mettere in cima la chiave che passiamo,cosi facendo il primo valore che avrà l'array sarà l'anno e verrà letto dall'array_multisort
    array_multisort(array_column($database,'year'),SORT_ASC,SORT_NUMERIC,$database);

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