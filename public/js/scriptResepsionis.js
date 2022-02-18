$(function() {
    $('.tombolTambahData').on('click', function () {
        $('#formModalLabel').html('Tambah Pemesanan')
        $('.modal-footer button[type=submit]').html('Tambah Data')
    })
    
    $('.tampilModalUbah').on('click', function () {
        $('#formModalLabel').html('Ubah Pemesanan')
        $('.modal-footer button[type=submit]').html('Ubah Data')
        $('.modal-body form').attr('action', 'http://localhost/hotel_reservation/public/resepsionis/ubah')

        const id = $(this).data('id')

        $.ajax({
            url: 'http://localhost/hotel_reservation/public/resepsionis/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama-pemesanan').val(data.nama_pemesan)
                $('#email').val(data.email)
                $('#no-hp').val(data.phone)
                $('#nama-tamu').val(data.nama_tamu)
                $('#tipe-kamar').val(data.tipe_fasilitas)
                $('#check-in').val(data.check_in)
                $('#check-out').val(data.check_out)
                $('#jumlah-kamar').val(data.total_kamar)
                $('#status-pemesanan').val(data.status_pemesanan)
                $('#id').val(data.id)
            }
        });
        
    })
})