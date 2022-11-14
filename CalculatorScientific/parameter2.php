<html>
<head>
    <title>coba parameter</title>
</head>
    <body>
    <?php
    $a = 100;
    $b = 5;
    function tambah ($a,$b){
        $nilai = $a + $b;
        return $nilai;
    }
    function kurang ($a,$b){
        $nilai = $a - $b;
        return $nilai;
    }
    function bagi ($a,$b){
        $nilai = $a / $b;
        return $nilai;
    }
    function kali ($a,$b){
        $nilai = $a * $b;
        return $nilai;
    }
    $hasil_tambah = tambah($a,$b);
    echo "nilai".$a."+" .$b."=" .$hasil_tambah;
    $hasil_kurang = kurang($a,$b);
    echo "nilai".$a."-" .$b."=" .$hasil_kurang;
    $hasil_bagi = bagi($a,$b);
    echo "nilai".$a."/" .$b."=" .$hasil_bagi;
    $hasil_kali = kali($a,$b);
    echo "nilai".$a."*" .$b."=" .$hasil_kali;

    ?>
    </body>
    </html>