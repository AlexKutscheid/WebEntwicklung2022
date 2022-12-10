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

    $sql = "SELECT * FROM Aufgaben, AufgabenMitgliederVK WHERE Aufgaben.ID = 1 and Aufgaben.ID = AufgabenMitgliederVK.AufgabenID";
    $result = $conn->query($sql);
    echo('<ol>');
    if($result->num_rows > 0){
        while($row = $result->fetch_object()){
            echo('<li>' . 'ID: ' . $row->ID. ': ' . $row->Name . '->' .$row->Beschreibung . '->' . $row->Erstellungsdatum);
        }
    }

    echo('<br>');
    echo('<br>');




    // ID`, `Username`, `EMail`, `Password`
    $sql2 = "SELECT * FROM Mitglieder";
    $result2 = $conn->query($sql2);
    echo('<ol>');
    if($result2->num_rows > 0){
        while($row = $result2->fetch_object()){
            echo('<li>' . 'ID: ' . $row->ID. ': ' . $row->Username . '->' .$row->EMail . '->' . $row->Password);
        }
    }

    echo('<br>');
    echo('<br>');

    $sql3 = "SELECT Aufgaben.ID, Aufgaben.Name FROM Aufgaben INNER JOIN ";
    $result3 = $conn->query($sql3);
    echo('<ol>');
    if($result3->num_rows > 0){
        while($row = $result3->fetch_object()){
            echo('<li>' . 'ID: ' . $row->ID. ': ' . $row->Name);
        }
    }

}
