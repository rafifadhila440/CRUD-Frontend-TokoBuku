<?php

class controller{
    

    //fungsi login
    function login($con, $tabel, $username, $password, $redirect)
    {
        session_start();
        include 'koneksi.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $jalan = mysqli_query($con,"SELECT * FROM tbl_user where username='$username' and password='$password'");
        $cek = mysqli_num_rows($jalan);

        if($cek > 0){
            $data = mysqli_fetch_assoc($jalan);
            if($data['akses']=="admin"){
                $_SESSION['username'] = $username;
                $_SESSION['akses'] = "admin";
                header("location:admin.php");
            }else if($data['akses']=="kasir"){
                $_SESSION['username'] = $username;
                $_SESSION['akses'] = "kasir";
                header("location:kasir.php");
            }else if($data['akses']=="manager"){
                $_SESSION['username'] = $username;
                $_SESSION['akses'] = "manager";
                header("location:manager.php");
            }else{
                echo "<script>alert('Gagal login, Cek username & password !');document.location.href='login.php'</script>";
            }
            echo "<script>alert('Selamat Datang $username');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Gagal login, Cek username & password !');document.location.href='login.php'</script>";
        }
    }

    //fungsi simpan
    function simpan($con, $tabel, array $field, $redirect)
    {
        $sql = "INSERT INTO $tabel SET ";
        foreach($field as $key => $value){
            $sql.= " $key = '$value',";
        }
        $sql = rtrim($sql, ',');
        $jalan = mysqli_query($con, $sql);
        if($jalan){
            echo "<script>alert('Berhasil disimpan');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Gagal disimpan');document.location.href='$redirect'</script>";
        }
    }

    //fungsi tampil
    function tampil($con, $tabel)
    {
        $sql = "SELECT * FROM $tabel";
        $jalan = mysqli_query($con, $sql);
        while($data = mysqli_fetch_assoc($jalan))
            $isi[] = $data;
            return @$isi;
    }

    //fungsi hapus
    function hapus($con, $tabel, $where, $redirect)
    {
        $sql = "DELETE FROM $tabel WHERE $where";
        $jalan = mysqli_query($con, $sql);
        if($jalan){
            echo "<script>alert('Berhasil dihapus');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Gagal dihapus');document.location.href='$redirect'</script>";
        }
    }

    //fungsi edit
    function edit($con, $tabel, $where)
    {
        $sql = "SELECT * FROM $tabel WHERE $where";
        $jalan = mysqli_query($con, $sql);
        $tampung = mysqli_fetch_assoc($jalan);
        return $tampung;
    }

    //fungsi ubah
    function ubah($con, $tabel, array $field, $where, $redirect)
    {
        $sql = "UPDATE $tabel SET ";
        foreach($field as $key => $value){
            $sql.= " $key = '$value',";
        }
        $sql = rtrim($sql, ',');
        $sql.= " WHERE $where";
        $jalan = mysqli_query($con, $sql);

        if($jalan){
            echo "<script>alert('Berhasil diubah');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Gagal diubah');document.location.href='$redirect'</script>";
        }
    }

}
//penutup class
?>