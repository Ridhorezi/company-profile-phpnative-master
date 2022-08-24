
// var tombolMenu = document.getElementsByClassName('tombol-menu')[0];
// var menu = document.getElementsByClassName('menu')[0];

// tombolMenu.onclick = function() {
//     menu.classList.toggle('active');
// }

// menu.onclick = function() {
//     menu.classList.toggle('active');
// }


$(document).ready(function(){

    $('.page-scroll').on('click', function(e){

        e.preventDefault();
        
        var tujuan = $(this).attr('href');
        
        var elemenTujuan = $(tujuan);
    
        $('html, body').animate({
            scrollTop: elemenTujuan.offset().top - 70
            
        }, 1800, 'swing');
        
    });
    
});


$(document).ready(function() {
    $('#show-password').click(function() {
        if ($(this).is(':checked')) {
            $('#password').attr('type', 'text');
        } else {
            $('#password').attr('type', 'password');
        }
    });
});


$(document).ready(function(){
    $(".alert-dismissible").fadeIn().delay(3000).fadeOut();
});


$(document).ready(function(){
    $(".preloader").fadeIn().delay(1000).fadeOut("slow");
  })











