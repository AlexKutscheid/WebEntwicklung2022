<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WebEntwicklungProjekt";

/**
$servername = "sql305.byetcluster.com";
$username = "epiz_33047546";
$password = "yuXFWR7YFwUrg";
$dbname = "epiz_33047546_WEDatabse";
 * **/

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Keine Verbindung möglich!");
}
else{

    echo('Aufgaben und wer sie erstellt hat: ' . '<br>');

    $sql = "SELECT aufgaben.Name,aufgaben.Beschreibung, mitglieder.Username,mitglieder.EMail FROM aufgaben Inner Join mitglieder On aufgaben.ErstellerID = mitglieder.ID";
    $result = $conn->query($sql);
    echo('<ol>');
    if($result->num_rows > 0){
        while($row = $result->fetch_object()){
            echo('<li>' . 'Name: ' . $row->Name. ': ' . $row->Beschreibung . '->' .$row->Username . '->' . $row->EMail);
        }
    }

    echo('<br>');
    echo('<br>');
    echo('Reiter mit jeweiligen Aufgaben: ' . '<br>');
    echo('<br>');

    $sql2 = "SELECT reiter.Name, aufgaben.Name As Name1,aufgaben.Beschreibung FROM reiter Inner Join aufgaben On aufgaben.ReiterID = reiter.ID";
    $result2 = $conn->query($sql2);
    echo('<ol>');
    if($result2->num_rows > 0){
        while($row = $result2->fetch_object()){
            echo('<li>' . 'Reiter: ' . $row->Name . ': ' . $row->Name1 . '->' .$row->Beschreibung);
        }
    }

    echo('<br>');
    echo('<br>');
    echo('Projekte und wer sie erstellt hat: ' . '<br>');
    echo('<br>');

    $sql3 = "SELECT projekte.Name,projekte.Beschreibung,mitglieder.Username FROM projekte Inner Join mitglieder On projekte.ErstellerID = mitglieder.ID";
    $result3 = $conn->query($sql3);
    echo('<ol>');
    if($result3->num_rows > 0){
        while($row = $result3->fetch_object()){
            echo('<li>' . 'Name: ' . $row->Name. ': ' . $row->Beschreibung . ': ' . $row->Username);
        }
    }

}
