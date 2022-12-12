<?php
session_start();
$host = 'localhost';
$db = 'perpustakaan';
$username = 'root';
$pass = '';

$conn = mysqli_connect($host, $username, $pass, $db);

try {
    if ($conn) {
        // echo '<p class = "fw-semibold">Koneksi berhasil</p>';
    } else {
        throw new Exception('Koneksi Gagal');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

function show($data = "judul_buku")
{
    global $conn;
    if ($data == "") {
        $data = "judul_buku";
    }
    $query = mysqli_query($conn, "SELECT * FROM buku");
    return $query;
}


function create($data)


{
    $judulbuku = $data["judulbuku"];
    $penerbit = $data["penerbit"];
    $th_terbit = $data["th_terbit"];
    $sinopsis = $data["sinopsis"];
    global $conn;
    $query = mysqli_query($conn, "INSERT INTO buku (judul_buku,penerbit,sinopsis,th_terbit_buku) VALUES ('$judulbuku','$penerbit','$sinopsis','$th_terbit')");
    return $query;
}

function edit($data, $id)
{
    // var_dump($id);
    // die;

    $judulbuku = $data["judulbuku"];
    $penerbit = $data["penerbit"];
    $th_terbit = $data["th_terbit"];
    $sinopsis = $data["sinopsis"];
    global $conn;
    $query = mysqli_query($conn, "UPDATE buku SET judul_buku = '{$judulbuku}', penerbit = '{$penerbit}', sinopsis = '{$sinopsis}', th_terbit_buku = {$th_terbit} WHERE id_buku=$id");
    return $query;
}

function remove($id)
{
    global $conn;
    $query = mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id");
    return $query;
}

function register($data)
{
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $pass = mysqli_real_escape_string($conn, $data["pass"]);
    $rpass = mysqli_real_escape_string($conn, $data["rpass"]);

    $fname = ucfirst($data["fname"]);
    $mname = ucfirst($data["mname"]);
    $lname = ucfirst($data["lname"]);
    $jk = $data["jk"];
    $email = $data["email"];

    if ($pass !== $rpass) {
        echo "<script>alert('Password tidak sesuai')</script>";
    }

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $check = mysqli_query($conn, "SELECT * FROM user WHERE email= '$email' OR username= '$username'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert(\"email sudah terdaftar\")</script>";
        $_SESSION['value_input'] = $data;

        // var_dump($_SESSION);
    } else {
        $query = mysqli_query($conn, "INSERT INTO user (id,username,password,first_name,mid_name,last_name,jk,email) 
        VALUES ('','$username','$pass','$fname','$mname','$lname','$jk','$email')");
        $_SESSION[] = '';
        echo '<script>alert("Pendaftaran Berhasil")</script>';
        echo '<script>window.location.replace("login.php");</script>';
        return $query;
    }
}

function login($info)
{
    $username = $info['username'];
    $pass = $info['pass'];
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email='$username' OR username='$username'");
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $passcheckcond =  password_verify($pass, $row['password']);
        if ($passcheckcond) {
            $_SESSION['email'] = $row['email'];
            header("location:index.php");
        }
        // var_dump($passcheckcond);
        // die;
        // $passcheckcond =  password_verify($pass, $row['password']) ? header('location: index.php') : ($pass == '');
        // echo $passcheckcond ? "<script>alert('Password tidak boleh kosong')</script>" : "<script>alert('Password salah')</script>";
        // $_SESSION['login'] = $info;

    } else {
        $row = mysqli_fetch_assoc($query);
        $r_username = '';
        if (isset($row['username'])) {
            $r_username = $row['username'];
        }
        if ($username == '' && $pass == '') {
            echo "<script>alert('Email dan password harus diisi')</script>";
            $_SESSION['login'] = $info;
        } else if ($username != $r_username) {
            echo "<script>alert('Username atau Email tidak ditemukan')</script>";
            $_SESSION['login'] = $info;
        } else if ($username != $r_username && $pass != $row['pass']) {
            echo "<script>alert('Mohon untuk diisi dengan benar!')</script>";
            $_SESSION['login'] = $info;
        }
    }
}

function getuser($email)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
    return mysqli_fetch_assoc($query);
}

function search($data)
{

    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM buku WHERE penerbit LIKE '%{$data}%' OR sinopsis LIKE '%{$data}%' OR judul_buku LIKE '%{$data}%' OR id_buku LIKE '%{$data}%'");
    return $query;
}

function logout()
{
    $_SESSION[] = '';
    session_destroy();
    session_unset();
    header('location:login.php');
}
