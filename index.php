<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner</title>

    <!--
    <link rel="stylesheet"href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    -->

    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet"/>
    <script
            src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <!-- define bg-light Eigenschaften und margins/farbe für sidebar items-->
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
        <h1>Aufgabenplaner: Todos (Aktuelles Projekt)</h1>
    </div>

    <div class="row">
        <div class="col-2">
            <!-- sidebar -->
            <?php include('Sidebar.php') ?>
        </div>

        <!-- hauptkomponente -->

        <div class="col">
            <div class="card">
                <div class="card-header">
                    ToDo:
                </div>
                <div class="list-group">
                    <li class="list-group-item">
                        HTML Datei erstellen (Max Mustermann)
                    </li>
                    <li class="list-group-item">
                        CSS Datei erstellen (Max Mustermann)
                    </li>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header">
                    Erledigt:
                </div>
                <div class="list-group">
                    <li class="list-group-item">
                        PC eingeschaltet (Petra Müller)
                    </li>
                    <li class="list-group-item">
                        Kaffee trinken (Petra Müller)
                    </li>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header">
                    Verschoben:
                </div>
                <div class="list-group">
                    <li class="list-group-item">
                        Für die Uni lernen! (Max Mustermann)
                    </li>
                </div>
            </div>
        </div>

    </div>
</div>


</body>
</html>