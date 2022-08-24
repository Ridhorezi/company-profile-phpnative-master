<?php include_once("inc_header.php") ?>
<!-- untuk home -->
<br>
<div class="contain">
  <div class="email" onclick="this.classList.add('expand')">
    <div class="from">
      <div class="from-contents">
        <div class="avatar"><img src="https://img.icons8.com/color/19/000000/whatsapp--v1.png" class="wa"/></div>
        <div class="name"> any question ?</div>
        <style>
          .wa{
            width: 25px;
            height: 22px;
          }
        </style>
      </div>
    </div>
    <div class="to">
      <div class="to-contents">
        <div class="top">
          <div class="avatar-large me"></div>
          <div class="name-large">click the link below !</div>
          <div class="x-touch" onclick="document.querySelector('.email').classList.remove('expand');event.stopPropagation();">
            <div class="x">
              <div class="line1"></div>
              <div class="line2"></div>
            </div>
          </div>
        </div>
        <div class="bottom">
          <div class="row">
            <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" class="cs1"/>
            <div class="link"><a href="https://api.whatsapp.com/send?phone=6281383538907">Customer-Service 1 </a></div>
          </div>
          <div class="row">
            <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" class="cs2"/>
            <div class="link"><a href="https://api.whatsapp.com/send?phone=6281383538907">Customer-Service 2 </a></div>
          </div>
          <style>
            .cs1{
              width: 45px;
              height: 45px;
            }
            .cs2{
              width: 45px;
              height: 45px;
            }
          </style>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="home">
<div class="tengahh">
    <div class="">
        <p class="deskripsi">
        <h3 class="white-dark"><?php echo ambil_judul('8') ?></h3>
        <?php echo ambil_kutipan('8') ?>
        <br><br>
        <?php echo maximum_kata(ambil_isi('8'), 9) ?>
        </p>
        <p>
        <a href="<?php echo buat_link_halaman('8') ?>"  class="tbl-biru link-dark">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
        </svg></a>
        </p>
        <br>
    </div>
    <img src="<?php echo ambil_gambar('8') ?>" class="animate__animated animate__zoomIn" width="500"/>
    <br>
</div>
</section>

<!-- untuk courses -->
<section id="courses">
<div class="tengahh">
    <div class="">
      <br>
        <p class="deskripsi"><?php echo ambil_kutipan('19') ?></p>
        <h3 class="white-dark"><?php echo ambil_judul('19') ?></h3>
        <?php echo maximum_kata(ambil_isi('19'), 15) ?>
        <p>
            <br>
            <a href="<?php echo buat_link_halaman('19') ?>" class="tbl-biru link-dark">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
        </svg></a></p>
        <br>
    </div>
    <img src="<?php echo ambil_gambar('19') ?>" class="circle animate__animated animate__zoomIn" width="380"/>
</div>
</section>

<!-- untuk tutors -->
<section id="tutors">
    <div class="tengah">
        <div class="">
            <br>
            <p class="deskripsi">Our Top Tutors</p>
            <h3 class="white-dark">Tutors</h3>
            <p>Gbvr courses are supported by tutors who are experienced in programming!</p>
        </div>
        <div class="tutor-list">
            <?php
            $sql1       = "select * from tutors order by id asc";
            $q1         = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <div class="kartu-tutor animate__animated animate__zoomIn">
                    <a href="<?php echo buat_link_tutors($r1['id']) ?>" class="link-light">
                        <img src="<?php echo url_dasar() . "/gambar/" . tutors_foto($r1['id']) ?>" />
                        <p class="white-dark"><?php echo $r1['nama'] ?></p>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
   
</section>
<!-- <br><br><br> -->
<!-- untuk partners -->
<section id="partners">
    <div class="tengah">
        <div class="">
        <br><br><br>
            <p class="deskripsi">Our Top Partners</p>
            <h3 class="white-dark">Partners</h3>
            <p>we collaborate with various partners who are ready to accommodate Gbvr Courses graduates..</p>
        </div>
        <div class="partner-list">
            <?php
            $sql1   = "select * from partners order by id asc";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_assoc($q1)) {
            ?>
                <div class="kartu-partner animate__animated animate__zoomIn">
                    <a href="<?php echo buat_link_partners($r1['id'])?>">
                    <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>"/>
                    <p class="white-dark"><?php echo $r1['nama'] ?></p>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<br><br><br><br><br>
<br><br><br><br><br>
<br>
<?php include_once("inc_footer.php") ?>