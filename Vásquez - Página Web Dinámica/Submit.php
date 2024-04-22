<?php
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $formacion = $_POST['formacion'];
    $exp_laboral = $_POST['exp_laboral'];
    $contact = $_POST['contact'];
    $nationality = $_POST['nationality'];
    $languages = isset($_POST['languages']) ? implode(", ", $_POST['languages']) : '';
    $english_level = isset($_POST['english_level']) ? $_POST['english_level'] : '';
    $programming_languages = isset($_POST['programming_languages']) ? implode(", ", $_POST['programming_languages']) : '';
    $skill = $_POST['skill'];
    $abilities = isset($_POST['abilities']) ? implode(", ", $_POST['abilities']) : '';
    $profile = $_POST['profile'];

    $newContactFields = isset($_POST['newContactFields']) ? $_POST['newContactFields'] : array();
    $newFormacionFields = isset($_POST['newFormacionFields']) ? $_POST['newFormacionFields'] : array();
    $newELaboralFields = isset($_POST['newELaboralFields']) ? $_POST['newELaboralFields'] : array();
    $newNacionalidadFields = isset($_POST['newNacionalidadFields']) ? $_POST['newNacionalidadFields'] : array();
    $newIdiomasFields = isset($_POST['newIdiomasFields']) ? $_POST['newIdiomasFields'] : array();
    $newLdePFields = isset($_POST['newLdePFields']) ? $_POST['newLdePFields'] : array();
    $newAptitudesFields = isset($_POST['newAptitudesFields']) ? $_POST['newAptitudesFields'] : array();
    $newHabilidadesFields = isset($_POST['newHabilidadesFields']) ? $_POST['newHabilidadesFields'] : array();

    if (empty($name) || empty($dob) || empty($formacion) || empty($contact) || empty($nationality) || empty($english_level) || empty($programming_languages) || empty($skill) || empty($abilities) || empty($profile)) {
        die("Por favor, completa todos los campos del formulario.");
    }

    $cv_html = "
    <!DOCTYPE html>
    <html>
    <head>
        <title>CV</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"EstilosCV.css\">
    </head>
    <body>
        <div class=\"cv\">
            <div class=\"header\">
                <h1>" . $name . "</h1>
                <h2>Estudiante de Ciencia de la Computación</h2>
            </div>
            <div class=\"main\">
                <div class=\"left\">
                    <h3>Fecha de Nacimiento:</h3>
                    <p>" . $dob . "</p>
                    <h3>Contacto:</h3>
                    <p>" . $contact . "</p>";
                    foreach ($newContactFields as $newField) {
                        $cv_html .= "<p>" . $newField . "</p>";
                    }
                    $cv_html .= "
                    
                    <h3>Idiomas:</h3>
                    <p>" . $languages . "</p>";
                    foreach ($newIdiomasFields as $newField) {
                        $cv_html .= "<p>" . $newField . "</p>";
                    }              
                    $cv_html .= "

                    <h3>Lenguajes de Programación:</h3>
                    <p>" . $programming_languages . "</p>";
                    foreach ($newLdePFields as $newField) {
                        $cv_html .= "<p>" . $newField . "</p>";
                    }     
                    $cv_html .= "

                    <h3>Nacionalidad:</h3>
                    <p>" . $nationality . "</p>";
                    foreach ($newNacionalidadFields as $newField) {
                        $cv_html .= "<p>" . $newField . "</p>";
                    }       
                    $cv_html .= "
                    
                </div>
                <div class=\"right\">
                    <h3>Perfil:</h3>
                    <p>" . $profile . "</p>
                    <h3>Formación:</h3>
                    <p>" . $formacion . "</p>";
                    foreach ($newFormacionFields as $newField) {
                        $cv_html .= "<p>" . $newField . "</p>";
                    }
                    $cv_html .= "

                    <h3>Experiencia Laboral:</h3>
                    <p>" . $exp_laboral . "</p>";
                    foreach ($newELaboralFields as $newField) {
                        $cv_html .= "<p>" . $newField . "</p>";
                    }
                    $cv_html .= "

                    <h3>Nivel de Inglés:</h3>
                    <p>" . $english_level . "</p>
                    <h3>Habilidades:</h3>
                    <p>" . $abilities . "</p>";                
                    foreach ($newHabilidadesFields as $newField) {
                        $cv_html .= "<p>" . $newField . "</p>";
                    }
                    $cv_html .= "

                    <h3>Aptitudes:</h3>
                    <p>" . $skill . "</p>"; 
                    foreach ($newAptitudesFields as $newField) {
                        $cv_html .= "<p>" . $newField . "</p>";
                    }
                    $cv_html .= "

                </div>
            </div>
        </div>
    </body>
    </html>";
    echo $cv_html;
?>
