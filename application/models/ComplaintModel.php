<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComplaintModel extends CI_Model{

    public function get($id = null)
    {
        if ($id !== null) {
            $this->db->where('id', $id);
        }
        $this->db->where('aktif', 0);
        $this->db->where('status', 0);
        return $this->db->get('complaint');
    }

    public function get_join()
    {
        $this->db->select('complaint.*, follup.diselesaikan, follup.solusi, teknisi.nama');
        $this->db->from('complaint');
        $this->db->join('follup', 'complaint.id = follup.complaint');
        $this->db->join('teknisi', 'follup.teknisi = teknisi.id');
        return $this->db->get();
    }

    public function gets($id = null)
    {
        if ($id !== null) {
            $this->db->where('id', $id);
        }
        return $this->db->get('complaint');
    }

    public function save($complaint)
    {
        $this->db->insert('complaint', $complaint);
    }

    public function edit($complaint)
    {
        $this->db->set('tanggal', $complaint['tanggal']);
        $this->db->set('toko', $complaint['toko']);
        $this->db->set('keluhan', $complaint['keluhan']);
        $this->db->set('catatan', $complaint['catatan']);
        $this->db->where('id', $complaint['id']);
        $this->db->update('complaint');
    }

    public function hapus($id)
    {
        $this->db->set('aktif', 1);
        $this->db->where('id', $id);
        $this->db->update('complaint');
    }

    public function selesai($id)
    {
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        $this->db->update('complaint');
    }
}