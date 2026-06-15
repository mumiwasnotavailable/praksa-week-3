<?php
include "config.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM sportasi WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?poruka=obrisan");
        exit();
    } else {
        echo "Greška pri brisanju: " . mysqli_error($conn);
    }
} else {
    echo "ID nije pronađen.";
}
?>