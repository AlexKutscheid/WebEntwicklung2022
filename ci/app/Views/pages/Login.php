<link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet" />
<script
        src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</script>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 card ps-0 pe-0">
            <?= form_open('LoginController', array('role' => 'form')) ?>
            <legend class="card-header"> Login </legend>
            <div class="card-body">
                <div class="form-group pb-2">
                    <label for="username"> Username </label>
                    <input type="text"  id="username" name="username" class="<?=(isset($error['username']))?'form-control is-invalid':'form-control' ?>" \>
                    <div class="invalid-feedback"> Bitte eine E-Mail-Adresse angeben </div>
                </div>
                <div style="margin-bottom: 20px" class="form-group pb-2">
                    <label for="passwort"> Password: </label>
                    <input type="password" id="passwort" name="passwort" class="<?=(isset($error['passwort']))?'form-control is-invalid':'form-control' ?>" \>
                    <div class="invalid-feedback"> Bitte ein Passwort angeben </div>
                </div>
                <div sytle="margin-left:10px"  class="form-group form-check my-1">
                    <input id="agbCheck" name="agbaccept" type="checkbox" class="<?=(isset($error['agbaccept']))?'form-check-input is-invalid':'form-check-input' ?>">
                    <label for="agbCheck" class="form-check-label">AGBs und Datenschutzbedingungen akzeptieren</label>
                    <div class="invalid-feedback"> Bitte AGBs bestätigen </div>
                </div>
                <button id="btnsubmit" name="btnsubmit" type="submit" class="btn btn-primary" style="margin-top: 20px"> Login </button>
                <p style="margin-top: 20px">
                    Noch nicht registriert ? <a href="<?php echo base_url(); ?>/Register" > Registrierung </a>
                </p>
            </div>
            <?= form_close() ?>
        </div>
        <div class="col-3"></div>
    </div>
</div>