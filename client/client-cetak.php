<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_client INNER JOIN tb_kategori 
                        ON tb_client.id_jk = tb_kategori.id_jk");
$html = '<center><h3>Data Client</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Nama Client</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Tanggal</th>
            </tr>';
$no = 1;
while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $transaction['nama_client'] . "</td>
                <td>" . $transaction['jenis_keamanan'] . "</td>
                <td>Rp. " . number_format($transaction['harga']) . "</td>
                <td>" . $transaction['tanggal'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-client.pdf');
?>
