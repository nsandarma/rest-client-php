<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Data_model extends CI_Model
{

  private $_client;
  public function __construct()
  {
    $this->_client = new Client([
      'base_uri' => 'http://localhost/service/api/',
    ]);
  }

  public function getData()
  {
    $response = $this->_client->request('GET', 'data',[
      'query' => [
        'key' => 'coba123',
      ]
    ]);
    $result = json_decode($response->getBody()->getContents(), true);
    return $result;
  }
  public function getDatabyId($id)
  {
    $response = $this->_client->request('GET', 'data', [
      'query' => [
        'key' => 'coba123',
        'no' => $id
      ]
    ]);
    $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'][0];
  }
  
  public function deleteData($id)
  {
    $response = $this->_client->request('DELETE', 'data', [
      'form_params' => [
        'no' => $id,
        'key' => 'coba123'
      ]
    ]);
    $result = json_decode($response->getBody()->getContents(), true);
    return $result;
  }
  public function updateData()
  {
    $data = [
      "nama" => $this->input->post('nama', true),
      "nim" => $this->input->post('nim', true),
      "instansi" => $this->input->post('instansi', true),
      "hasil_kerja" => $this->input->post('hasil_kerja', true),
      'no' => $this->input->post('no', true),
      'key' => 'coba123'
    ];
    $response = $this->_client->request('PUT', 'data', [
      'form_params' => $data
      
    ]);
    $result = json_decode($response->getBody()->getContents(), true);
    return $result;
  }
  public function addData()
  {
    $data = [
      "nama" => $this->input->post('nama', true),
      "nim" => $this->input->post('nim', true),
      "instansi" => $this->input->post('instansi', true),
      "hasil_kerja" => $this->input->post('hasil_kerja', true),
      'key' => 'coba123'
    ];
    $response = $this->_client->request('POST', 'data', [
      'form_params' => $data
    ]);
    $result = json_decode($response->getBody()->getContents(), true);
    return $result;
  }
}

/* End of file Data_model.php */
/* Location: ./application/models/Data_model.php */