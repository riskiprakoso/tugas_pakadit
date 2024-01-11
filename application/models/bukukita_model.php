<?php
class bukukita_model extends CI_Model {
    
    public function getAllbuku() {
        return $this->db->get('detailbuku')->result_array();
    }

    public function tambahDataBuku()
    {
        $data = [
            "Judul_Buku" => $this->input->post('judulbuku', true),
            "Penerbit_Buku" => $this->input->post('penerbitbuku', true),
            "Genre_Buku" => $this->input->post('genrebuku', true),
            "Harga_Buku" => $this->input->post('hargabuku', true)
        ];

        $this->db->insert('detailbuku', $data);
    }

    public function hapusDataBuku($No)
    {
        //$this->db->where('No', $id);
        $this->db->delete('detailbuku', ['No' => $No]);
    }

    public function gettokobukuById($No)
    {
        return $this->db->get_where('detailbuku', ['No' => $No])->row_array();
    }

    public function ubahDataBuku()
    {
        $data = [
            "Judul_Buku" => $this->input->post('judulbuku', true),
            "Penerbit_Buku" => $this->input->post('penerbitbuku', true),
            "Genre_Buku" => $this->input->post('genrebuku', true),
            "Harga_Buku" => $this->input->post('hargabuku', true)
        ];
        $this->db->where('No', $this->input->post('No'));
        $this->db->update('detailbuku', $data);
    }

    public function cariDataBuku()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('Judul_Buku', $keyword);
        $this->db->or_like('Genre_Buku', $keyword);
        $this->db->or_like('Penerbit_Buku', $keyword);
        $this->db->or_like('Harga_Buku', $keyword);
        return $this->db->get('detailbuku')->result_array();
    }
}
