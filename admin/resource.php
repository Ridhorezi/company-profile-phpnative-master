<?php 
include_once("../inc/inc_fungsi.php");
include_once("../inc/inc_koneksi.php");
?>
    <link rel="stylesheet" href="../app/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../app/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../app/assets/css/style.css">
    <link rel="shortcut icon" href="../app/assets/images/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="../css/summernote-image-list.min.css">
    <!-- <script src="../app/assets/js/chart.js"></script> -->
    <script src="../app/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../app/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../app/assets/js/off-canvas.js"></script>
    <script src="../app/assets/js/hoverable-collapse.js"></script>
    <script src="../app/assets/js/misc.js"></script>
    <!-- <script src="../app/assets/js/dashboard.js"></script> -->
    <script src="../app/assets/js/todolist.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <script src="../js/summernote-image-list.min.js"></script>
    <script>
     $(document).ready(function() {
        $('#summernote').summernote({
            callbacks: {
                onImageUpload: function(files) {
                    for (let i = 0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                }
            },
            height: 200,
            toolbar: [
                ["style", ["bold", "italic", "underline", "clear"]],
                ["fontname", ["fontname"]],
                ["fontsize", ["fontsize"]],
                ["color", ["color"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["height", ["height"]],
                ["insert", ["link", "picture", "imageList", "video", "hr"]],
                ["help", ["help"]]
            ],
            dialogsInBody: true,
            imageList: {
                endpoint: "daftar_gambar.php",
                fullUrlPrefix: "/gambar/",
                thumbUrlPrefix: "/gambar/"
            }
        });

        $.upload = function(file) {
            let out = new FormData();
            out.append('file', file, file.name);

            $.ajax({
                method: 'POST',
                url: 'upload_gambar.php',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function(img) {
                    $('#summernote').summernote('insertImage', img);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                } 
            });
        };
    });

    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
 </script>
 