<?php

class M_transaksi extends CI_Model
{

    function tampil_data()
    {
        return $this->db->get('transaksi');
    }

    function simpan_data($data)
    {
        $this->db->insert('transaksi', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('transaksi', $where);
    }

    function update_data($where, $data)
    {
        $this->db->where($where);
        $this->db->update('transaksi', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('transaksi', $where);
    }
}
