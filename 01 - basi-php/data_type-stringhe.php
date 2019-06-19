<?php

$nome = 'Roberto';

// apici doppi elaborano il contenuto de
$saluto = "Ciao sono $nome, e questo è il corso di php";
$saluto = 'Ciao sono $nome, e questo è il corso di php';
$saluto = '<p>Ciao sono ' . $nome . ', e questo è il corso di php</p>';
// saluto = 'Ciao sono ' +  $nome + ', e questo è il corso di php';

$eta = 10;

$colori = array('red','green','blue');

// se produco una stringa che ha  un html valido al suo interno viene visualizzato

// 10

echo "<p>$saluto  e ho $eta </p>";

// 10

echo "<p>i mie colori preferiti sono: $colori[0], $colori[1]</p>";

?>
<p> <?php echo $saluto ?>  e ho <?php echo $eta ?> </p>

<!-- strumenti utili per il debug -->
<pre> 
    <?php print_r($colori); ?>
</pre>

<pre>
    <?php var_dump($colori) ?>
</pre>

<?php  var_dump($nome); ?>
<?php  var_dump($eta);  ?>
