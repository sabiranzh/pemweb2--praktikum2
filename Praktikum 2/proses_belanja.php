<?php
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['Jumlah'];

//array harga produk
$harga =[
    'TV' => 4200000,
    'Kulkas' => 3100000,
    'Mesin Cuci' => 3800000,
];

//hitung total harga
$Total = $jumlah * $harga[$produk];

//format rupiah
$Total = number_format($Total);

echo "Nama Customer: $customer";
echo "<br> Produk: $produk";
echo "<br> Jumlah: $jumlah";
echo "<br> Total Belanja: Rp. $Total";