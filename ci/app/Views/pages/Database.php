<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WebEntwicklungProjekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Keine Verbindung möglich!");
}
else{

    echo('AufgabenController und wer sie erstellt hat: ' . '<br>');

    $sql = "SELECT AufgabenController.Name,AufgabenController.Beschreibung, MitgliederController.Username,MitgliederController.EMail FROM AufgabenController INNER JOIN MitgliederController ON AufgabenController.ErstellerID = MitgliederController.ID";
    $result = $conn->query($sql);
    echo('<ol>');
    if($result->num_rows > 0){
        while($row = $result->fetch_object()){
            echo('<li>' . 'Name: ' . $row->Name. ': ' . $row->Beschreibung . '->' .$row->Username . '->' . $row->EMail);
        }
    }
    echo('<br>');
    echo('<br>');
    echo('ReiterController mit den jeweiligen AufgabenController: ' . '<br>');
    echo('<br>');

    $sql2 = "SELECT ReiterController.Name, AufgabenController.Name As Name1,AufgabenController.Beschreibung FROM ReiterController Inner Join AufgabenController On AufgabenController.ReiterID = ReiterController.ID";
    $result2 = $conn->query($sql2);
    echo('<ol>');
    if($result2->num_rows > 0){
        while($row = $result2->fetch_object()){
            echo('<li>' . 'ReiterController: ' . $row->Name . ': ' . $row->Name1 . '->' .$row->Beschreibung);
        }
    }

    echo('<br>');
    echo('<br>');
    echo('ProjekteController und wer sie erstellt hat: ' . '<br>');
    echo('<br>');

    $sql3 = "SELECT ProjekteController.Name,ProjekteController.Beschreibung,MitgliederController.Username FROM ProjekteController Inner Join MitgliederController On ProjekteController.ErstellerID = MitgliederController.ID";
    $result3 = $conn->query($sql3);
    echo('<ol>');
    if($result3->num_rows > 0){
        while($row = $result3->fetch_object()){
            echo('<li>' . 'Name: ' . $row->Name. ': ' . $row->Beschreibung . ': ' . $row->Username);
        }
    }

}