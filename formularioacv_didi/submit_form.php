<?php
    // Recoge los datos del formulario
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $occupation = $_POST['occupation'];
    $contact = $_POST['contact'];
    $nationality = $_POST['nationality'];
    $english_level = $_POST['english_level'];
    $programming_languages = implode(", ", $_POST['programming_languages']);
    $skill = $_POST['skill'];
    $abilities = implode(", ", $_POST['abilities']);
    $profile = $_POST['profile'];

    // Prepara la información para guardarla en el archivo
    $data = "Nombre y Apellidos: $name\nFecha de Nacimiento: $dob\nOcupación: $occupation\nContacto: $contact\nNacionalidad: $nationality\nNivel de inglés: $english_level\nLenguajes de programación: $programming_languages\nAptitudes: $skill\nHabilidades: $abilities\nPerfil: $profile\n\n";

    // Abre el archivo en modo de escritura, crea el archivo si no existe
    $file = fopen("datos.txt", "a");

    // Escribe la información en el archivo
    fwrite($file, $data);

    // Cierra el archivo
    fclose($file);

    echo "Los datos se han guardado correctamente.";
?>
