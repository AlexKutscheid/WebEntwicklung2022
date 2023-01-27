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

        <h5>Bearbeiten/Erstellen</h5>

        <?= form_open('MitgliederEdit', array('role' => 'form')) ?>

            <div class="form-group">

                <label>Username: </label>
                <input name="inputName" type="text" class="form-control mt-1 mb-3" id="username"
                       placeholder="Username" <?php if (isset($user)){echo("value=" . ($user['Username']));} ?>>

                <label>E-Mail-Adresse: </label>
                <input name="inputMail" type="email" class="form-control mt-1 mb-3" id="email"
                       placeholder="E-Mail-Adresse eingeben" <?php if (isset($user)){echo("value=" . ($user['EMail']));} ?>>

                <label> <?php if (isset($_SESSION['sessUserID']) && ($user['ID'] == $_SESSION['sessUserID'])){
                        echo("Passwort:");} ?></label>
                <input name="inputPassword"
                       <?php if (!isset($_SESSION['sessUserID']) || !($user['ID'] == $_SESSION['sessUserID'])){
                       echo("type=" . "hidden");} ?>
                       class="form-control mt-1 mb-3" id="passwort"
                       placeholder="Passwort">

                <input name="InputID" type="hidden" class="form-control mt-1 mb-3" id="InputID"
                       <?php if (isset($user)){echo("value=" . ($user['ID']));} ?>>

                <button id="btnsubmit" type="submit" class="btn btn-primary">Speichern</button>

            </div>

        <?= form_close() ?>

    </div>

</div>
</div>
</div>

</body>

</html>


