<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_nutrisi';

$conn = mysqli_connect($host, $user, $password, $database);

$missingFields = array();

if(isset($_POST['tb_registrasi'])) {
    if (empty($_POST['nama'])) {
        $missingFields[] = 'Nama';
    }
    if (empty($_POST['tempat_lahir'])) {
        $missingFields[] = 'Tempat Lahir';
    }
    if (empty($_POST['tgl_lahir'])) {
        $missingFields[] = 'Tanggal Lahir';
    }
    if (empty($_POST['jenis_kelamin'])) {
        $missingFields[] = 'Jenis kelamin';
    }
    if (empty($_POST['alamat'])) {
        $missingFields[] = 'Alamat';
    }
    if (empty($_POST['username'])) {
        $missingFields[] = 'Username';
    }
    if (empty($_POST['password'])) {
        $missingFields[] = 'Password';
    }
    if (!is_numeric($_POST['nik'])) {
        $missingFields[] = 'NIK harus diisi dengan angka';
    }
    if (!is_numeric($_POST['no_telp'])) {
        $missingFields[] = 'Nomor telepon harus diisi dengan angka';
    }
    if (!empty($missingFields)) {
        echo "Kolom berikut wajib diisi dengan angka: " . implode(', ', $missingFields);
    } else {
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir  = $_POST['tgl_lahir'];
        $nik = $_POST['nik'];
        $no_telp = $_POST['no_telp'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO tb_registrasi VALUES('$nama','$tempat_lahir','$tgl_lahir','$nik','$no_telp','$jenis_kelamin','$alamat','$username','$password')";

        if (mysqli_query($conn, $query)) {
            header("Location: login_page.php");
        } else {
            echo "Pendaftaran gagal: " . mysqli_error($conn);
        }
    }
}
?>