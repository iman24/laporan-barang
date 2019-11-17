<?php


class Stok_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }


    function dataStockTerakhir(){
        $q = $this->db->query('SELECT b.nama_barang, b.kode_barang, s.stok_barang, s.kode_barang from barang b inner join stok_barang s on b.kode_barang = s.kode_barang');
        return $q->result();
    }

	function data_barang(){
        // kode_barang, nama_barang
        $q = $this->db->get('barang');
        return $q->result();
        
    }

	function tambah_barang($kode, $nama){
        if($this->db->insert('barang', array('nama_barang'=>$nama, 'kode_barang'=>$kode)))
        return true;

        return false;
    }

	function cek_adabarang($kode){
        
        $cek_kode = $this->db->query('select * from barang where kode_barang="'.$kode.'"');
        if ($cek_kode->num_rows() > 0)
        return true;

        return false;
           
    }

    	function hapus_barang($id){
            return $this->db->delete('barang', array('kode_barang' => $id));
        }
}