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
            $sql1   = "delete from halaman where id = '$id'";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Your file has been deleted id " . $id;
            }
        }
    ?>
        <div class="content-wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Halaman</li>
                </ol>
              </nav>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p>
                    <a href="halaman_input.php">
                        <button class="btn btn-gradient-primary btn-sm"> Create <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                        </svg> 
                    </button>
                    </a>
                    </p>
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
                            <div class="alert alert-info animate__animated animate__fadeInDown" role="alert">
                                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $sukses ?>
                            </div>
                        <?php
                        }
                    ?>
                    <table class="table table-striped" id="tabel-data">
                      <thead>
                        <tr>
                          <th> No.</th>
                          <th> Title </th>
                          <th> Quote </th>
                          <th class="col-2"> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $sqltambahan = "";
                        $per_halaman = 10;
                        $sql1   = "select * from halaman $sqltambahan";
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
                          <td> <?php echo $nomor++ ?> </td>
                          <td> <?php echo $r1['judul'] ?> </td>
                          <td> <?php echo $r1['kutipan'] ?> </td>
                          <td>
                    <a href="halaman_input.php?id=<?php echo $r1['id']?>">
                        <button class="btn btn-gradient-info btn-sm">Update <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></button>
                    </a>
                    <!-- onclick="return confirm('Apakah yakin mau hapus data bro?')" -->
                        <button class="btn btn-gradient-danger btn-sm" data-toggle="modal" data-target="#modalku"> Delete <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg></button>                   
                    <div class="modal fade" id="modalku">
                        <div class="modal-dialog">
                            <div class="modal-content">
                        
                            <!-- Ini adalah Bagian Header Modal -->
                            <div class="modal-header">
                                <h3 class="modal-title">Are you sure ?</h3>
                            </div>
                            
                            <!-- Ini adalah Bagian Body Modal -->
                            <div class="modal-body">
                                You won't be able to revert this!
                            </div>
                            <!-- Ini adalah Bagian Footer Modal -->
                                <div class="modal-footer">
                                    <a href="halaman.php">
                                    <button type="reset" class="btn btn-gradient-danger">No, cancel!</button>
                                    </a>

                                    <a href="halaman.php?op=delete&id=<?php echo $r1['id'] ?>">
                                    <button type="submit" class="btn btn-gradient-success">Yes, delete it!</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <a class="page-link" href="halaman.php?katakunci=<?php echo $katakunci?>&cari=<?php echo $cari?>&page=<?php echo $i ?>"><?php echo $i ?></a>
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




