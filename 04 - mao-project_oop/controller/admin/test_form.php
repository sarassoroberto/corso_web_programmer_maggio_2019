<pre>
<?php
echo "post \n";
print_r($_POST);
echo "get \n";
print_r($_GET);


// $titolo = $_POST['Titolo'];
$titolo = filter_input(INPUT_POST,'Titolo');

$titolo = strip_tags(trim($titolo));

var_dump($titolo);



// permette di capire con che metodo è stato chiamato il form



// GET --> sono appena arrivato sul form non compilato
// POST ---> qualcuno ha compilato il form 

print_r($_SERVER['REQUEST_METHOD']);

// modo comodo per sapere quale'è indizzo del form 
print_r($_SERVER['PHP_SELF']);

?>
</pre>
