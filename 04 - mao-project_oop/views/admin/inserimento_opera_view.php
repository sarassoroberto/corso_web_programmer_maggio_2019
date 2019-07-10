<?php include __DIR__ . '/header.php'; ?>

<div class="container">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="POST">
        <div class="form-group row">
            <label for="Autore" class="col-4 col-form-label">Inserisci l'autore dell'opera</label>
            <div class="col-8">
                <input id="Autore" name="Autore" value="<?= $opera->Autore ?>" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            
            
            <label for="Titolo" class="col-4 col-form-label">Titolo</label>
            <div class="col-8">
                <input id="Titolo" name="Titolo" 
                 value="<?php echo $opera->Titolo ?>"
                 type="text" class="form-control">
            </div>
            <?php
            if(isset($errors['Titolo'])) {
                echo $errors['Titolo'];
            }
            ?>
        </div>

        <div class="form-group row">
            <label for="Datazione" class="col-4 col-form-label">Datazione</label>
            <div class="col-8">
                <input id="Datazione" 
                value="<?php echo $opera->Datazione ?>" 
                name="Datazione" 
                type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="Tecnica" class="col-4 col-form-label">Tecnica</label>
            <div class="col-8">
                <input id="Tecnica" name="Tecnica" 
                value="<?php echo $opera->Tecnica ?>"   
                type="text" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="Dimensioni" class="col-4 col-form-label">Dimensioni</label>
            <div class="col-8">
                <input id="Dimensioni" 
                    
                    value="<?= $opera->Dimensioni ?>"

                    name="Dimensioni" 
                    type="text" 
                    class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="Dimensioni" class="col-4 col-form-label">Immagine</label>
            <div class="col-8">
                <input id="Immagine" name="Immagine" type="file" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Invia</button>
            </div>
        </div>
    </form>

</div>



<?php include __DIR__ . '/footer.php'; ?>