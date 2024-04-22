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

    // Prepara el HTML del CV con los datos del formulario
    $cv_html = "
    <!DOCTYPE html>
    <html>
        <head>
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title>CV $name</title>
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\" integrity=\"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
        </head>
    <body>
        <div class=\"container\">
            <div class=\"top\">
                <h2>$name<br><span>$occupation</span></h2>
                <div class=\"group\">
                    <div class=\"leftSide\">
                        <div class=\"imgBx\">
                            <img src=\"img/diego.jpg\">
                        </div>
                    </div>
                    <div class=\"rightSide\">
                        <p>$profile</p>
                    </div>
                </div>
            </div>
            <div class=\"bottom\">
                <div class=\"left_side\">
                    <h4>Contacto</h4>
                    <ul class=\"contactInfo\">
                        <li>
                            <span class=\"icon\"><i class=\"fa-solid fa-phone\"></i></span>
                            <span class=\"text\">$contact</span>
                        </li>
                        <li>
                            <span class=\"icon\"><i class=\"fa_solid fa-globe\"></i></span>
                            <span class=\"text\">www.diegovasquez.com</span>
                        </li>
                        <li>
                            <span class=\"icon\"><i class=\"fa_brands fa-linkedin-in\"></i></span>
                            <span class=\"text\">www.linkedin/me</span>
                        </li>
                        <li>
                            <span class=\"icon\"><i class=\"fa_solid fa-location-dot\"></i></span>
                            <span class=\"text\">$nationality</span>
                        </li>
                    </ul>
                    <h4>Idiomas</h4>
                    <p>- Español (nativo)<br><br>- Inglés ($english_level)<br><br>- Portugués (básico)</p>
                    <h4>Aptitudes</h4>
                    <p>$skill</p>
                    <h4>Habilidades</h4>
                    <p>$abilities</p>
                    <h4>Otros Intereses</h4>
                    <p>- Fotografía<br><br>- Viajes<br><br>- Música</p>
                </div>
            </div>
        </div>
    </body>
    </html>";

    // Abre el archivo en modo de escritura, crea el archivo si no existe
    $file = fopen("cv.html", "w");

    // Escribe el HTML del CV en el archivo
    fwrite($file, $cv_html);

    // Cierra el archivo
    fclose($file);

    echo "Los datos se han guardado correctamente en el formato de CV.";
?>