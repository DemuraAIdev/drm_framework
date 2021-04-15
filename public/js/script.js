$(function() {
    $('.tambahuser').on('click', function() {
        $('#judulmodal').html('Tambah User');
        $('.modal-footer button[type=submit]').html('Tambah User');
    });

    $('.tampilmodaledit').on('click', function() {
        $('#judulmodal').html('Edit User');
        $('.modal-footer button[type=submit]').html('Edit User');
    });
});



console.log('DRM FRAMWORK 1.0.2');