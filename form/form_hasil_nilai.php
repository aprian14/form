<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hasil</title>
    <!-- CDN CSS BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<!-- menerima inputan dari form_input.php -->
<!-- sesuaikan method yg dipakai dari form_input.php -->
<?php
//nilai nilai_uts yg diterima dari form_input.php, sesuaikan methodnya dengan method form pengirim
$nilai_uts = $_POST['nilai_uts'];
//nilai nilai_uas yg diterima dari form_input.php, sesuaikan methodnya dengan method form pengirim
$nilai_uas = $_POST['nilaiuas'];

// untuk perhitungan luasnya, kita menggunakan function luasPersegiPanjang($nilai_uts, $nilai_uas) yg ada di file function.php
// masukkan file function.php ke dalam file yg membutuhkan (form_hasil.php)
include 'function.php';
// include '../1text.php';
$hasil = 'nilaiRata'($nilai_uts, $nilai_uas);
?>

<body>
    <div class="container">
        <table class="mt-4 table table-bordered table-striped">
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><?php echo $nilai_uts ?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><?php echo $nilai_uas ?></td>
            </tr>
            <tr>
                <td>Nilai Rata-rata</td>
                <td>:</td>
                <td><?php echo $hasil['nilaiRata'] ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><?php echo $hasil['keterangan'] ?></td>
            </tr>
            <tr>
                <td>Message</td>
                <td>:</td>
                <td><?php echo $hasil['message'] ?></td>
            </tr>
            
        </table>
    </div>


</body>

</html>