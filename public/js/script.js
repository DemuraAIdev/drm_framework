$(function() {
    $('.tambahuser').on('click', function() {
        $('#judulmodal').html('Tambah User');
        $('.modal-footer button[type=submit]').html('Tambah User');
    });

    $('.tampilmodaledit').on('click', function() {
        $('#judulmodal').html('Edit User');
        $('.modal-footer button[type=submit]').html('Edit User');
        $('.modal-body form').attr('action', url + 'absen/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: url + 'absen/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama)
                $('#no').val(data.no)
                $('#email').val(data.email)
                $('#id').val(data.id)
            }
        });
    });
});


console.log('DRM FRAMWORK ' + ver);