<?php include("resource.php") ?>
<?php
$judul      = "";
$isi        = "";
$error      = "";
$sukses     = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from info where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul  = $r1['judul'];
    $isi        = $r1['isi'];

    if($isi == ''){
        $error  = "Data not found";
    }
}

if (isset($_POST['simpan'])) {
    $judul      = $_POST['judul'];
    $isi        = $_POST['isi'];
    
    if ($judul == '' or $isi == '') {
        $error     = "Please enter all data, namely the content and title data.";
    }

    if (empty($error)) {
        if($id != ""){
            $sql1   = "update info set judul = '$judul',isi='$isi',tgl_isi=now() where id = '$id'";
        }else{
            $sql1       = "insert into info(judul,isi) values ('$judul','$isi')";
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
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="contact.php">Contact</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact Input</li>
                </ol>
              </nav>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form action="" method="post">
                        <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
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
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  