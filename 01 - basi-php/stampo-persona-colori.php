<?php

$persona = new stdClass();

$persona->nome = "Roberto";
$persona->cognome = "Rossi";
$persona->colori = ['red','green','blue'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

<title>Title</title>
</head>
<body>
    <header class="jumbotron">
        <h1 class="container"> persona </h1>
    </header>

    <main class="container">
        
            <div class="card" style="width:400px">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $persona->nome ." ". $persona->cognome ?></h4>
                      <h4 class="card-title">
                                            <?= $persona->nome?>  
                                            <?= $persona->cognome?>
                                        </h4>
                      <div class="card-body">
                        <ul>
                            <?php 
                            foreach ($persona->colori as  $colore) { ?>
                                   

                                <?php echo "<li style='color:$colore'>$colore</li>\n";
                            }
                            ?>

                        </ul>
                      </div>
                                        
                      <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
            </div>
    </main>

</body>
</html>