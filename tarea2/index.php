<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="cara.png" alt="Tu Foto" class="profile-image">
            <div class="info">
                <h1>José Martínez</h1>
                <p>PUESTO OCUPADO/BUSCADO</p>
            </div>
        </div>
        <div id="parent">
            <div id="izquierda">
                <h3>CONTACTO</h3>
                <hr>
                <p><b>Teléfono:</b> 999 999 999</p>
                <p><b>Correo Electrónico:</b> josemartinez@gmail.com</p>
                <p><b>Ubicación:</b> México DF</p>
                <p><b>LinkedIn:</b> linkedin.com/jose-martinez</p>
                <h4>IDIOMAS</h4>
                <hr>
                <p>Español: Nativo</p>
                <p>Inglés: Bilingüe (TOEIC) 950</p>
                <p>Francés: Intermedio (B2)</p>
                <h4>APTITUDES</h4>
                <hr>
                <ul>
                    <li>Inteligencia emocional</li>
                    <li>Espíritu crítico</li>
                    <li>Trabajo en equipo</li>
                    <li>Capacidad analítica</li>
                    <li>Habilidades físicas</li>
                </ul>
                <h4>HABILIDADES</h4>
                <hr>
                <ul>
                    <li>Acondicionamiento físico</li>
                    <li>Creación de vídeos deportivos</li>
                    <li>Paquete Office</li>
                    <li>Tenis</li>
                </ul>
                <h4>OTROS INTERESES</h4>
                <hr>
                <ul>
                    <li>Creador de yincanas</li>
                    <li>Paseos ecológicos grupales</li>
                    <li>Lectura grupal en inglés</li>
                </ul>
            </div>
            <div id="derecha">
                <h4>PERFIL</h4>
                <hr>
                <p>Trabajo social con 4 años de experiencia en proyectos colectivos.</p>
                <p>Mi objetivo es lograr que jóvenes obtengan acceso a la educación superior mediante logros deportivos.</p>
                <h4>EXPERIENCIA LABORAL</h4>
                <hr>
                <br>
                <b>Trabajador Social</b>
                <p><i>México DF.</i> | 2022-Actualmente</p>
                <ul>
                    <li>Coordinador y mediador entre los equipos de ayuda psicológica a jóvenes y niños en exclusión social.</li>
                    <li>Velar por la salud mental del equipo y de miembros involucrados en proyectos.</li>
                    <li>Mapeo de necesidades estratégicas y lógicas para las diferentes áreas.</li>
                    <li>Monitor de ejercicios físicos para adolescentes.</li>
                    <li>Programar diferentes actividades extracurriculares en los involucrados.</li>
                </ul>
                <br>
                <b>Trabajador Social</b>
                <p><i>México DF.</i> | 2020-2022</p>
                <ul>
                    <li>Funciones para seguimiento de casos para jóvenes con problemas de adicciones.</li>
                    <li>Capacitaciones e integración vinculadas a medidas preventivas.</li>
                    <li>Recopilación de evidencias para auditorías y problemas sociales.</li>
                </ul>
                <br>
                <b>Trabajador Social (Prácticas)</b>
                <p><i>Zaragoza, España</i> | 2019-2020</p>
                <ul>
                    <li>Profesor de lengua española para jóvenes migrantes.</li>
                    <li>Monitor de actividades ecológicas con adolescentes.</li>
                    <li>Coordinador de áreas deportivas.</li>
                </ul>
                <h4>FORMACIÓN</h4>
                <hr>
                <br>
                <b>Grado de Trabajo Social</b>
                <p><i>ESMA, Madrid</i> | 2012-2015</p>
                <b>Licenciatura Profesional</b>
                <p><i>Universidad de la Frontera, México DF.</i> | 2011-2012</p>

                <!-- Datos del formulario reemplazarán esto -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $experiencia = $_POST["experiencia"];
                    $formacion = $_POST["formacion"];
                    $idiomas = $_POST["idiomas"];
                    $aptitudes = $_POST["aptitudes"];

                    echo "<h4>INFORMACIÓN DEL FORMULARIO</h4>";
                    echo "<hr>";
                    echo "<p><b>Experiencia Laboral:</b> $experiencia</p>";
                    echo "<p><b>Formación:</b> $formacion</p>";
                    echo "<p><b>Idiomas:</b> $idiomas</p>";
                    echo "<p><b>Aptitudes y Habilidades:</b> $aptitudes</p>";
                }
                ?>
            </div>
            <hr>
        </div>
    </div>
</body>
</html>
