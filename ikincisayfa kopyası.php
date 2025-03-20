<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Formdan gelen verileri al
    $yemek = isset($_POST["yemek"]) ? trim(strtolower($_POST["yemek"])) : "";
    $secenek = isset($_POST["secenek"]) ? intval($_POST["secenek"]) : 0;

    echo "<!DOCTYPE html>";
    echo "<html lang='tr'>";
    echo "<head><meta charset='UTF-8'><title>Sonuç</title></head>";
    echo "<body style='text-align: center; font-family: Arial, sans-serif;'>";

    // Doğru cevap kontrolü
    if ($yemek === "pizza" && $secenek === 18) {
        echo "<h1>🎉 Tebrikler! Doğru cevap verdin.</h1>";
        echo "<p>Doğru cevaplar: </p>";
        echo "<p><b>Pizza</b> (Eğer kahvaltıda bile pizza yiyorsam bil ki onu seviyorumdur.)</p>";
        echo "<p><b>18</b> (Ben 18'lik bir çıtırım, seni kartlaşmış yaşlı babanne!)</p>";

        echo "<h2>Yeni soru: Bana nike jordon çantanı ne zaman verirsin?</h2>";
        echo"Eğer vermezsen, sana öcü yaparım. Öptüm bay.";
        echo "<form action='cevapkontrol.php' method='post'>";
        echo "<input type='radio' name='zombi' value='1' required> Hemen şimdi<br>";
        echo "<input type='radio' name='zombi' value='2'> Gün sonunda<br>";
        echo "<input type='radio' name='zombi' value='3'> Sen ne zaman istersen<br>";
        echo "<br><input type='submit' value='Cevabı Gönder'>";
        echo "</form>";
    } else {
        echo "<h1>😈 Yanlış cevap! Tekrar dene ya daaa</h1>";
        echo "<p>Bu gece rüyana girmeye geliyorum.</p>";
    }

    echo "<br><br><a href='index.html'>Geri Dön</a>";
    echo "</body></html>";
} else {
    
    echo "<h1>Bu sayfaya doğrudan erişemezsiniz!</h1>";
}
?>



