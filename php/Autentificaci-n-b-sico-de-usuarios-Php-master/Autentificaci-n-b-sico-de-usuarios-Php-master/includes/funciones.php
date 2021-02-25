<?php

    function muestraFormularioAnonimo(){
            echo "<h3>Introduzca sus credenciales</h3>";
            echo"<form action=\"index.php\" method=\"post\">
            Usuario: <input type=\"text\" name=\"user\"/><br><br>
            Contraseña: <input type=\"text\" name=\"pswd\"/><br><br>
            <input type=\"submit\" name=\"enviar\" value=\"Enviar\">
            </form>
            "; 
    }

    function muestraFormularioAdmin(){
            echo "<h3>Bienvenido administrador</h3>
            <form action=\"index.php\" method=\"post\">
            Nombre del nuevo usuario: <input type=\"text\" name=\"nuevoUser\"/><br><br>
            Contraseña del nuevo usuario: <input type=\"text\" name=\"nuevaPswd\"/><br><br>
            <input type=\"submit\" name=\"crear\" value=\"Crear Usuario\">
            </form>

            <br><table style='border: 3px solid black'>
            <h3>Listado Usuarios</h3>";
            foreach ($_SESSION["usuarios"]  as $indice => $usuario) {
                echo "<tr>
                <td style='border: 1px solid black'>
                Nombre: ".$usuario[0]."<br>
                Contraseña: ".$usuario[1];
                "</td>
                </tr>";
            }
            echo "</table>";

        }

        function muestraEnlaceAPrivado(){
            echo "<h2>Bienvenido, usuario registrado</h2>";
            echo "<a href='privado.php'>Acceso especial para usuarios registrados</a>";
        }
