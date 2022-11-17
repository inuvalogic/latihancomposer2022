<?php

include "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;

// Read Xls file
$filename = 'contoh.xlsx';
$callStartTime = microtime(true);
$spreadsheet = IOFactory::load($filename);
$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
?>
<table border="1" cellpadding="5">
    <tr>
        <th>SKU</th>
        <th>Nama Barang</th>
        <th>Ukuran</th>
        <th>Stock</th>
        <th>Harga</th>
    </tr>
<?php
unset($sheetData[1]);
foreach ($sheetData as $row) {

    $sku = $row['A'];
    $nama_barang = $row['B'];
    $ukuran = $row['C'];
    $stock = $row['D'];
    $harga = $row['E'];
    ?>
    <tr>
        <td><?= $sku ?></td>
        <td><?= $nama_barang ?></td>
        <td><?= $ukuran ?></td>
        <td><?= $stock ?></td>
        <td><?= $harga ?></td>
    </tr>
    <?php
}
?>
</table>