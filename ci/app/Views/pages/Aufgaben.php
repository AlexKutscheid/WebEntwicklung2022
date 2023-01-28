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
                    <table class="table table-hover">

                        <thead>
                        <tr class="table-light">
                            <th scope="col">Aufgabenbezeichnung:</th>
                            <th scope="col">Beschreibung der Aufgabe:</th>
                            <th scope="col">Reiter:</th>
                            <th scope="col">Zuständig:</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php if (isset($aufgaben)): foreach ($aufgaben as $entry): ?>

                        <tr>
                            <td style="padding-bottom: 1em; padding-top: 1em"><?= isset($entry['Aufgabenname']) ? $entry['Aufgabenname'] : '' ?></td>
                            <td><?= isset($entry['Beschreibung']) ? $entry['Beschreibung'] : '' ?></td>
                            <td>
                                <?= isset($entry['Name']) ? $entry['Name'] : '' ?>
                            </td>
                            <td>
                                <?= isset($entry['Username']) ? $entry['Username'] : '' ?>
                            </td>

                        </tr>

                        <?php endforeach; endif; ?>
                        </tbody>

                    </table>

                    <h5>Bearbeiten/Erstellen</h5>

                    <div class="form-group">

                        <label>Aufgabenbezeichnung:</label>
                        <input type="text" class="form-control mt-1 mb-3" id="Aufgabenbezeichnung"
                               placeholder="Aufgabe">

                        <label>Beschreibung der Aufgabe: </label>
                        <textarea class="form-control mt-1 mb-3" id="BeschreibungDerAufgabe" rows="3"
                                  placeholder="Beschreibung"></textarea>

                        <label>Erstellungsdatum:</label>
                        <input class="form-control mt-1 mb-3" id="Erstellungsdatum" placeholder="01.01.23">

                        <label>fällig bis:</label>
                        <input class="form-control mt-1 mb-3" id="fälligbis" placeholder="01.01.23">

                        <label>Zugehöriger Reiter</label>
                        <select class="form-select mt-2 mb-2">
                            <option value="ToDo" selected>ToDo</option>
                            <option value="Erledigt" selected>Erledigt</option>
                            <option value="Verschoben" selected>Verschoben</option>
                        </select>

                        <label>Zuständig</label>
                        <select class="form-select mt-2 mb-2" id="Zuständig">
                            <option value="Fynn" selected>Fynn Jansen</option>
                            <option value="Alex" selected>Alexander Kutscheid</option>
                        </select>

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