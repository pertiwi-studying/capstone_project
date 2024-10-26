<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_nutrisi';

$conn = mysqli_connect($host, $user, $password, $database);

$missingFields = array();

if(isset($_POST['tb_anak'])) {
    if (!is_numeric($_POST['nik_anak'])) {
        $missingFields[] = 'NIK harus diisi dengan angka';
    }
    if (empty($_POST['nama_anak'])) {
        $missingFields[] = 'Nama';
    }
    if (empty($_POST['tempat_lahir_anak'])) {
        $missingFields[] = 'Tempat Lahir';
    }
    if (empty($_POST['tanggal_lahir_anak'])) {
        $missingFields[] = 'Tanggal Lahir';
    }
    if (empty($_POST['jenis_kelamin_anak'])) {
        $missingFields[] = 'Jenis Kelamin';
    }
    // if (!empty($missingFields)) {
    //     echo "Kolom berikut wajib diisi dengan angka: " . implode(', ', $missingFields);
    else {
        $nik_anak = $_POST['nik_anak'];
        $nama_anak = $_POST['nama_anak'];
        $tempat_lahir_anak = $_POST['tempat_lahir_anak'];
        $tanggal_lahir_anak  = $_POST['tanggal_lahir_anak'];
        $jenis_kelamin_anak = $_POST['jenis_kelamin_anak'];

        // $query = "INSERT INTO tb_anak VALUES('$nik_anak', '$nama_anak','$tempat_lahir_anak','$tanggal_lahir_anak','$jenis_kelamin_anak')";
        $query = "INSERT INTO tb_anak VALUES ('$nik_anak', '$nama_anak', '$tempat_lahir_anak', '$tanggal_lahir_anak', '$jenis_kelamin_anak')";
        if (mysqli_query($conn, $query)) {
            header("Location: data_anak_page.php");
        } else {
            echo "Input data gagal: " . mysqli_error($conn);
        }
    }
}
?>



<!-- if (empty($_POST['alamat'])) {
        $missingFields[] = 'Alamat';
    }
    if (empty($_POST['username'])) {
        $missingFields[] = 'Username';
    }
    if (empty($_POST['password'])) {
        $missingFields[] = 'Password';
    } -->