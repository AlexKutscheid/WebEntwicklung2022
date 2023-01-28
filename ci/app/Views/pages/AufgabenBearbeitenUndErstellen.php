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

    </style>

</head>

<body>
<div class="col">

    <div class="row">

        <form class="form-group">

            <h5>Bearbeiten/Erstellen</h5>

            <div class="form-group">

                <?php if (isset($info)): foreach ($info as $entry): ?>

                    <label>Aufgabenbezeichnung:</label>
                    <input type="text" class="form-control mt-1 mb-3" id="Aufgabenbezeichnung"
                           value="<?= isset($entry['Aufgabenname']) ? $entry['Aufgabenname'] : '' ?>">


                    <label>Beschreibung der Aufgabe: </label>
                    <textarea class="form-control mt-1 mb-3" id="BeschreibungDerAufgabe" rows="3"
                              placeholder="Beschreibung"> <?= isset($entry['Beschreibung']) ? $entry['Beschreibung'] : '' ?> </textarea>

                    <label>Erstellungsdatum:</label>
                    <input disabled class="form-control mt-1 mb-3" id="Erstellungsdatum" placeholder="01.01.23">


                    <label>fällig bis:</label>
                    <input class="form-control mt-1 mb-3" id="fälligbis" placeholder="01.01.23">

                    <label>Zugehöriger Reiter</label>
                    <select name="reiter" class="form-select mt-2 mb-2">
                        <?php $reiterModel = new \App\Models\ReiterModel(); $alleReiter = $reiterModel->getInfo();
                        foreach ($alleReiter as $reiter):
                            if($entry['Name'] == $reiter['Name']){
                                echo('<option selected>' . $reiter['Name'] . '</option>');
                            }
                            else{
                                echo('<option>' . $reiter['Name'] . '</option>');
                            }
                        endforeach;
                        ?>
                    </select>

                    <label>Zuständig</label>
                    <select name="zuständig" class="form-control" multiple="multiple">
                        <?php $mitlgiederModel = new \App\Models\MitgliederModel(); $alleUser = $mitlgiederModel->getEveryUser();
                        foreach ($alleUser as $user):
                            if($info[0]['ID'] == $user['ID']){
                                echo('<option selected>' . $user['Username'] . '</option>');
                            }
                            else{
                                echo('<option>' . $user['Username'] . '</option>');
                            }
                        endforeach;
                        ?>
                    </select>

                    <button type="submit" class="btn btn-primary mt-3 mb-2">Erstellen</button>
                    <button type="submit" class="btn btn-info mt-3 mb-2">Bearbeiten</button>

                <?php endforeach; endif; ?>

            </div>

        </form>

    </div>

</div>
</div>
</div>

</body>

</html>