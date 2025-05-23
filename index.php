<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Academy - Cursos en Línea</title>
    <?php
      include "./Header/Header.php";
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #2c3e50;
        }

        header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 20px;
        }

        header h1 {
            margin: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            font-size: 24px;
            color: #3498db;
            margin-bottom: 15px;
        }

        .section {
            margin-bottom: 30px;
        }

        .cta-button {
            background-color: #3498db;
            color: white;
            padding: 12px 25px;
            font-size: 18px;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .cta-button:hover {
            background-color: #2980b9;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px;
        }

        footer a {
            color: #3498db;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>



    <div class="container">
        <!-- Sección de Misión -->
        <section class="section">
            <h2 class="section-title">Nuestra Misión</h2>
            <p>En Alpha Academy, nos comprometemos a ofrecer educación de calidad accesible a todos, brindando una experiencia de aprendizaje innovadora y flexible. Nuestros cursos están diseñados para ayudar a los estudiantes a desarrollar habilidades clave que les permitan enfrentar los desafíos del mundo actual, con un enfoque en la formación práctica y el uso de tecnologías avanzadas.</p>
        </section>

        <!-- Sección de Visión -->
        <section class="section">
            <h2 class="section-title">Nuestra Visión</h2>
            <p>Aspiramos a ser un referente en educación en línea, reconocido por la calidad de nuestros programas académicos y por transformar vidas a través del aprendizaje. Buscamos expandir nuestra oferta educativa para llegar a estudiantes en todo el mundo, empoderándolos con el conocimiento y las habilidades necesarias para alcanzar su máximo potencial.</p>
        </section>

        <!-- Sección de Información de Cursos -->
        <section class="section">
            <h2 class="section-title">Nuestros Cursos</h2>
            <p>Ofrecemos una amplia variedad de cursos en línea que abarcan desde áreas tecnológicas hasta humanidades. Algunos de los cursos más populares incluyen:</p>
            <ul>
                <li>Desarrollo Web</li>
                <li>Programación en Python</li>
                <li>Marketing Digital</li>
                <li>Gestión Empresarial</li>
                <li>Psicología y Bienestar</li>
                <li>Diseño Gráfico</li>
            </ul>
            <p>Todos nuestros cursos están diseñados para ser accesibles, interactivos y de alta calidad, con el respaldo de profesionales del sector. Además, puedes estudiar a tu propio ritmo, desde cualquier lugar y en cualquier momento.</p>
        </section>

        <!-- Llamada a la acción (CTA) para matriculación -->
        <section class="section">
            <h2 class="section-title">¡Inscríbete ahora y comienza a aprender!</h2>
            <p>No pierdas la oportunidad de avanzar en tu carrera y mejorar tus habilidades. Nuestros cursos están abiertos para estudiantes de todos los niveles, desde principiantes hasta expertos. Conviértete en un profesional certificado y abre nuevas oportunidades laborales.</p>
            <a href="/Matricula_de_Cursos" class="cta-button">Matricúlate en un curso</a>
        </section>
    </div>

    <footer class="footer-dark">
        <p>&copy; 2025 Alpha Academy. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
