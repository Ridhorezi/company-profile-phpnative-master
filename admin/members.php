<?php include("resource.php") ?>
    <?php
       $sukses = "";
       $katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
       if (isset($_GET['op'])) {
           $op = $_GET['op'];
       } else {
           $op = "";
       }
       if ($op == 'delete') { 
           $id = $_GET['id'];
           $sql1   = "delete from members where id = '$id'";
           $q1     = mysqli_query($koneksi, $sql1);
           if ($q1) {
               $sukses     = "Berhasil hapus data";
           }
       }
    ?>
        <div class="content-wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Members</li>
                </ol>
              </nav>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <style>
                        p{
                            float: left;
                        }
                    </style>
                    </p>
                    <br><br><br>
                    <?php
                    if ($sukses) {
                        ?>
                            <div class="alert alert-primary animate__animated animate__fadeInDown" role="alert">
                                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $sukses ?>
                            </div>
                        <?php
                        }
                    ?>
                    <table class="table table-striped" id="tabel-data">
                    <thead>
                    <tr>
                        <th class="col-1">No.</th>
                        <th class="col-2">Email</th>
                        <th>Name</th>
                        <th class="col-2">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sqltambahan = "";
                        $per_halaman = 10;
                        if ($katakunci != '') {
                            $array_katakunci = explode(" ", $katakunci);
                            for ($x = 0; $x < count($array_katakunci); $x++) {
                                $sqlcari[] = "(nama_lengkap like '%" . $array_katakunci[$x] . "%' or email like '%" . $array_katakunci[$x] . "%')";
                            }
                            $sqltambahan    = " where " . implode(" or ", $sqlcari);
                        }
                        $sql1   = "select * from members $sqltambahan";
                        $page   = isset($_GET['page'])?(int)$_GET['page']:1;
                        $mulai  = ($page > 1) ? ($page * $per_halaman) - $per_halaman : 0;
                        $q1     = mysqli_query($koneksi,$sql1);
                        $total  = mysqli_num_rows($q1);
                        $pages  = ceil($total / $per_halaman);
                        $nomor  = $mulai + 1;
                        $sql1   = $sql1." order by id desc limit $mulai,$per_halaman";

                        $q1     = mysqli_query($koneksi, $sql1);
                    
                        while ($r1 = mysqli_fetch_array($q1)) {
                        ?>
                            <tr>
                                <td><?php echo $nomor++ ?></td>
                                <td><?php echo $r1['email']?></td>
                                <td><?php echo $r1['nama_lengkap'] ?></td>
                                <td>
                                    <?php 
                                    if($r1['status'] == '1'){
                                        ?>
                                        <span class="btn btn-gradient-success">Active <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                        </svg></span>
                                        <?php
                                    }else{
                                        ?>
                                        <span class="btn btn-gradient-danger">Not Active <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                        <path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                                        </svg></span>
                                        <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>
                    <br>
                    <!-- <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php 
                                $cari = isset($_GET['cari'])? $_GET['cari'] : "";
                            for($i=1; $i <= $pages; $i++){
                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="members.php?katakunci=<?php echo $katakunci?>&cari=<?php echo $cari?>&page=<?php echo $i ?>"><?php echo $i ?></a>
                                </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </nav>    -->
                </div>
            </div>
        </div>   
    </div>




