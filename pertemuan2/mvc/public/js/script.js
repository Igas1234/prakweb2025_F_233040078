$(function(){

    $('.tombolTambahData').on('click', function(){
       $('#formmodallabel').html('Tambah Data Mahasiswa');
               $('.modal-footer button[type=submit]').html('tambah Data');

    });
    
    $('.editubah').on('click', function(){
    $('#formmodallabel').html('ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');

        $.ajax({
url: 'http://localhost/pw/prakweb2025/pertemuan2/mvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                    console.log('Data dari server:', data);
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });


    });

});