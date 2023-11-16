<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Miembros</title>
    <!-- Agrega aquí tus enlaces a los estilos CSS si los tienes -->
</head>
<body>

    <div>
        <h2>Listado de Miembros</h2>
        
        <!-- Botón para generar el PDF -->
        <a href="{{ route('members.generatePdf') }}" class="btn btn-primary">Generar PDF</a>

        <!-- Tabla para mostrar los datos -->
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Estado</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí deberías iterar sobre tus datos para llenar la tabla -->
                <!-- Reemplaza esta parte con tu lógica de iteración -->
                <tr>
                    <td>1</td>
                    <td>Nombre1</td>
                    <td>Apellido1</td>
                    <td>email1@example.com</td>
                    <td>123456789</td>
                    <td>Activo</td>
                    <td>usuario1</td>
                    <td>
                        <!-- Enlaces a las acciones de show, edit y delete -->
                        <a href="{{ route('members.show', 1) }}">Ver</a>
                        <a href="{{ route('members.edit', 1) }}">Editar</a>
                        <a href="{{ route('members.destroy', 1) }}">Eliminar</a>
                    </td>
                </tr>
                <!-- Fin de la iteración -->
            </tbody>
        </table>
        <button id="generarPDF">Generar PDF</button>
    </div>

    <!-- Agrega aquí tus scripts JS si los tienes -->

</body>
<script src="resources\js\pdf.js"></script>
</html>
