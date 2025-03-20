<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cevap = isset($_POST["zombi"]) ? intval($_POST["zombi"]) : 0;

    echo "<!DOCTYPE html>";
    echo "<html lang='tr'>";
    echo "<head><meta charset='UTF-8'><title>Sonuç</title></head>";
    echo "<body style='text-align: center; font-family: Arial, sans-serif;'>";

        echo "<h1>🎉 Tebrikler! Doğru cevabı verdin!</h1>";
        echo "<p>Bengisu'nun gazabından en mantıklı hareketle kurtuldun.</p>";
    
    echo "<br><br><a href='index.html'>Başa Dön</a>";
    echo "</body></html>";
} else {
    echo "<h1>Bu sayfaya doğrudan erişemezsiniz!</h1>";
}
?>
