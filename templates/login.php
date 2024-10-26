<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_nutrisi';

$conn = mysqli_connect($host, $user, $password, $database);

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_registrasi 
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    header("Location: home_page.html");  // Removed the space after "Location"
} else {
    echo "<center><h1> Username atau password anda salah.</h1>
            <button><strong><a href='index.html'>login</a></strong></button></centre>";
}
?>





//   session_start();

//   include("registrasi.php");

//   if($_SERVER['REQUEST_METHOD']=="POST")
//   {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     if(!empty($username) && !empty($password)){
//       $query = "select * from registrasi where username = "$username" limit 1";
//       $result = mysqli_query($conn, $query);

//       if($result)
//       {
//         if($result && mysqli_num_rows($result) > 0)
//         {
//           $user_data = mysqli_fetch_assoc($result);

//           if($user_data['pass']==$password)
//           {
//             header("location:index.html");
//             die;
//           }
//         }
//       }
//     }
//   }
// ?>