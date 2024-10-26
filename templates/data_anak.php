<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_nutrisi';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nik'])) {
    $nik = $_GET['nik'];

    $query = "SELECT * FROM tb_anak WHERE nik_anak = '$nik'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Data untuk NIK $nik:</h2>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<strong>NIK:</strong> " . $row['nik_anak'] . "<br>";
            echo "<strong>Nama:</strong> " . $row['nama_anak'] . "<br>";
            echo "<strong>Tempat Lahir:</strong> " . $row['tempat_lahir_anak'] . "<br>";
            echo "<strong>Tanggal Lahir:</strong> " . $row['tanggal_lahir_anak'] . "<br>";
            echo "<strong>Jenis Kelamin:</strong> " . $row['jenis_kelamin_anak'] . "<br>";
        }
    } else {
        echo "Data tidak ditemukan untuk NIK $nik.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data by NIK</title>
</head>
<body>
    <h1>Search Data by NIK</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <label for="nik">NIK:</label>
        <input type="number" id="nik" name="nik" required>
        <button type="submit">Search</button>
    </form>
</body>
</html>
