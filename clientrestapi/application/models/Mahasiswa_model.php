<?php 
use GuzzleHttp\Client;
class Mahasiswa_model extends CI_model {

    private $_client;
    
    public function __construct(){

        $this->_client = new Client([
            'base_uri' =>'http://localhost/edukasi/restapi/api/',
            'auth' => ['dani', '1234']

        ]);
    }

    public function getAllMahasiswa()
    {
        /*
        ======untuk koneksi database======================
         return $this->db->get('mahasiswa')->result_array();
        ^^^^^^untuk koneksi database^^^^^^^^^^^^^^^^^^^^^^^
        */
        $response = $this->_client->request('GET', 'mahasiswa', [  
            'query' => [
                'dinall-api-key' => 'rahasia'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        // var_dump($result);
        return $result['data'];

    }

    public function getMahasiswaById($id)
    {
        /*
        ======untuk koneksi database======================
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
        ^^^^^^untuk koneksi database^^^^^^^^^^^^^^^^^^^^^^^
        */
        $client = new Client();
        $response = $this->_client->request('GET', 'mahasiswa', [  
            'query' => [
                'dinall-api-key' => 'rahasia',
                'id'=> $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        // var_dump($result);
        return $result['data'][0];
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
            'dinall-api-key' => 'rahasia'
        ];

        /*
        ======untuk koneksi database======================
        // $this->db->insert('mahasiswa', $data);        
        ^^^^^^untuk koneksi database^^^^^^^^^^^^^^^^^^^^^^^
        */
        $response = $this->_client->request('POST', 'mahasiswa', [
            'form_params' => $data

        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataMahasiswa($id)
    {
        /*
        ======untuk koneksi database======================
         // $this->db->where('id', $id);
        // $this->db->delete('mahasiswa', ['id' => $id]);       
        ^^^^^^untuk koneksi database^^^^^^^^^^^^^^^^^^^^^^^
        */

        $response= $this->_client->request('DELETE', 'mahasiswa', [
                'form_params' => [
                    'id'=> $id,
                    'dinall-api-key' => 'rahasia'
                ]

        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
        
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
            "id" => $this->input->post('id', true),
            'dinall-api-key' => 'rahasia'

        ];

        /*
        ======untuk koneksi database======================
        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);
        ^^^^^^untuk koneksi database^^^^^^^^^^^^^^^^^^^^^^^
        */

        $response = $this->_client->request('PUT', 'mahasiswa', [
            'form_params' => $data

        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;

    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();

        // PR untuk cari data menggunakan clientrestapi
    }
}