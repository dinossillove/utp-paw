<?php
// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini
    $aman = static function ($nilai) {
        return number_format($nilai,2,".","");
    };

    echo "<section>";
    echo "<h2>Kartu Log Jatah Konsumsi</h2>";
    echo "<p><strong>Nama:</strong> " . $aman($_SESSION["nama"]) . "</p>";
    echo "<p><strong>Kategori:</strong> " . ($aman($_SESSION["kategori"])) . "</p>";
    echo "<p><strong>Ransum:</strong> " . ($aman($_SESSION["nama_ransum"])) . "</p>";
    echo "<p><strong>Jumlah porsi:</strong> " . $aman($_SESSION["jumlah"]) . "</p>";
    
    echo "<p><strong>Harga per porsi:</strong> Rp" . ($_SESSION["harga"]) . "</p>";
    echo "<p><strong>Subtotal:</strong> Rp" . ($_SESSION["subtotal"]) . "</p>";
    echo "<p><strong>Subsidi:</strong> Rp" . ($_SESSION["diskon"]) . "</p>";


    echo "<p><strong>Total pembayaran:</strong> Rp" . ($_SESSION["total"]) . "</p>";
    echo "</section>";
}
