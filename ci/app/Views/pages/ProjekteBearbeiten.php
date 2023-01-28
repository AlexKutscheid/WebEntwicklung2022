<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="UTF-8">

    <!--
    <link rel="stylesheet"href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    -->

    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet"/>
    <script
        src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <style>

        h1 {
            margin-bottom: 0.5em;
        }

        #bm {
            margin-top: 0.5em;
        }

    </style>

</head>

<body>


<div class="col-7">
    <!-- hauptkomponente -->

    <h1 id="bm"> Projekt bearbeiten/erstellen: </h1>


    <?= form_open('ProjekteEd', array('role' => 'form')) ?>
    <div class="form-group mb-3">
        <label for="Projektname">Projektname:</label>
        <input class="form-control" id="Projektname" name="Projektname" value="<?php if(isset($project)) echo($project['Name']) ?>">
    </div>

    <div class="form-group mb-3">
        <label for="Projektbeschreibung">Projektbeschreibung</label>
        <textarea name="Projektbeschreibung" class="form-control" id="Projektbeschreibung" rows="3">

             <?php if(isset($project)) echo($project['Beschreibung'])?>

        </textarea>
    </div>

    <input type="hidden" name="ID" value="<?php if(isset($project)) echo($project['ID']) ?>">
    <input type="hidden" name="ErstellerID" value="<?php if(isset($project)) echo($project['ErstellerID']) ?>">

    <button type="submit" class="btn btn-primary" name="submitChanges"> Änderungen Speichern </button>
    <?= form_close() ?>



</div>
</div>
</div>

</body>

</html>