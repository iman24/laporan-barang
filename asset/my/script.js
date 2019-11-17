
  $(function() {
    $('#example1').DataTable({
      "columnDefs": [
    { "width": "5%", "targets": 0 },
    { "width": "10%", "targets": 1 }
  
  ]
    });
  
  });

  

  function data_init(){
  $.getJSON("/dashboard/tambah", function(result){
    var data = new String();
    $.each(result, function(i, field){
      // $("div").append(field + " ");
      data += `<tr>
      <td>`+ i +`</td>
    <td>`+ field.kode_barang +`</td>
    <td>`+ field.nama_barang +`</td>
    <td><button data-toggle="modal" data-target="#edit-barang" data-edit="`+ field.kode_barang+`" class="btn btn-primary edit-barang">Edit</button> <button id="hapus" data-kode="`+ field.kode_barang +`" class="btn btn-danger hapus-barang">Hapus</button></td>
  </tr>`;
    });
  console.log("receive: ajax data");
  $("#data-barang").html(data);

  });
  console.log('end ajax');
}
  




  function tambah_barang(kode,nama){
    var kode = $("#kodebarang").val();
    var nama = $("#namabarang").val();

    if (kode == '' && nama == ''){
      Swal.fire({
        title: 'Upsss',
        text: 'Data tidak boleh kosong!',
        type: 'error'
      }).then(function(){
       // location.reload();
      });
      return false;
    }


    

    function ajax_tambah_barang(){
    $.post("/dashboard/tambah_barang", {"kode-barang": kode, "nama-barang": nama},
    function(result){
  
      if(result == 'success'){
        Swal.fire({
          title: 'Mantapp!',
          text: 'Data berhasil disimpan!',
          type: 'success'
        }).then(function(){
          //location.reload();
        })
      }else if(result == 'exist'){
        Swal.fire({
          title: 'Oopppsss!',
          text: 'kode barang sudah ada!',
          type: 'warning'
        }).then(function(){
          //location.reload();
        })
      }else if(result == 'failed'){
        Swal.fire({
          title: 'Upsss!',
          text: 'Data gagal disimpan!',
          type: 'error'
        }).then(function(){
          //location.reload();
        })
      }
    }
    );
  }
}


  function edit_barang(kode,nama){
    var kode = $("#edit-kode-barang").val();
    var nama = $("#edit-nama-barang").val();

    if (kode == '' || nama == ''){
      Swal.fire({
        title: 'Upsss',
        text: 'Data tidak boleh kosong!',
        type: 'error'
      });
      // .then(function(){
      //   location.reload();
      // });
       return false;
    }

    // console.log("post data");
    // $.post("/dashboard/tambah_barang", {"kode-barang": kode, "nama-barang": nama},
    // function(result){
  
    //   if(result == 'success'){
    //     Swal.fire({
    //       title: 'Mantapp!',
    //       text: 'Data berhasil disimpan!',
    //       type: 'success'
    //     }).then(function(){
    //       location.reload();
    //     })
    //   }else if(result == 'exist'){
    //     Swal.fire({
    //       title: 'Oopppsss!',
    //       text: 'kode barang sudah ada!',
    //       type: 'warning'
    //     }).then(function(){
    //       location.reload();
    //     })
    //   }else if(result == 'failed'){
    //     Swal.fire({
    //       title: 'Upsss!',
    //       text: 'Data gagal disimpan!',
    //       type: 'error'
    //     }).then(function(){
    //       location.reload();
    //     })
    //   }
    // }
    // );
  }


  
  $('#tambah-barang').on('shown.bs.modal', function () {
    $("#formtambahbarang")[0].reset();
    $('#kodebarang').focus();
 });




 $('.hapus-barang').bind('click', function() {
   var kode = $(this).data('kode');
  Swal.fire({
    title: 'Hapuss',
    text: 'Yakin mau di hapus!' + kode,
    type: 'question'
  }).then(function(){
    // ajax call
  //  location.reload();
  });
});





$('#edit-barang').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var kode = button.data('edit'); // Extract info from data-* attributes
  // // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  // modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('#edit-kode-barang').val(kode);
});



