<?php include __DIR__ . '/header.php'; ?>
<div class="container">



<table class="table">
    <tr>
        <th width="100%">Titolo</th>
        <th width="100%">Autore</th>
        <th>modifica</th>
        <th>elimina</th>
    </tr>

<?php foreach($opere as $opera){ ?>

    <tr>
        <td> <?= $opera->Titolo  ?></td>
        <td> <?= $opera->Autore  ?></td>
        <td>
            <a href="#">modifica</a> 
        </td>
        <td>
            <a href="elimina_opera_controller.php">elimina</a> 
        </td>
    </tr>

<?php } ?>

</table>


<?php  print_r($opere);  ?>
</div>
<?php include __DIR__ . '/footer.php'; ?>