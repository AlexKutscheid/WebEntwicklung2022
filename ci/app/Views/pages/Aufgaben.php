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
                            <th></th>
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
                                <td>
                                    <a href="<?= base_url("./AufgabenDel/?id=") . $entry['ID'] ?>" class="fa-regular fa-trash-can text-primary m-2"></a>
                                    <a href="<?= base_url("./AufgabenEditController/?id=" .$entry['ID'])?>" class="fa-regular fa-pen-to-square text-primary m-2"></a>
                                </td>
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>

                    </table>

            </div>

        </div>
    </div>
</div>

</body>

</html>