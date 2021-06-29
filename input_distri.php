<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Distributor</title>
</head>
<body>
<div class="container-fluid" id= "content" >
    <div class="card">
	    <div class="card-header">
		    Form Distributor
	    </div>
	    <div class="card-body">
            <form method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Distributor</label>
                    <input type="text" name="nama_distri" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Distributor" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Telpon</label>
                    <input type="number" name="telp" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Telpon" required>
                </div>
                <button class="btn btn-primary" type="submit" name="simpan" value="SIMPAN">Simpan</button>
        </form>
	    </div>
    </div>
    <div style="padding:10px;">
        <form class="d-flex">
            <label class="me-3">Pencarian</label>
            <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary me-2" type="submit">Cari</button>
            <button class="btn btn-outline-success" type="submit">Refresh</button>
        </form>
        <table align="center" border="1" class="mt-4 table table-stripped table-hover bg-white" id="data">
            <tr>
                <th>Nama Distributor</th>
                <th>Alamat</th>
                <th>Telpon</th>
                <th>edit</th>
                <th>hapus</th>
            </tr>
            <!-- <?php
                $data = $go->tampil($con,$tabel);
                $no = 0;
                if($data ==""){
                    echo "<tr><td colspan='5'>No Record</td></tr>";
                }else{
                    foreach($data as $r){
                    $no++
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $r['username']?></td>
                <td><?php echo $r['password']?></td>
                <td><a href="?menu=user&hapus&id=<?php echo $r['id']?>" onclick="return confirm('Hapus Data?')">Hapus</a></td>
                <td><a href="?menu=user&edit&id=<?php echo $r['id']?>">Edit</a></td>
            </tr>
            <?php } } ?> -->
        </table>
    </div>
</div>
    </body>
</html>
