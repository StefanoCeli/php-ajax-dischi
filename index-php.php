<?php 
    include './data/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>

<header>

</header>

<main>

<div class="container">

      <h3 class=" text-white text-center mb-4">Seleziona un genere</h3>
     
      <select class="form-select text-white mb-5 ms-auto me-auto">
            <option value="" >Tutti</option>
            <option>Pop</option>
            <option>Rock</option>
            <option>Metal</option>
            <option>Jazz</option>
        </select>

        <div class="row d-flex justify-content-center">
            <?php foreach($database as $disco): ?>
            <div class="card col-xs-12 col-sm-5 col-lg-2 mb-3 ms-2 me-2 p-3 p-lg-2 text-white">
                    <a href="#"><img class="img-fluid" src= "<?php echo $disco['poster'] ?>" alt= "<?php echo $disco['title'] ?>"></a>
                    <h1 class="text-center  mt-4 mb-4"><?php echo $disco['title'] ?></h1>
                    <h2 class="text-center"><?php echo $disco['author'] ?></h2>
                    <h2 class="text-center"><?php echo $disco['year'] ?></h2>
            </div>
            <?php endforeach; ?>
        </div>
      </div>



</main>
    
</body>
</html>