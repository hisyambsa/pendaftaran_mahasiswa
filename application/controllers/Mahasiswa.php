<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
<!-- .................................. -->
<!-- ...........COPYRIGHT ............. -->
<!-- Authors : Hisyam Husein .......... -->
<!-- Email : hisyam.husein@gmail.com .. -->
<!-- About : hisyam.ismul.com ......... -->
<!-- Instagram : @hisyambsa............ -->
<!-- .................................. -->
*/

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }

        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'mahasiswa/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'mahasiswa/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'mahasiswa/index.html';
            $config['first_url'] = base_url() . 'mahasiswa/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Mahasiswa_model->total_rows($q);
        $mahasiswa = $this->Mahasiswa_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'mahasiswa_data' => $mahasiswa,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('mahasiswa/mahasiswa_list', $data);
        $this->load->view('inc/function-js', $data);
    }

    public function read($id)
    {
        $row = $this->Mahasiswa_model->get_by_id($id);
        if ($row) {
            $data = array(
                'ID' => $row->ID,
                'nama_lengkap' => $row->nama_lengkap,
                'tempat_lahir' => $row->tempat_lahir,
                'tanggal_lahir' => $row->tanggal_lahir,
                'alamat' => $row->alamat,
                'kota' => $row->kota,
                'negara' => $row->negara,
                'kode_pos' => $row->kode_pos,
                'no_hp' => $row->no_hp,
                'email' => $row->email,
                'tinggi_badan' => $row->tinggi_badan,
                'berat_badan' => $row->berat_badan,
            );
            $this->load->view('mahasiswa/mahasiswa_read', $data);
        } else {
            $this->session->set_flashdata('pesan', 'Data tidak ditemukan');
            redirect(site_url('mahasiswa'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Buat',
            'action' => site_url('mahasiswa/create_action'),
            'ID' => set_value('ID'),
            'nama_lengkap' => set_value('nama_lengkap'),
            'tempat_lahir' => set_value('tempat_lahir'),
            'tanggal_lahir' => set_value('tanggal_lahir'),
            'alamat' => set_value('alamat'),
            'kota' => set_value('kota'),
            'negara' => set_value('negara'),
            'kode_pos' => set_value('kode_pos'),
            'no_hp' => set_value('no_hp'),
            'email' => set_value('email'),
            'tinggi_badan' => set_value('tinggi_badan'),
            'berat_badan' => set_value('berat_badan'),
        );
        $this->load->view('mahasiswa/mahasiswa_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap', TRUE),
                'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'kota' => $this->input->post('kota', TRUE),
                'negara' => $this->input->post('negara', TRUE),
                'kode_pos' => $this->input->post('kode_pos', TRUE),
                'no_hp' => $this->input->post('no_hp', TRUE),
                'email' => $this->input->post('email', TRUE),
                'tinggi_badan' => $this->input->post('tinggi_badan', TRUE),
                'berat_badan' => $this->input->post('berat_badan', TRUE),
            );

            $this->Mahasiswa_model->insert($data);
            $this->session->set_flashdata('pesan', 'Berhasil melakukan Pendaftaran');
            redirect(site_url('beranda'));
        }
    }

    public function update($id)
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('mahasiswa/update_action'),
                'ID' => set_value('ID', $row->ID),
                'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
                'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
                'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
                'alamat' => set_value('alamat', $row->alamat),
                'kota' => set_value('kota', $row->kota),
                'negara' => set_value('negara', $row->negara),
                'kode_pos' => set_value('kode_pos', $row->kode_pos),
                'no_hp' => set_value('no_hp', $row->no_hp),
                'email' => set_value('email', $row->email),
                'tinggi_badan' => set_value('tinggi_badan', $row->tinggi_badan),
                'berat_badan' => set_value('berat_badan', $row->berat_badan),
            );
            $this->load->view('mahasiswa/mahasiswa_form', $data);
        } else {
            $this->session->set_flashdata('pesan', 'Data tidak ditemukan');
            redirect(site_url('mahasiswa'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap', TRUE),
                'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'kota' => $this->input->post('kota', TRUE),
                'negara' => $this->input->post('negara', TRUE),
                'kode_pos' => $this->input->post('kode_pos', TRUE),
                'no_hp' => $this->input->post('no_hp', TRUE),
                'email' => $this->input->post('email', TRUE),
                'tinggi_badan' => $this->input->post('tinggi_badan', TRUE),
                'berat_badan' => $this->input->post('berat_badan', TRUE),
            );

            $this->Mahasiswa_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('pesan', 'Berhasil Ubah Data');
            redirect(site_url('mahasiswa'));
        }
    }

    public function delete($id)
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $this->Mahasiswa_model->delete($id);
            $this->session->set_flashdata('pesan', 'Berhasil Hapus Data');
            redirect(site_url('mahasiswa'));
        } else {
            $this->session->set_flashdata('pesan', 'Data tidak ditemukan');
            redirect(site_url('mahasiswa'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('kota', 'kota', 'trim|required');
        $this->form_validation->set_rules('negara', 'negara', 'trim|required');
        $this->form_validation->set_rules('kode_pos', 'kode pos', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('tinggi_badan', 'tinggi badan', 'trim|required');
        $this->form_validation->set_rules('berat_badan', 'berat badan', 'trim|required');

        $this->form_validation->set_rules('ID', 'ID', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */
/* Please DO NOT modify this information : */
/* Generated by HISYAM 2020-07-14 01:52:08 */
/* http://hisyam.ismul.com */