<?php
class Guru_model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('tb_guru')->result();
    }

    public function get_count()
    {
        return $this->db->get('tb_guru')->num_rows();
    }

    public function get_data_only_name()
    {
        $this->db->select('nama');
        return $this->db->get('tb_guru')->result();
    }

    public function get_detail_data($id)
    {
        return $this->db->get_where('tb_guru', ['id_guru' => $id])->row_array();
    }

    public function input_data()
    {
        $data = array(
            'nip'           => $this->input->post('nip', TRUE),
            'nama'          => $this->input->post('nama', TRUE),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'no_hp'         => $this->input->post('no_hp', TRUE),
            'email'         => $this->input->post('email', TRUE),
            'alamat'        => $this->input->post('alamat', TRUE)
        );

        $this->db->insert('tb_guru', $data);
    }

    public function edit_data($id)
    {
        $data = array(
            'nip'       => $this->input->post('nip', TRUE),
            'nama'      => $this->input->post('nama', TRUE),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'no_hp'     => $this->input->post('no_hp', TRUE),
            'email'     => $this->input->post('email', TRUE),
            'alamat'    => $this->input->post('alamat', TRUE)
        );

        $this->db->where('id_guru', $id);
        $this->db->update('tb_guru', $data);
    }

    public function delete_data($id)
    {
        $this->db->delete('tb_guru', ['id_guru' => $id]);
    }

    var $column_order = array(null, 'nip', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'no_hp', 'email', 'alamat'); //Sesuaikan dengan field
    var $column_search = array('nama', 'no_hp', 'email', 'alamat'); //field yang diizin untuk pencarian 
    var $order = array('nama' => 'asc'); // default order 

    private function _get_datatables_query()
    {

        $this->db->from('tb_guru');

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from('tb_guru');
        return $this->db->count_all_results();
    }
}
