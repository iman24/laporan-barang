<?php 


class Dashboard extends CI_Controller {

    	function __construct(){
                parent::__construct();
                $this->load->model('stok_model','stok');
        }

	function index(){
                $this->load->view('dashboard');
        }
	function stok(){
                // $dt['stok'] = $this->stok->dataStockTerakhir();
              //  $dt['access'] = $this->session->access;
               // $this->load->view('dashboard', $dt);             
                echo json_encode($this->stok->dataStockTerakhir());
        }

        function tambah(){
               // $dt['access'] = $this->session->access;
                // $dt['barang'] = $this->stok->data_barang();
                print(json_encode($this->stok->data_barang()));
                //      $this->load->view('tambah_barang', $dt);
        }

	function tamba(){
                $this->load->view('tambah_barang');
        }

	function tambah_barang(){
                // var_dump($_POST);
                // exit;
                
                if(!isset($_POST)){
                echo 'failed';
                exit;
                }
        
                $kode = $this->input->post('kode-barang');
                $nama = $this->input->post('nama-barang');

                if($this->stok->cek_adabarang($kode)){
                        echo 'exist';
                }else{
                        if($this->stok->tambah_barang($kode, $nama))
                                echo 'success';
                        else
                                echo 'failed';
                }
                
        }



	function hapus_barang($id){
                if(empty(id))
                die('taik');

                if($this->stok->hapus_barang($id))
                echo "success";
                else
                echo "failed";

        }
}


?>