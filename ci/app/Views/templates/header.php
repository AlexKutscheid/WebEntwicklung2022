<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//DE">
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"



        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.21.1/bootstrap-table.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.21.1/bootstrap-table.min.js"></script>

    </head>

<body>

<!-- Oberster Div Container mit Überschrift -->
<div class="container-fluid">
    <div class="text-center bg-light mt-3 mb-3 p-5">
        <h1>Aufgabenplaner: <?= $title; ?> </h1>
    </div>
    <!-- Row Container mit Menü ganz links -->
    <div class="row">
        <!-- Col mit Menü -->
        <div class="col-3">
            <!-- Ausgelagertes Menü -->
            <?php if ($title != "Login" && $title != "Registrieren"){
                include('Sidebar.php');} ?>
        </div>