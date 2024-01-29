<?php

namespace App\Controllers;

class Quiz extends BaseController
{
    public function entri()
    {
        return view('entriquiz');
    }
    public function index(): string
    {
        return view('welcome_message');
    }

    public function simpan()
    {
        $db = \config\Database::connect();
        $data = [
            'kode' => $this->request->getPost('kode'),
            'jenis' => $this->request->getPost('jenis'),
            'hsemua' => $this->request->getPost('hsemua'),
            'jbeli' => $this->request->getPost('jbeli'),
            'hsatuan' => $this->request->getPost('hsatuan'),
        ];
        $simpan = $db->table('sepeda')->insert($data);
        if ($simpan = TRUE) {
            echo "<script>
            alert('data berhasil disimpan');
            window.location='/Quiz/tampil';
            </script>";
        } 
        else 
        {
          echo "<script>
          alert('data gagal disimpan');
          window.location='/Quiz/sepeda';
          </script>";
        }
    }

    function tampil()
    {
      $db = \Config\Database::connect();
      $builder = $db->table('sepeda');
      $query = $builder->get();
      $data['sppdok'] = $query->getResultArray();
      return view('tampilquiz' , $data);
    }
}