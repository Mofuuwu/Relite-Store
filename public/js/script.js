
$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Item');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#id_game').val('');
        $('#nama_game').val('');
        $('#nama_item').val('');
        $('#harga_awal').val('');
        $('#promo').val('');
        $('#tipe_item').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Item');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/relitestore/public/admin');

        const id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: 'http://localhost/relitestore/public/admin/getubah',
            data: {id_item : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id_game').val(data.id_game);
                $('#nama_game').val(data.nama_game);
                $('#nama_item').val(data.nama_item);
                $('#harga_awal').val(data.harga_awal);
                $('#promo').val(data.promo);
                $('#tipe_item').val(data.tipe_item);
            }
        });
        
    });

});