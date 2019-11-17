<?php 
$this->load->view('header');
?>
 <!-- Main content -->
 <section class="content">
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
                  <th>Sisa stok</th>
                </tr>
                </thead>

                <tbody id="data-barang">
                
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                  <th>Kode barang</th>
                  <th>Nama Barang</th>
                  <th>Sisa stok</th>
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
   
<?php 
$this->load->view('footer');
?>