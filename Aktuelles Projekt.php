<!DOCTYPE html>
<html lang="en"   xmlns="http://www.w3.org/1999/html"  >
<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner Todos(Aktuelles Projekt)</title>



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
            margin-bottom: 1em;
            padding-top: 1em;
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
        <h1>Aufgabenplaner: Todos(Aktuelles Projekt)</h1>
    </div>
</div>



<div class="row">
    <div class="col-2">
        <?php include('Sidebar.php'); ?>
    </div>
    <div class="col">
        <!-- hauptkomponente -->
        <div class="row">

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

            <div class="col-3">
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
</div>
</body>
</html>