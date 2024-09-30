<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatería La Sangileña</title>
    <style>
        /* Fondo de pantalla con degradado animado */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: gradientAnimation 10s infinite alternate;
        }

        /* Animación para el fondo de pantalla */
        @keyframes gradientAnimation {
            0% {
                background: linear-gradient(135deg, #ff7e5f, #feb47b);
            }
            100% {
                background: linear-gradient(135deg, #6a11cb, #2575fc);
            }
        }

        /* Estilo del título */
        h1 {
            color: #fff;
            font-size: 3em;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            animation: titleFadeIn 2s ease-in;
        }

        /* Animación para el título */
        @keyframes titleFadeIn {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Estilo del formulario */
        form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            width: 300px;
            animation: formSlideIn 1.5s ease-in-out;
        }

        /* Animación para el formulario */
        @keyframes formSlideIn {
            0% {
                opacity: 0;
                transform: translateY(100px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Estilo de los campos de entrada */
        input[type="text"],
        input[type="password"] {
            margin: 10px 0;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f2f2f2;
            font-size: 1em;
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        /* Cambios de color en hover */
        input[type="text"]:hover,
        input[type="password"]:hover {
            background-color: #e6e6e6;
        }

        /* Estilo del botón */
        button {
            padding: 10px;
            margin-top: 15px;
            background-color: #ff6b6b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Efecto hover en el botón */
        button:hover {
            background-color: #ff4757;
            transform: translateY(-3px);
        }

        /* Efecto al hacer clic */
        button:active {
            transform: translateY(1px);
        }
    </style>
</head>

<body>
    <div>
        <h1>Zapatería La Sangileña</h1>
        <div id="div-inicio-sesion">
            <form action="modelo/loguear.php" method="post">
                <input type="text" name="usuario" placeholder="usuario" required>
                <input type="password" name="clave" placeholder="Contraseña" required>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>

    <script>
        // Pequeña animación al cargar la página
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector("form");
            form.classList.add("show-form");
        });
    </script>
</body>

</html>
