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
                        <tr class="table-light">
                            <th scope="col">Username</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">In Projekt</th>
                            <th scope="col"></th>
                        </tr>
                        <tbody>
                        <?php if (isset($mitglieder)): foreach ($mitglieder as $entry): ?>
                            <tr>
                                <td style="padding-bottom: 1em; padding-top: 1em"><?= isset($entry['Username']) ? $entry['Username'] : '' ?> </td>
                                <td><?= isset($entry['EMail']) ? $entry['EMail'] : '' ?></td>
                                <td><?= isset($entry['In Projekt']) ? $entry['In Projekt'] : '' ?>
                                        <input type="checkbox" class="form-check-input" onclick="return false;" checked=checked >
                                </td>
                                <td class="text-right">
                                    <a href="<?= base_url("./MitgliederController/delete?id=") . $entry['ID'] ?>" class="fa-regular fa-trash-can text-primary m-2"></a>
                                    <a href="" class="fa-regular fa-pen-to-square text-primary m-2"></a>
                                </td>
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>
                    </table>

                    <h5>Bearbeiten/Erstellen</h5>

                    <div class="form-group">

                        <label>Username: </label>
                        <input type="text" class="form-control mt-1 mb-3" id="username"
                               placeholder="Username">

                        <label>E-Mail-Adresse: </label>
                        <input type="email" class="form-control mt-1 mb-3" id="email"
                               placeholder="E-Mail-Adresse eingeben">

                        <label>Passwort: </label>
                        <input type="text" class="form-control mt-1 mb-3" id="passwort"
                               placeholder="Passwort">


                        <button type="submit" class="btn btn-primary mt-3 mb-2">Speichern</button>
                        <button type="submit" class="btn btn-info mt-3 mb-2" href="http://jankutsch.42web.io/ci/public/Mitglieder" >Reset</button>


                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

</body>

</html>


