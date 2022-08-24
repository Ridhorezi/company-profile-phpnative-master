<?php include("resource.php") ?>
<?php

$nama       = "";
$isi        = "";
$foto       = "";
$foto_name  = "";
$error      = "";
$sukses     = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from tutors where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $nama   = $r1['nama'];
    $isi        = $r1['isi'];
    $foto   = $r1['foto'];

    if($isi == ''){
        $error  = "Data not found";
    }
}

if (isset($_POST['simpan'])) {
    $nama      = $_POST['nama'];
    $isi        = $_POST['isi'];

    if ($nama == '' or $isi == '') {
        $error     = "Please enter all data, namely the content and title data.";
    }
   
    if($_FILES['foto']['name']){
        $foto_name = $_FILES['foto']['name'];
        $foto_file = $_FILES['foto']['tmp_name'];

        $detail_file = pathinfo($foto_name);
        $foto_ekstensi = $detail_file['extension'];
        $ekstensi_yang_diperbolehkan = array("jpg","jpeg","png","gif");
        if(!in_array($foto_ekstensi,$ekstensi_yang_diperbolehkan)){
            $error = "The allowed extensions are jpg, jpeg, png and gif";
        }

    }

    if (empty($error)) {
        if($foto_name){
            $direktori = "../gambar";

            @unlink($direktori."/$foto"); //delete data

            $foto_name = "tutors_".time()."_".$foto_name;
            move_uploaded_file($foto_file,$direktori."/".$foto_name);

            $foto = $foto_name;
        }else{
            $foto_name = $foto; //memasukkan data dari data yang sebelumnya ada
        }

        if($id != ""){
            $sql1   = "update tutors set nama = '$nama',foto='$foto_name',isi='$isi',tgl_isi=now() where id = '$id'";
        }else{
            $sql1       = "insert into tutors(nama,foto,isi) values ('$nama','$foto_name','$isi')";
        }
        
        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Data Successfully Processed";
        } else {
            $error      = "Data Unsuccessfully Processed";
        }
    }
}


?>
 <div class="content-wrapper">
    <?php
    if ($error) {
    ?>
        <div class="alert alert-danger animate__animated animate__fadeInDown" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $error ?>
        </div>
    <?php
    }
    ?>
    <?php
    if ($sukses) {
    ?>
        <div class="alert alert-info animate__animated animate__fadeInDown" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $sukses ?>
        </div>
    <?php
    }
    ?>
    <nav aria-label="breadcrumb"></nav>
            <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="tutors.php">Tutors</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tutors Input</li>
            </ol>
              </nav>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" name="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <?php 
                    if($foto){
                        echo "<img src='../gambar/$foto' style='max-height:100px;max-width:100px'/>";
                    }
                    ?>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                    <textarea name="isi" class="form-control" id="summernote"><?php echo $isi ?></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-gradient-primary" name="simpan"> Save  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                    <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                    </svg></button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>  