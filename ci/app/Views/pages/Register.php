<link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet" />
<script
    src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</script>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 card ps-0 pe-0">
            <?= form_open('RegisterPost', array('role' => 'form')) ?>
                <legend class="card-header"> Login </legend>
                <div class="card-body">
                    <div class="form-group pb-2">
                        <label for="username"> Username </label>
                        <input type="text" class="form-control" id="username" name="username" \>
                    </div>
                    <div class="form-group pb-2">
                        <label for="passwort"> Password: </label>
                        <input type="password" class="form-control" id="passwort" name="passwort" \>
                    </div>
                    <div class="form-group pb-2">
                        <label for="email"> E-Mail: </label>
                        <input type="email" class="form-control" id="email" name="email" \>
                    </div>
                    <button id="btnsubmit" name="btnsubmit" type="submit" class="btn btn-primary"> Registrieren </button>
                </div>
            <?= form_close() ?>
        </div>
        <div class="col-3"></div>
    </div>
</div>