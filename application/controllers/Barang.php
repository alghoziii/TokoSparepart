<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang');
    }

    public function index()
    {
        $data['barang'] = $this->m_barang->tampil_data()->result();

        $this->load->view('v_header');
        $this->load->view('barang/v_barang', $data);
    }

    public function tambah()
    {
        $this->load->view('v_header');
        $this->load->view('barang/v_tambah');
    }

    public function tambah_aksi()
    {
        $id_barang = $this->input->post('id_barang');
        $nama_barang = $this->input->post('nama_barang');
        $satuan = $this->input->post('satuan');
        $stok = $this->input->post('stok');
        $harga_satuan = $this->input->post('harga_satuan');

        //rule validasi
        $this->form_validation->set_rules('id_barang', 'id Barang', 'numeric|required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('stok', 'Stok Barang', 'numeric|required');

        if ($this->form_validation->run() != FALSE) {

            $data = array(
                'id_barang' => $id_barang,
                'nama_barang' => $nama_barang,
                'satuan' => $satuan,
                'stok' => $stok,
                'harga_satuan' => $harga_satuan
            );

            $this->m_barang->simpan_data($data);

            redirect('barang');
        } else {
            $this->load->view('v_header');
            $this->load->view('barang/v_tambah');
        }
    }

    public function edit($id_barang)
    {

        $where = array('id_barang' => $id_barang);
        $data['barang'] = $this->m_barang->edit_data($where)->result();
        $this->load->view('v_header');
        $this->load->view('barang/v_edit', $data);
    }

    public function edit_aksi()
    {
        $id = $this->input->post('id');
        $id_barang = $this->input->post('id_barang');
        $nama_barang = $this->input->post('nama_barang');
        $satuan = $this->input->post('satuan');
        $stok = $this->input->post('stok');
        $harga_satuan = $this->input->post('harga_satuan');

        $data = array(
            'id_barang' => $id_barang,
            'nama_barang' => $nama_barang,
            'satuan' => $satuan,
            'stok' => $stok,
            'harga_satuan' => $harga_satuan
        );

        $where = array('id_barang' => $id);

        $this->m_barang->update_data($where, $data);

        redirect('barang');
    }

    public function hapus($id)
    {
        $where = array('id_barang' => $id);
        $this->m_barang->hapus_data($where);
        redirect('barang');
    }
}
