<?php
$nama = $_POST["nama"];



$title = $_POST["Title"];
if ($_POST['Title'] == "Unileper-ScrumMaster"){
    $title = "Unileper-ScrumMaster";
    $GajiperBulan = "Rp.16.550.000";
    $GajiperHari = "Rp.752.273";
} elseif ($_POST['Title'] == "Unileper-sqa"){
    $title = "Unileper-sqa";
    $GajiperBulan = "Rp.11.500.000";
    $GajiperHari = "Rp.522.727";
} elseif ($_POST['Title'] == "Unileper-productOwner"){
    $title = "Unileper-productOwner";
    $GajiperBulan = "Rp.8.500.000";
    $GajiperHari = "Rp.386.363";
} elseif ($_POST['Title'] == "munlay-ScrumMaster"){
    $title = "munlay-ScrumMaster";
    $GajiperBulan = "Rp.11.500.000";
    $GajiperHari = "Rp.522.727";
} elseif ($_POST['Title'] == "munlay-sqa"){
    $title = "munlay-sqa";
    $GajiperBulan = "Rp.8.500.000";
    $GajiperHari = "Rp.386.363";
} elseif ($_POST['Title'] == "munlay-productOwner"){
    $title = "munlay-productOwner";
    $GajiperBulan = "Rp.11.500.000";
    $GajiperHari = "Rp.522.727";
} elseif ($_POST['Title'] == "indoreni-ScrumMaster"){
    $title = "indoreni-ScrumMaster";
    $GajiperBulan = "Rp.8.500.000";
    $GajiperHari = "Rp.386.363";
} elseif ($_POST['Title'] == "indoreni-sqa"){
    $title = "indoreni-sqa";
    $GajiperBulan = "Rp.11.500.000";
    $GajiperHari = "Rp.386.363";
} elseif ($_POST['Title'] == "indoreni-productOwner"){
    $title = "indoreni-productOwner";
    $GajiperBulan = "Rp.16.550.000";
    $GajiperHari = "Rp.752.273";
}
?>


<p>
Berikut Informasi tentang Pegawai :
</p>

<table border="0">
    <tr>
        <td width="165">Nama Pegawai</td>
        <td width="250">:<strong><?php echo "$nama"?></strong></td>
    </tr>
    <br>
    <tr>
        <td>di Perusahaan dan bekerja sebagai</td>
        <td>:<strong><?php echo " ".$title?></strong></td>
    </tr>
    <tr>
        <td>Gaji per bulan</td>
        <td>:<strong><?php echo " ".$GajiperBulan?></strong></td>
    </tr>
    <br>
    <tr>
        <td>Gaji per hari</td>
        <td>:<strong><?php echo " ".$GajiperHari?></strong></td>
    </tr>
  