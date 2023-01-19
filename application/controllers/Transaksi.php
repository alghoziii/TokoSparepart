<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_transaksi');
    }

    public function index()
    {
        $data['transaksi'] = $this->M_transaksi->tampil_data()->result();

        $this->load->view('v_header');
        // $this->load->view('barang/v_barang', $data);
        $this->load->view('transaksi/v_transaksi', $data);
    }


    public function tambah()
    {
        $this->load->view('v_header');
        $this->load->view('transaksi/v_tambah');
    }

    public function tambah_aksi()
    {
        $nama_barang = $this->input->post('nama_barang');
        $id_barang = $this->input->post('id_barang');
        $harga_satuan = $this->input->post('harga_satuan');
        $jumlah = $this->input->post('jumlah');


        //rule validasi
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('id_barang', 'No Barang', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');

        if ($this->form_validation->run() != FALSE) {

            $data = array(
                'nama_barang' => $nama_barang,
                'id_barang' => $id_barang,
                'harga_satuan' => $harga_satuan,
                'jumlah' => $jumlah

            );

            $this->M_transaksi->simpan_data($data);

            redirect('transaksi');
        } else {
            $this->load->view('v_header');
            $this->load->view('transaksi/v_tambah');
        }
    }
    //

    public function hapus($id)
    {
        $where = array('id_transaksi' => $id);
        $this->M_transaksi->hapus_data($where);
        redirect('transaksi');
    }
}
