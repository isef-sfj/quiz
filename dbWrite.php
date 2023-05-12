<?php

include "dbConnection.php";

$modul = $_POST["modul"];
$lektion = $_POST["lektion"];
$name = $_POST["name"];
$frage = $_POST["frage"];
$antwort1_richtig = $_POST["antwort1_richtig"];
$antwort2 = $_POST["antwort2"];
$antwort3 = $_POST["antwort3"];
$antwort4 = $_POST["antwort4"];

$sql = "INSERT INTO quizfragen (modul,
                                lektion,
                                name,
                                frage,
                                antwort1_richtig,
                                antwort2,
                                antwort3,
                                antwort4)
                        VALUES (:modul,
                                :name,
                                :lektion,
                                :frage,
                                :antwort1_richtig,
                                :antwort2,
                                :antwort3,
                                :antwort4)";

$stmt = $pdo->prepare($sql);

$stmt->execute(['modul' => $modul,
                'lektion' => $lektion,
                'name' => $name,
                'frage' => $frage,
                'antwort1_richtig' => $antwort1_richtig,
                'antwort2' => $antwort2,
                'antwort3' => $antwort3,
                'antwort4' => $antwort4]);

header("Location:indexWrite.php");