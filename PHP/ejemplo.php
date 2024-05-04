<?php
// Incluye las librerías PHP QR Code y la extensión ZBar
include "phpqrcode/qrlib.php";
include "ZBarDecoder.php";

// Ruta del archivo QR que quieres leer
$qrFile = "C:\Users\matty\Downloads\qrcode_108798078_d7e4f46bcaeab7c2e04784b65074ee5e.png";

// Lee el QR utilizando ZBar
$decoder = new ZBarDecoder();
$result = $decoder->decode($qrFile);

// Verifica si se leyó correctamente el QR
if (!empty($result)) {
    echo "Contenido del QR: " . $result[0]["data"];
} else {
    echo "No se pudo leer el QR.";
}
