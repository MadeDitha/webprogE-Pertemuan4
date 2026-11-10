<?php
    // transaksi penjualan produk
    $namaproduk = "Celana Reza Arab";
    $hargasatuan =3500000;
    $qty = 3;

    // hitung subtotal
    $subtotal = $hargasatuan * $qty;

    // diskon 5% jika subtotal > 5500.000
    $diskon = 0;
    if ($subtotal > 5500000) {
        $diskon = 5 / 100 * $subtotal;
    }

    // harga yang harus dibayar setelah diskon
    $total = $subtotal - $diskon;

    echo "Nama Produk: " . $namaproduk;
    echo "<br>Harga Satuan: Rp " . number_format($hargasatuan, 0, ',', '.');
    echo "<br>Qty: " . $qty;
    echo "<br>Subtotal: Rp " . number_format($subtotal, 0, ',', '.');
    echo "<br>Diskon: Rp " . number_format($diskon, 0, ',', '.');
    echo "<br>Harga yang harus dibayar: Rp " . number_format($total, 0, ',', '.');
?>

