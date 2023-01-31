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

<div class="col-8">
    <!-- hauptkomponente -->

    <?= form_open('ProjekteEditPost', array('role' => 'form')) ?>

    <div class="form-group">

        <h1> Projekt auswählen: </h1>


        <select name="slectedItems" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">


            <?php if (isset($projects)): foreach ($projects as $entry): ?>
                <option name="chosenOption"> <?= $entry['Name'] ?> </option>
            <?php endforeach; endif; ?>

        </select>

    </div>



    <div class="modal fade" tabindex="-1" aria-hidden="true" id="delModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Projekt löschen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Wollen Sie das Projekt wirklich löschen?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Abbrechen</button>
                    <button name="löschenButton" type="submit" class="btn btn-danger">Löschen</button>
                </div>
            </div>
        </div>
    </div>



    <button name="bearbeitenButton" type="submit" class="btn btn-primary"> Bearbeiten</button>
    <a class="btn btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#delModal"
    >Löschen</i></a>

    <?= form_close() ?>



    <h1 id="bm"> Projekt bearbeiten/erstellen: </h1>


    <?= form_open('ProjektePost', array('role' => 'form')) ?>
    <div class="form-group mb-3">
        <label for="Projektname">Projektname:</label>
        <input class="form-control" id="Projektname" name="Projektname" placeholder="Projekt">
    </div>

    <div class="form-group mb-3">
        <label for="Projektbeschreibung">Projektbeschreibung</label>
        <textarea name="Projektbeschreibung" class="form-control" id="Projektbeschreibung" rows="3"
                  placeholder="Beschreibung"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submitProjects"> Erstellen </button>
    <?= form_close() ?>

</div>


</div>
</div>

</body>

</html>