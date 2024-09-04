<?php

$koneksi = mysqli_connect("localhost","root","","biodata");

    $NIM = $_POST['NIM'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $pesan = $_POST['pesan'];

    $cek_nim = "SELECT NIM FROM biodata_contact WHERE NIM = '$NIM'";
    $result = mysqli_query($koneksi, $cek_nim);
    
    if (mysqli_num_rows($result) > 0) {
        echo "Error: NIM sudah ada dalam database.";
    } else {
        $query = "INSERT INTO biodata_contact (NIM, nama, kelas, email, jenis_kelamin, tanggal_lahir, agama, pesan) 
        VALUES ('$NIM', '$nama', '$kelas', '$email', '$jenis_kelamin', '$tanggal_lahir', '$agama', '$pesan')";
    
        if (mysqli_query($koneksi, $query)) {
            echo "<script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php' ;
                    </script>" ;
        } else {
            echo "<script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
                    </script>" ;
        }
    }
    
    mysqli_close($koneksi);
?>