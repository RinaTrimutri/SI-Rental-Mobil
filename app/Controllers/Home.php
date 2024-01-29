<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function baru()
    {
        echo ('saya bahagia');
    }
    public function baru1()
    {
        echo ('Rina Trimurti');
    }
    public function mhs()
    {
        return view('tabelmhs');
    }
    public function travel()
    {
        return view('viewsppd');
    }
    public function bay()
    {
        return view('pembayaran');
    }

public function bayar()
    {
        $bks = $this->request->getPost('bakso');
        $smy = $this->request->getPost('somay');
        $ma = $this->request->getPost('mieayam');
        $est = $this->request->getPost('est');
        $mbr = $this->request->getPost('member');
        $total = $this->request->getPost('total');
        echo "<br>";
        echo "<center>";
        echo "Form Pembayaran<br> ";
        echo "Bakso: $bks <br> ";
        echo "Somay : $smy<br>";
        echo "Mie Ayam : $ma<br>";
        echo "Es Teh : $est<br>";
        echo "Member : $mbr<br>";
        echo "Total : $total<br>";
        echo "</center>";
    }

    public function hitungbiaya()
    {
        $kode = $this->request->getPost('kode');
        $agenda = $this->request->getPost('agenda');
        $transportasi = $this->request->getPost('transportasi');
        $penginapan = $this->request->getPost('penginapan');
        $pokok = $this->request->getPost('pokok');
        $hasil = $this->request->getPost('total');
        
        echo "<center>";
        echo "Kode : $kode <br>";
        echo "Agenda : $agenda<br>";
        echo "Transportasi : $transportasi<br>";
        echo "Penginapan : $penginapan<br>";
        echo "Pokok : $pokok<br>";
        $hasil = ($transportasi) + ($penginapan)  + ($pokok) ; 
        echo $hasil;
        echo "</center>"; 
    }

    public function proses()
    {
        $nobp = $this->request->getPost('nobp');
        $nama = $this->request->getPost('name');
        $uts = $this->request->getPost('uts');
        $uas = $this->request->getPost('uas');
        $tugas = $this->request->getPost('tugas');
        echo "<center>";
        echo "NoBP : $nobp <br>";
        echo "Nama : $nama<br>";
        echo "UTS : $uts<br>";
        echo "UAS : $uas<br>";
        echo "Tugas : $tugas<br>";
        $hasil =( 0.3 * $uas) + (0.4 * $uts)  + (0.3*$tugas) ; 
        echo $hasil;
        echo "</center>";
    }

    public function simpan()
    {
        $db = \config\Database::connect();
        $data = [
            'kode' => $this->request->getPost('kode'),
            'agenda' => $this->request->getPost('agenda'),
            'btransportasi' => $this->request->getPost('transportasi'),
            'bpenginapan' => $this->request->getPost('penginapan'),
            'bpokok' => $this->request->getPost('pokok'),
            'total' => $this->request->getPost('total'),
        ];
        $simpan = $db->table('sppd')->insert($data);
        if ($simpan = TRUE) {
            echo "<script>
            alert('data berhasil disimpan');
            window.location='/home/tampil';
            </script>";
        } 
        else 
        {
          echo "<script>
          alert('data gagal disimpan');
          window.location='/home/sppd';
          </script>";
        }
    }

    function tampil()
    {
      $db = \Config\Database::connect();
      $builder = $db->table('sppd');
      $query = $builder->get();
      $data['sppdok'] = $query->getResultArray();
      return view('tampilsppd' , $data);
    }
}

   


