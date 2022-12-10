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
 *
 * **/




$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Keine Verbindung möglich!");
}
else{

    echo('Aufgaben und wer sie erstellt hat: ' . '<br>');

    $sql = "SELECT Aufgaben.Name,Aufgaben.Beschreibung, Mitglieder.Username,Mitglieder.EMail FROM Aufgaben INNER JOIN Mitglieder ON Aufgaben.ErstellerID = Mitglieder.ID";
    $result = $conn->query($sql);
    echo('<ol>');
    if($result->num_rows > 0){
        while($row = $result->fetch_object()){
            echo('<li>' . 'Name: ' . $row->Name. ': ' . $row->Beschreibung . '->' .$row->Username . '->' . $row->EMail);
        }
    }
    echo('<br>');
    echo('<br>');
    echo('Reiter mit den jeweiligen Aufgaben: ' . '<br>');
    echo('<br>');

    $sql2 = "SELECT Reiter.Name, Aufgaben.Name As Name1,Aufgaben.Beschreibung FROM Reiter Inner Join Aufgaben On Aufgaben.ReiterID = Reiter.ID";
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

    $sql3 = "SELECT Projekte.Name,Projekte.Beschreibung,Mitglieder.Username FROM Projekte Inner Join Mitglieder On Projekte.ErstellerID = Mitglieder.ID";
    $result3 = $conn->query($sql3);
    echo('<ol>');
    if($result3->num_rows > 0){
        while($row = $result3->fetch_object()){
            echo('<li>' . 'Name: ' . $row->Name. ': ' . $row->Beschreibung . ': ' . $row->Username);
        }
    }

}
