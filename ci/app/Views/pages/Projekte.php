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

            <div class="form-group">

                <h1> Projekt auswählen: </h1>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                    <option selected>- bitte auswählen -</option>
                    <?php if (isset($projects)): foreach ($projects as $entry): ?>
                        <option> <?= $entry['Name'] ?> </option>
                    <?php endforeach; endif; ?>

                </select>

            </div>

            <button type="submit" class="btn btn-primary"> Auswählen</button>
            <button type="submit" class="btn btn-primary"> Bearbeiten</button>
            <button type="submit" class="btn btn-danger"> Löschen</button>

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