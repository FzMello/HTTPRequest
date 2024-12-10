<?php
if (isset($_POST['provincia'])) {
    $provincia = $_POST['provincia'];
    $lines = file('listacomuni.csv');
    $comuni = [];
    foreach ($lines as $line) {
        $parti = explode(";", $line);
        if (trim(strtolower($parti[1])) == strtolower($provincia)) {
            $comuni[] = trim($parti[0]);
        }
    }

    if (count($comuni) > 0) {
        echo "<table border='1'><caption>Lista comuni della provincia: ".$provincia."</caption>";
        foreach ($comuni as $comune) {
            echo "<tr><td>" . htmlspecialchars($comune) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nessun comune trovato per la provincia selezionata.";
    }
}
?>
