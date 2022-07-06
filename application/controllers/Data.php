<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Data extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Data_model', 'data');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $hasil = $this->data->getData();
    $result['value'] = $hasil['data'];
    $this->load->view('Home', $result);
  }

  public function delete($id)
  {
    $this->data->deleteData($id);
    redirect(base_url('Data'), 'refresh');
  }

  public function update($id)
  {
    $data['mahasiswa'] = $this->data->getDatabyId($id);

    $this->form_validation->set_rules('nama', 'nim', 'required');
    $this->form_validation->set_rules('nim', 'nim', 'required|numeric');
    $this->form_validation->set_rules('instansi', 'instansi', 'required');


    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('form_ubah', $data);
        $this->load->view('templates/footer');
    } else {
        $this->data->updateData();
        $this->session->set_flashdata('flash', 'Diubah');
        redirect(base_url('Data'), 'refresh');
    }
    
    
  }
  public function add()
  {
    $data['judul'] = 'Form Tambah Data';

    $this->form_validation->set_rules('nama', 'nim', 'required');
    $this->form_validation->set_rules('nim', 'nim', 'required|numeric');
    $this->form_validation->set_rules('instansi', 'instansi', 'required');

    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('form');
        $this->load->view('templates/footer');
    } else {
        $this->data->addData();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect(base_url('Data'), 'refresh');
    }
  }
}


/* End of file Data.php */
/* Location: ./application/controllers/Data.php */