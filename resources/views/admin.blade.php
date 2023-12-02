<!-- resources/views/admins.blade.php -->

@section ('content')
<body>
    <div class="container">
        <h1>Listado de Administradores</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Usuario</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->id_admin }}</td>
                        <td>{{ $admin->admin_name }}</td>
                        <td>{{ $admin->admin_lastname }}</td>
                        <td>{{ $admin->admin_email }}</td>
                        <td>{{ $admin->admin_phone }}</td>
                        <td>{{ $admin->admin_user }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button id="generarPDF">Generar PDF</button>
    </div>

    <script src="resources\js\pdf_generate.js"></script>
</body>
</html>
@endsection