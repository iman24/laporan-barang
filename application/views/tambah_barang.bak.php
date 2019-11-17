<?php
$this->load->view('header'); 
?>


<!-- Main content -->
<section class="content">
  <div class="row mb-3">
    <div class="col-6">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-barang">
        Tambah data barang
      </button>
    </div>
  </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" width="100%" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th> 
                <th>Aksi</th>
                 </tr>
                </thead>

                <tbody>
                <?php
                $i=1;
                foreach($barang as $anu):
                ?>
                <tr>
                    <td><?= $i; ?></td>
                  <td><?= $anu->kode_barang; ?></td>
                  <td><?= $anu->nama_barang; ?></td>
                  <td><button data-toggle="modal" data-target="#edit-barang" data-edit="<?= $anu->kode_barang; ?>" class="btn btn-primary edit-barang">Edit</button> <button id="hapus" data-kode="<?= $anu->kode_barang; ?>" class="btn btn-danger hapus-barang">Hapus</button></td>
                </tr>
                <?php 
                $i++;
                endforeach;
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                  <th>Kode barang</th>
                  <th>Nama Barang</th>
                  <th>Aksi</th>

                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>


  <!-- Modal tambah barang-->
  <div class="modal fade" id="tambah-barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          

          <form id="formtambahbarang">
              <div class="form-group">
                <label for="formGroupExampleInput">Kode Barang</label>
                <input type="text" class="form-control" id="kodebarang" placeholder="masukkan kode barang">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Nama barang</label>
                <input type="text" class="form-control" id="namabarang" placeholder="masukkan nama barang">
              </div>
            </div>



            <div class="modal-footer">
              <input type="reset" class="btn btn-success" value="Reset">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              <button type="button" onclick="tambah_barang()" class="btn btn-primary" data-dismiss="modal">Simpan data</button>
            </div>
          </form> <!--form-->
        </div>
      </div>
    </div>
  </div>


<!-- Modal edit barang-->
<div class="modal fade" id="edit-barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          

          <form id="formeditbarang">
              <div class="form-group">
                <label for="formGroupExampleInput">Kode Barang</label>
                <input type="text" class="form-control" id="edit-kode-barang" placeholder="masukkan kode barang">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Nama barang</label>
                <input type="text" class="form-control" id="edit-nama-barang" placeholder="masukkan nama barang">
              </div>
            </div>



            <div class="modal-footer">
              <input type="reset" class="btn btn-success" value="Reset">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              <button type="button" onclick="edit_barang()" class="btn btn-primary" data-dismiss="modal">Update data</button>
            </div>
          </form> <!--form-->
        </div>
      </div>
    </div>
  </div>



<?php
$this->load->view('footer'); 
?>