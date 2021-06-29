<?php
include 'config/koneksi.php';
include 'library/controller.php';

$table = 'tbl_user';
$go = new Controller();

if (isset($_POST['login'])) {
    $go->login($con, $username, $password, $akses , $redirect);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <title>Dashboard</title>
</head>

<body class="text-center">
    <div class="container">
        <main class="form-login">
            <form style="width:50%" class="mx-auto p-5  mt-5 align-items-center" method="post">
                <h1 class="h3 mb-3 fw-normal">Login</h1>

                <div class="form-floating pb-4">
                <input type="text" name="username" class="form-control" id="floatingUsername" placeholder="Username" required>
                <label for="floatingUsername">Username</label>
                </div>
                <div class="form-floating pb-2">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mx-auto p-3">
                <label>
                    <input type="checkbox" value="remember-me" class="mx-auto"> Remember me
                </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="login" value="LOGIN">Login</button>
            </form>
        </main>
    </div>
</body> 
</html>