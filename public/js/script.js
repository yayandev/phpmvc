$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#umur').val('');
        $('#alamat').val('');
    });

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: { id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#umur').val(data.umur);
                $('#alamat').val(data.alamat);
            }
        });
    });
});