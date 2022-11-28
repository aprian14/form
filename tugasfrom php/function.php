<?php

    function hitungTotal($nama_pelanggan, $paket_hotel, $jumlah_malam)
    {
        if($paket_hotel == 'Hotel Amaris') {
            $harga_satuan = 200000;
            $total_harga = $harga_satuan * $jumlah_malam;
        } else if($paket_hotel == 'Hotel Batik') {
            $harga_satuan = 400000;
            $total_harga = $harga_satuan * $jumlah_malam;
        } else if($paket_hotel == 'Hotel Wyndam') {
            $harga_satuan = 500000;
            $total_harga = $harga_satuan * $jumlah_malam;
        }

        $data = [
            'nama_pelanggan' => $nama_pelanggan,
            'harga_satuan' => $harga_satuan,
            'total_harga' => $total_harga,
            'jumlah_malam' => $jumlah_malam,
            'paket_hotel' => $paket_hotel
        ];

        return $data;

    }
?>
