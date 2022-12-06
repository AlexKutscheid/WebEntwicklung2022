<?php
$reiter = array(
    array(
        'Name' => 'ToDo',
        'Beschreibung' => 'Dinge, die erledigt werden müssen'
    ),
    array(
        'Name' => 'Erledigt',
        'Beschreibung' => 'Dinge, die erledigt sind'
    ),
    array(
        'Name' => 'Verschoben',
        'Beschreibung' => 'Dinge, die später erledigt werden'
    )
);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Aufgabenplaner: Reiter</title>

    <!--
    <link rel="stylesheet"href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    -->

    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <script
            src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <style>
        #Header1 {
            text-align: center;
            font-size: 3em;
            height: 3em;
            margin-bottom: 0.7em;
            padding-top: 1em;
            margin-top: 0.25em;
        }
    </style>

</head>

<body>

<div class="container-fluid">
    <!-- important -> überschreibt default von bg-light -->
    <div class="bg-light" id="Header1" style="background-color: lightgray !important;">
        <h1>Aufgabenplaner: Reiter</h1>
    </div>

    <div class="row">
        <div class="col-2">
            <?php include('Sidebar.php'); ?>
        </div>

        <div class="col">
            <div class="row">
                <form class="form-group">

                    <table class="table table-hover">
                        <tr class="table-light">
                            <!-- th scope = col sorgt dafür das Überschrift der table ganze Spalte vereinnahmt, also sorgt für Abstand zw Beschreibung und Name -->
                            <th scope="col">Name</th>
                            <th scope="col">Beschreibung</th>
                            <th scope="col"></th>
                        </tr>
                        <tbody>
                        <!-- b.) isset prüft ob wert gesetzt, ternärer Operator: falls nicht gesetzt ist nur '' -->
                        <?php if (isset($reiter)): foreach ($reiter as $item): ?>
                        <!-- 'tr' = table row -->
                            <tr>
                                <!-- td = table data -->
                                <td style="padding-top: 1em; padding-bottom: 1em"><?= isset($item['Name']) ? $item['Name'] : '' ?></td>
                                <td><?= isset($item['Beschreibung']) ? $item['Beschreibung'] : '' ?></td>
                                <!-- TODO icons -->
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>
                    </table>

                    <h1 id="bm"> Bearbeiten/Erstellen: </h1>

                    <div class="col-8">
                        <div class="row mb-3">
                            <div class="form-group">
                                <label>Bezeichnung des Reiters: </label>
                                <textarea class="form-control" id="Reiter"  rows="1" placeholder="Reiter"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-8">
                            <div class="row mb-3">
                                <div class="form-group" >
                                    <label>Beschreibung: </label>
                                    <textarea class="form-control" id="Beschreibung" rows="3" placeholder="Beschreibung"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row-1 mb-3">
                        <button type="button" class="btn btn-primary ">Speichern</button>
                        <button type="button" class="btn btn-success " style="margin-left: 5px">Reset</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>