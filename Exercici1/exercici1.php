<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom = $_POST["nom"];
        $contrasenya = $_POST["contrasenya"];

        $_SESSION['nom'] = $nom;
        $_SESSION['contrasenya'] = $contrasenya;

        echo "<h2> Formulario </h2>";
        echo "El nom rebut es: " . $nom . "<br>";
        echo "La contrasenya es: " . $contrasenya . "<br>";
    } else {
        echo "Error, no trobat formulari.";
    }

    
    
?>