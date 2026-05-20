<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "tickets_db");

// Validar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Insertar datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tipo = $_POST['tipo'];
    $fecha = $_POST['fecha'];
    $folio = $_POST['folio'];

    // Datos del cliente
    $cliente_nombre = $_POST['cliente_nombre'];
    $cliente_telefono = $_POST['cliente_telefono'];
    $cliente_correo = $_POST['cliente_correo'];

    // Datos del trabajador
    $trabajador_nombre = $_POST['trabajador_nombre'];
    $trabajador_puesto = $_POST['trabajador_puesto'];

    // Consulta preparada
    $sql = "INSERT INTO tickets 
    (tipo, fecha, folio, cliente_nombre, cliente_telefono, cliente_correo, trabajador_nombre, trabajador_puesto)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);

    $stmt->bind_param(
        "ssssssss",
        $tipo,
        $fecha,
        $folio,
        $cliente_nombre,
        $cliente_telefono,
        $cliente_correo,
        $trabajador_nombre,
        $trabajador_puesto
    );

    if ($stmt->execute()) {
        echo "Ticket registrado correctamente";
    } else {
        echo "Error al registrar ticket";
    }

    $stmt->close();
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Tickets</title>

    <style>
        body{
            font-family: Arial;
            background: #f4f4f4;
            padding: 30px;
        }

        form{
            background: white;
            padding: 20px;
            width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
        }

        h2{
            text-align: center;
        }

        input, select{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        button{
            width: 100%;
            padding: 12px;
            background: #0056b3;
            color: white;
            border: none;
            margin-top: 15px;
            cursor: pointer;
        }

        button:hover{
            background: #003d80;
        }
    </style>
</head>
<body>

<form method="POST">

    <h2>Registro de Tickets</h2>

    <label>Tipo</label>
    <select name="tipo" required>
        <option value="">Seleccione</option>
        <option value="Queja">Queja</option>
        <option value="Devolución">Devolución</option>
    </select>

    <label>Fecha</label>
    <input type="date" name="fecha" required>

    <label>Folio</label>
    <input type="text" name="folio" required>

    <h3>Datos del Cliente</h3>

    <label>Nombre</label>
    <input type="text" name="cliente_nombre" required>

    <label>Teléfono</label>
    <input type="text" name="cliente_telefono">

    <label>Correo</label>
    <
