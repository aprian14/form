<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 (If felse)</title>
</head>
<body>
    <?php 
    $nilai_uts = 99;
    $nilai_uas = 97;
    $nilai_rata = ($nilai_uts + $nilai_uas) / 2;

    // percabangan 1 kondisi 
     // == (samadengan duoble itu artinya membangdingkan suatu nilai, bukan memberikan nilai)
     // === (sama dengan triple itu artinya membandingkan suatu nialai (isinya)dan juga tipe datanya)
    if($nilai_rata == 100)
        $keterangan1 = "LULUS";

     

    
    else { // kondisi2 selainya
        $keterangan1 = " SEMANGAT, BELAJAR LAGI!";
    }

    // percabangan 3 kondisi
    if($nilai_rata >= 100) { 
        $keterangan2 = "Ket 2 : LULUS";
    } else if ($nilai_rata >= 90 && $nilai_rata <= 99) {
        //rentang 90 - 99
        $keterangan2 = "Ket 2 : Rata - Rata";
    } else { 
        // kondisi terakhir saat tidak memenuhi  persyaratan sebelumnya
        $keterangan2 = "Ket 2 : TIDAK LULUS";

    }
    $username = "synapse";
    $password = "123";
    // kondisi membandingkan nilai dari variable berserta tipe datanya
    if ($username === "synapse" && $password === 123) {
        $succes = "YA";

    } else {
        $succes = "Tidak";
    }
    $data = "DATA"; 
    if($data == "DATA") :
        $valid = true;
    else :
        $valid = false;
    endif;

    ?>
    <p> keterangan 1 : <?= $keterangan1; ?> </p>
    <p> keterangan 2 : <?= $keterangan2; ?> </p>
    <P> password benar ? : <?= $succes ?> </P>
    <p> Valid? : <?= $valid ?></p>
</body>
</html>