<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanjaan</title>

    <!-- CDN CSS BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h4>Pilih Paket Hotel : </h4>
        <form method="post">
            <div class="row mt-3 mb-3">
                <label for="inputPelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_pelanggan" class="form-control" id="inputPelanggan" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Paket Hotel</label>
                <div class="col-sm-10">
                    <select name="paket_hotel" class="form-control" required>
                        <option value="">--Pilih--</option>
                        <option value="Hotel Amaris">Hotel amaris</option>
                        <option value="Hotel Batik">Hotel Batik</option>
                        <option value="Hotel Wyndam">Hotel Wyndam</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <label for="inputJumlah" class="col-sm-2 col-form-label">Jumlah Malam</label>
                <div class="col-sm-10">
                    <input type="number" name="jumlah_malam" class="form-control" id="inputJumlah" required>
                </div>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Proses</button>
        </form>

        <!-- AKSI SAAT BUTTON diklik -->
        <?php
            // $_POST['nameOfInputan'] => mengambil name dari inputan dengan method POST (sesuai method yg ada pada form)

            // kondisi ketika button dengan name submit diklik
            if(isset($_POST['submit'])){

                include 'function.php';

                // siapkan wadah untuk nampung nilai/isi dari tiap inputan form yg kita isi
                $nama_pelanggan = $_POST['nama_pelanggan'];
                $paket_hotel = $_POST['paket_hotel']; 
                $jumlah_malam = $_POST['jumlah_malam'];

                $result = hitungTotal($nama_pelanggan, $paket_hotel, $jumlah_malam);
        ?>

            <!-- hasil inputan yg kita tampilkan menggunakan tag html biar lebih mudah stylingnya -->
            <!-- kita apit tag html ini di dalam script PHP saat aksi2 tertentu -->
            <!-- saat inputan form terisi dan button diklik, maka akan menampilkan tabel yg berisi data sesuai yg diinputkan pd form -->
            <h4 class="mt-4">OUTPUT : </h4>
            <table class="table table-bordered table-striped mt-4"> <!-- table => tabel -->
                <tr> <!-- tr => row / baris -->
                    <td>Nama Pelanggan</td> <!-- td => column / kolom -->
                    <td>:</td>
                    <td><?php echo $result['nama_pelanggan'] ?></td>
                </tr>
                <tr> <!-- tr => row / baris -->
                    <td>Paket Hotel</td> <!-- td => column / kolom -->
                    <td>:</td>
                    <td><?php echo $result['paket_hotel'] ?></td>
                </tr>
                <tr> 
                    <td>Harga Satuan</td> <!-- td => column / kolom -->
                    <td>:</td>
                    <td><?php echo $result['harga_satuan'] ?></td>
                </tr>
                <tr> 
                    <td>Jumlah Malam</td> <!-- td => column / kolom -->
                    <td>:</td>
                    <td><?php echo $result['jumlah_malam'] ?></td>
                </tr>
                <tr> 
                    <td>Total Harga</td> <!-- td => column / kolom -->
                    <td>:</td>
                    <td><?php echo $result['total_harga'] ?></td>
                </tr>
            </table>

        <?php
            }
        ?>

    </div>
</body>

</html>