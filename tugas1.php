<?php
$dataProduk = array(
    ['produk' => 'Galaxy S21', 'merk' => 'Samsung', 'harga' => 'Rp19000000', 'status' => 'true'],
    ['produk' => 'Galaxy A71', 'merk' => 'Samsung', 'harga' => 'Rp20999000', 'status' => 'false'],
    ['produk' => 'Galaxy S21', 'merk' => 'Samsung', 'harga' => 'Rp19000000', 'status' => 'true'],
    ['produk' => 'Galaxy S21', 'merk' => 'Samsung', 'harga' => 'Rp19000000', 'status' => 'false'],
);
foreach($dataProduk as $key => $value){
    echo $value['merk'];
    echo '<br>';
    echo '<br>';
    echo $value['produk'];
    echo '<br>';
    echo '<br>';
    echo $value['harga'];
    echo '<br>';
    echo '<br>';
    if($value['status']=='true'){
        echo "Stok Tersedia";
    echo '<br>';
    echo '<br>';
    }else{
        echo "Tidak Tersedia";
    }



}
