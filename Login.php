<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="UTF-8">
    <title>Aufgabenplaner: Login</title>

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

        .padLeft {
            margin-left: 0em;
        }

    </style>

</head>

<body>

<div class="container-fluid">
    <!-- important -> überschreibt default von bg-light -->
    <div class="bg-light" id="Header1" style="background-color: lightgray !important;">
        <h1>Aufgabenplaner: Login</h1>
    </div>
</div>

   <!-- TODO benchmarks einfügen -->
<div class="row">
    <div class="col-4">

    </div>
    <div class="col-4">

        <div class="row mb-3">
            <div class="form-group">
                <label>Email Adresse:</label>
                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email-Adresse eingeben">
            </div>
        </div>

        <div class="row mb-3">
            <div class="form-group">
                <label>Passwort:</label>
                <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Passwort eingeben">
            </div>
        </div>

        <!-- mit padding 0em ist es richtig eingerückt -->
        <div class="row mb-3 padLeft">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    AGBs und Datenschutzbedingungen akzeptieren
                </label>
            </div>
        </div>

        <!-- row -1 bringt button auf angenehme größe -->
        <div class="row-1 mb-3">
            <button type="submit" class="btn btn-primary ">Einloggen</button>
        </div>

        <!-- span = inline container, um nur ein wort zu färben -->
        <div class="row">
            <p> Noch nicht registriert? <a style="text-decoration: none; color: dodgerblue" href="database.php"> Registrieren (führt vorerst zur Datenbank) </a> </p>
        </div>

        <div class="row">
            <p> Da der tatsächliche Vorgang technisch noch nicht realisiert wurde: <a style="text-decoration: none; color: dodgerblue" href="index.php"> Überspringen </a> </p>
        </div>



    </div>

</div>


</body>

</html>