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
//nilai panjang yg diterima dari form_input.php, sesuaikan methodnya dengan method form pengirim
$panjang = $_POST['panjang'];
//nilai lebar yg diterima dari form_input.php, sesuaikan methodnya dengan method form pengirim
$lebar = $_POST['lebar'];

// untuk perhitungan luasnya, kita menggunakan function luasPersegiPanjang($panjang, $lebar) yg ada di file function.php
// masukkan file function.php ke dalam file yg membutuhkan (form_hasil.php)
include 'function.php';
// include '../1text.php';
$luas = 'luasPersegiPanjang'($panjang, $lebar);
?>

<body>
    <div class="container">
        <table class="mt-4 table table-bordered table-striped">
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><?php echo $panjang ?></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><?php echo $lebar ?></td>
            </tr>
            <tr>
                <td>Luas</td>
                <td>:</td>
                <td><?php echo $luas ?></td>
            </tr>
            
        </table>
    </div>


</body>

</html>