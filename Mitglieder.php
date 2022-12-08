<?php

$Mitglieder = array(
        array(
                "Name" => "Max Mustermann",
                "E-Mail" => "mustermann@muster.de" ,
                "In Projekt" => ""
        ),

        array(
            "Name" => "Petra Müller",
            "E-Mail" => "petra@mueller.de" ,
            "In Projekt" => ""
        )

)



?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="UTF-8">
    <title>Aufgabenplaner: Mitglieder</title>

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

        #Header1 {
            text-align: center;
            font-size: 3em;
            height: 3em;
            margin-bottom: 0.7em;
            padding-top: 1em;
            margin-top: 0.25em;
        }

        h1 {
            margin-bottom: 0.5em;
        }

    </style>

</head>

<body>

<div class="container-fluid">
    <!-- important -> überschreibt default von bg-light -->
    <div class="bg-light" id="Header1" style="background-color: lightgray !important;">
        <h1>Aufgabenplaner: Mitglieder</h1>
    </div>

    <div class="row">
        <div class="col-2">
            <?php include('Sidebar.php'); ?>
        </div>

        <div class="col">

            <div class="row">

                <form class="form-group">
                    <table class="table table-hover">

                        <thead>
                        <tr class="table-light">
                            <th scope="col">Name</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">In Projekt</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php if (isset($Mitglieder)): foreach ($Mitglieder as $entry): ?>

                            <tr>
                                <td style="padding-bottom: 1em; padding-top: 1em"><?= isset($entry['Name']) ? $entry['Name'] : '' ?></td>
                                <td><?= isset($entry['E-Mail']) ? $entry['E-Mail'] : '' ?></td>
                                <td><?= isset($entry['In Projekt']) ? $entry['In Projekt'] : '' ?></td>

                            </tr>

                        <?php endforeach; endif; ?>
                        </tbody>

                    </table>

                    <h5>Bearbeiten/Erstellen</h5>

                    <div class="form-group">

                        <label>Username: </label>
                        <input type="text" class="form-control mt-1 mb-3" id="Username"
                               placeholder="Username">

                        <label>E-Mail-Adresse: </label>
                        <input type="text" class="form-control mt-1 mb-3" id="Email"
                               placeholder="E-Mail-Adresse eingeben">

                        <label>Passwort: </label>
                        <input type="text" class="form-control mt-1 mb-3" id="Passwort"
                               placeholder="Passwort">


                        <button type="submit" class="btn btn-primary mt-3 mb-2">Speichern</button>
                        <button type="submit" class="btn btn-info mt-3 mb-2">Reset</button>


                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

</body>

</html>


