<?php

namespace App\Controllers;
use App\Models\M_model;
use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
public function index() 
{
 if (!session()->get('id_user') > 0) {
 return redirect()->to('/Home/login');
 }
 $model =new M_model;
 // $data['user']=$model->tampil('user');
 // $data['rombel']=$model->tampil('rombel');
 // $data['bagus']=$model->getWhere('pencatatan',array('keterangan'=>'sangat baik'));
 // $data['buruk']=$model->getWhere('pencatatan',array('keterangan'=>'sangat buruk'));

echo view ('header');
echo view ('navbar');
echo view ('index');
echo view ('dashboard');
echo view ('footer');


}

 public function login()
    { 

        if (session()->get('id_user') > 0) {
             return redirect()->to('/Home');
         }
       echo view('header');
       echo view('login');
       echo view('footer');        

    }
    public function aksi_login()
    {
        $u=$this->request->getPost('u');
        $p=$this->request->getPost('p');
        $where=array(
            'username'=>$u,
            'password'=>md5($p)
        );
        $model = new M_model();
        $kui=$model->getarray('user',$where);

        if ($kui>0) {
            session()->set('id_user',$kui['id_user']);
            session()->set('username',$kui['username']);
            session()->set('level',$kui['level']);
            return redirect()->to('/home');
        }else{
            return redirect()->to('Home/login');
        }
    }  


 public function keluar()
    {
        session()->destroy();
        return redirect()->to('Home/login');
    }

    // ======================================== U S E R ====================================== //
    public function user()
    {
    $level=session()->get('level');
    if ($level == 1 || $level == 2) {
    $model=new M_model();
    $kui['gas']=$model->tampil('user');
    echo view('header');
    echo view('navbar');
    echo view('user',$kui);
    echo view('footer');
    }else{
    return redirect()->to('Home/login');
}
    }
    public function tambah_user()
    {
        $level=session()->get('level');
if ($level == 1 || $level == 2) {
        $model=new M_model();
        $kui['sakas']=$model->tampil('user');
        echo view('header');
        echo view('navbar');
        echo view('tambah_user',$kui);
        echo view('footer');  
        }else{
        return redirect()->to('Home/login');
}
    }
    public function aksi_u()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 3) {
        $model=new M_model();
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $level=$this->request->getPost('level');
        $data=array(
            'username'=>$username,
            'password'=>md5($password),
            'level'=>$level,
        );
        $model->simpan('user',$data);
        return redirect()->to('/Home/user');
        }else{
        return redirect()->to('Home/login');
}

    }

    public function edit_user($id)
    {
        $level=session()->get('level');
if ($level == 1 || $level == 3) {
        $model=new M_model();
        $where=array('id_user'=>$id);
        $kui['gas']=$model->getRow('user', $where);
        echo view('header');
        echo view('navbar');
        echo view('edit_user',$kui);
        echo view('footer'); 
        }else{
        return redirect()->to('Home/login');
}
} 
    public function hapus_user($id)
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $where=array('id_user'=>$id);
        $model->hapus('user',$where);
        return redirect()->to('Home/user'); 
        }else{
        return redirect()->to('Home/login');
}  
    }
    // Bulan //
    public function bulan()
    {
    $level=session()->get('level');
    if ($level == 1 || $level == 2) {
    $model=new M_model();
    $kui['gas']=$model->tampil('bulan');
    echo view('header');
    echo view('navbar');
    echo view('bulan',$kui);
    echo view('footer');
    }else{
    return redirect()->to('Home/login');
}
    }
    //-----------------------------------History----------------------------------//
    public function history()
    {
    $level=session()->get('level');
    if ($level == 1 || $level == 2) {
    $model=new M_model();
    $on='siswa.nama_siswa=history.nama_siswa';
    $kui['gas']=$model->join('siswa','history', $on);
    echo view('header');
    echo view('navbar');
    echo view('history',$kui);
    echo view('footer');
    }else{
    return redirect()->to('Home/login');
}
    }
    public function tambah_history()
    {
        $level=session()->get('level');
if ($level == 1 || $level == 2) {
        $model=new M_model();
        $kui['rooms']=$model->tampil('siswa');
        echo view('header');
        echo view('navbar');
        echo view('tambah_history',$kui);
        echo view('footer');  
        }else{
        return redirect()->to('Home/login');
}
    }
    public function aksi_history()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 3) {
        $model=new M_model();
        $nama=$this->request->getPost('nama');
        $a=$this->request->getPost('a');
        $b=$this->request->getPost('b');
        $c=$this->request->getPost('c');
        $d=$this->request->getPost('d');
        $e=$this->request->getPost('e');
        $f=$this->request->getPost('f');
        $g=$this->request->getPost('g');
        $h=$this->request->getPost('h');
        $i=$this->request->getPost('i');
        $j=$this->request->getPost('j');
        $k=$this->request->getPost('k');
        $l=$this->request->getPost('l');
        $th=$this->request->getPost('th');
        $data=array(
            'nama_siswa'=>$nama,
            'januari'=>$a,
            'february'=>$b,
            'maret'=>$c,
            'april'=>$d,
            'may'=>$e,
            'june'=>$f,
            'july'=>$g,
            'august'=>$h,
            'september'=>$i,
            'october'=>$j,
            'november'=>$k,
            'desember'=>$l,
            'tahun'=>$th,

        );
        $model->simpan('history',$data);
        return redirect()->to('/Home/history');
        }else{
        return redirect()->to('Home/login');
}

    }
    public function aksi_edit_history()
    {
        $level=session()->get('level');
        if ($level == 1) {
        $model=new M_model();
        $id=$this->request->getPost('id');
        $kui['gas']=$model->getWhere('history', $where);
        $nama=$this->request->getPost('nama');
        $a=$this->request->getPost('a');
        $b=$this->request->getPost('b');
        $c=$this->request->getPost('c');
        $d=$this->request->getPost('d');
        $e=$this->request->getPost('e');
        $f=$this->request->getPost('f');
        $g=$this->request->getPost('g');
        $h=$this->request->getPost('h');
        $i=$this->request->getPost('i');
        $j=$this->request->getPost('j');
        $k=$this->request->getPost('k');
        $l=$this->request->getPost('l');
        $th=$this->request->getPost('th');
        $data=array(
            'nama_siswa'=>$nama,
            'januari'=>$a,
            'february'=>$b,
            'maret'=>$c,
            'april'=>$d,
            'may'=>$e,
            'june'=>$f,
            'july'=>$g,
            'august'=>$h,
            'september'=>$i,
            'october'=>$j,
            'november'=>$k,
            'desember'=>$l,
            'tahun'=>$th,
        );
        $where=array('id_history'=>$id);
        $model->edit('history',$data,$where);
        return redirect()->to('/Home/history');
        }else{
        return redirect()->to('Home/login');
}
    }
    public function edit_history($id)
    {
        $level=session()->get('level');
if ($level == 1 || $level == 3) {
        $model=new M_model();
        $where=array('id_history'=>$id);
        $kui['gas']=$model->getRow('history', $where);
        echo view('header');
        echo view('navbar');
        echo view('edit_history',$kui);
        echo view('footer'); 
        }else{
        return redirect()->to('Home/login');
}
} 
    public function hapus_history($id)
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $where=array('id_history'=>$id);
        $model->hapus('history',$where);
        return redirect()->to('Home/history'); 
        }else{
        return redirect()->to('Home/login');
}  
    }
    //----------------------------------- O R T U ---------------------------------//
    public function ortu()
    {
    $level=session()->get('level');
    if ($level == 1 || $level == 2) {
    $model=new M_model();
    $kui['gas']=$model->tampil('ortu');
    echo view('header');
    echo view('navbar');
    echo view('ortu',$kui);
    echo view('footer');
    }else{
    return redirect()->to('Home/login');
}
    }
    public function tambah_ortu()
    {
        $level=session()->get('level');
if ($level == 1 || $level == 2) {
        $model=new M_model();
        $kui['gas']=$model->tampil('ortu');
        echo view('header');
        echo view('navbar');
        echo view('tambah_ortu',$kui);
        echo view('footer');  
        }else{
        return redirect()->to('Home/login');
}
    }
    public function aksi_ortu()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 3) {
        $model=new M_model();
        $nama=$this->request->getPost('nama');
        $namas=$this->request->getPost('namas');
        $jk=$this->request->getPost('jk');
        $alamat=$this->request->getPost('alamat');
        $data=array(
            'nama_ortu'=>$nama,
            'nama_anak_kandung'=>$namas,
            'jk'=>$jk,
            'alamat'=>$alamat,
        );
        $model->simpan('ortu',$data);
        return redirect()->to('/Home/ortu');
        }else{
        return redirect()->to('Home/login');
}

    }

    public function edit_ortu($id)
    {
        $level=session()->get('level');
if ($level == 1 || $level == 3) {
        $model=new M_model();
        $where=array('id_user'=>$id);
        $kui['gas']=$model->getRow('user', $where);
        echo view('header');
        echo view('navbar');
        echo view('edit_user',$kui);
        echo view('footer'); 
        }else{
        return redirect()->to('Home/login');
}
} 
    public function hapus_ortu($id)
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $where=array('id_ortu'=>$id);
        $model->hapus('ortu',$where);
        return redirect()->to('Home/ortu'); 
        }else{
        return redirect()->to('Home/login');
}  
    }
    //----------------------------------- T A R I F -------------------------------//
    public function tarif()
    {
    $level=session()->get('level');
    if ($level == 1 || $level == 2) {
    $model=new M_model();
    $kui['gas']=$model->tampil('tarif');
    echo view('header');
    echo view('navbar');
    echo view('tarif',$kui);
    echo view('footer');
    }else{
    return redirect()->to('Home/login');
}
    }
    public function aksi_tarif()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 3) {
        $model=new M_model();
        $jumlah=$this->request->getPost('jumlah');
        $tglm=$this->request->getPost('tglm');
        $tglk=$this->request->getPost('tglk');
        $data=array(
            'jumlah'=>$jumlah,
            'tgl_masuk'=>date('y-m-d'),
            'tgl_keluar'=>date('y-m-d'),
        );
        $model->simpan('tarif',$data);
        return redirect()->to('/Home/tarif');
        }else{
        return redirect()->to('Home/login');
}

    }
    public function tambah_tarif()
    {
        $level=session()->get('level');
if ($level == 1 || $level == 2) {
        $model=new M_model();
        $kui['gas']=$model->tampil('tarif');
        echo view('header');
        echo view('navbar');
        echo view('tambah_tarif',$kui);
        echo view('footer');  
        }else{
        return redirect()->to('Home/login');
}
    }
    public function aksi_edit_tarif()
    {
        $level=session()->get('level');
        if ($level == 1) {
        $model=new M_model();
        $id=$this->request->getPost('id');
        $kui['gas']=$model->getWhere('tarif', $where);
        $jumlah=$this->request->getPost('jumlah');
        $tglm=$this->request->getPost('tglm');
        $tglk=$this->request->getPost('tglk');
        $data=array(
            'jumlah'=>$jumlah,
            'tgl_masuk'=>date('y-m-d'),
            'tgl_keluar'=>date('y-m-d'),
        );
        $where=array('id_tarif'=>$id);
        $model->edit('tarif',$data,$where);
        return redirect()->to('/Home/tarif');
        }else{
        return redirect()->to('Home/login');
}
    }
    public function edit_tarif($id)
    {
        $level=session()->get('level');
        if ($level == 3) {
        $model=new M_model();
        $where=array('id_tarif'=>$id);
        $kui['gas']=$model->getRow('tarif', $where);
        echo view('header');
        echo view('navbar');
        echo view('edit_tarif',$kui);
        echo view('footer');  
        }else{
        return redirect()->to('Home/login');
}
    }
    public function hapus_tarif($id)
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $where=array('id_tarif'=>$id);
        $model->hapus('tarif',$where);
        return redirect()->to('Home/tarif'); 
        }else{
        return redirect()->to('Home/login');
}  
    }
    //------------------------------------ S P P ----------------------------//
    public function spp()
    {
    $level=session()->get('level');
    if ($level == 1 || $level == 2) {
    $model=new M_model();
    $on='siswa.nama_siswa=spp.nama';
    $kui['gas']=$model->join('siswa','spp', $on);
    echo view('header');
    echo view('navbar');
    echo view('spp',$kui);
    echo view('footer');
    }else{
    return redirect()->to('Home/login');
}
    }
    public function aksi_spp()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 3) {
        $model=new M_model();
        $kode=$this->request->getPost('kode');
        $bulan=$this->request->getPost('bulan');
        $nama=$this->request->getPost('nama');
        $biaya=$this->request->getPost('biaya');
        $denda=$this->request->getPost('denda');
        $tgl=$this->request->getPost('tgl');
        $waktu=$this->request->getPost('waktu');
        $data=array(
            'kode_spp'=>$kode,
            'bulan'=>$bulan,
            'nama_siswa'=>$nama,
            'biaya'=>$biaya,
            'denda'=>$denda,
            'tanggal_bayar'=>date('y-m-d'),
            'waktu'=>date('Y-m-d H:i:s'),
        );
        $model->simpan('spp',$data);
        return redirect()->to('/Home/spp');
        }else{
        return redirect()->to('Home/login');
}

    }
    public function tambah_spp()
    {
        $level=session()->get('level');
if ($level == 1 || $level == 2) {
        $model=new M_model();
        $kui['rooms']=$model->tampil('siswa');
        echo view('header');
        echo view('navbar');
        echo view('tambah_spp',$kui);
        echo view('footer');  
        }else{
        return redirect()->to('Home/login');
}
    }
    public function aksi_edit_spp()
    {
        $level=session()->get('level');
        if ($level == 1) {
        $model=new M_model();
        $id=$this->request->getPost('id');
        $kui['gas']=$model->getWhere('spp', $where);
        $jumlah=$this->request->getPost('jumlah');
        $tglm=$this->request->getPost('tglm');
        $tglk=$this->request->getPost('tglk');
        $data=array(
            'jumlah'=>$jumlah,
            'tgl_masuk'=>date('y-m-d'),
            'tgl_keluar'=>date('y-m-d'),
        );
        $where=array('id_tarif'=>$id);
        $model->edit('tarif',$data,$where);
        return redirect()->to('/Home/tarif');
        }else{
        return redirect()->to('Home/login');
}
    }
    public function edit_spp($id)
    {
        $level=session()->get('level');
        if ($level == 3) {
        $model=new M_model();
        $where=array('id_tarif'=>$id);
        $kui['gas']=$model->getRow('tarif', $where);
        echo view('header');
        echo view('navbar');
        echo view('edit_tarif',$kui);
        echo view('footer');  
        }else{
        return redirect()->to('Home/login');
}
    }
    public function hapus_spp($id)
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $where=array('id_spp'=>$id);
        $model->hapus('spp',$where);
        return redirect()->to('Home/spp'); 
        }else{
        return redirect()->to('Home/login');
}  
    }
    //------------------------------------K A M A R -------------------------------//
        public function siswa()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $kui['gas']=$model->tampil('siswa');
        echo view('header');
        echo view('navbar');
        echo view('siswa',$kui);
        echo view('footer');
        }else{
        return redirect()->to('Home/login');
}
    }
            public function tambah_siswa()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $kui['gas']=$model->tampil('siswa');
        echo view('header');
        echo view('navbar');
        echo view('tambah_siswa',$kui);
        echo view('footer');  
        }else{
        return redirect()->to('Home/login');
}
    }
        public function aksi_siswa()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $nis=$this->request->getPost('nis');
        $nama=$this->request->getPost('nama');
        $jk=$this->request->getPost('jk');
        $data=array(
            'nis'=>$nis,
            'nama_siswa'=>$nama,
            'jk'=>$jk,
        );
        $model->simpan('siswa',$data);
        return redirect()->to('/Home/siswa');
}else{
        return redirect()->to('Home/login');
}
    }

    public function edit_siswa($id)
    {
        $level=session()->get('level');
if ($level == 1 || $level == 2) {
        $model=new M_model();
        $where=array('id_siswa'=>$id);
        $kui['gas']=$model->getRow('siswa', $where);
        echo view('header');
        echo view('navbar');
        echo view('edit_siswa',$kui);
        echo view('footer');  
        }else{
        return redirect()->to('Home/login');
}
    }

        public function aksi_edit_siswa()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $id=$this->request->getPost('id');
        $kui['gas']=$model->getWhere('siswa', $where);
        $nis=$this->request->getPost('nis');
        $nama=$this->request->getPost('nama');
        $jk=$this->request->getPost('jk');
        $data=array(
            'nis'=>$nis,
            'nama_siswa'=>$nama,
            'jk'=>$jk,

        );
        $where=array('id_siswa'=>$id);
        $model->edit('siswa',$data,$where);
        return redirect()->to('/Home/siswa');
        }else{
        return redirect()->to('Home/login');
}
    }
    public function hapus_siswa($id)
    {
        $level=session()->get('level');
if ($level == 1 || $level == 2) {
        $model=new M_model();
        $where=array('id_siswa'=>$id);
        $model->hapus('siswa',$where);
        return redirect()->to('Home/siswa'); 
        }else{
        return redirect()->to('Home/login');
}  
    }

//////------------------------------------------------------------------------------------

    //----------------------------------- L A P O R A N ---------------------------///
    public function laporan_pembayaran ()
    {
        $level=session()->get('level');
        if ($level == 3) {
        // if (session()->get('id_user')>0){
        $model=new M_model();
        echo view('header');
        echo view('navbar');
        $data['kunci']='view_pembayaran';
        echo view('filter',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }

    public function cari_pembayaran ()
    {
        $level=session()->get('level');
        if ($level == 3) {
        //if (session()->get('id_user')>0){
        $model=new M_model();
        $awal=$this ->request->getPost('awal');
        $akhir=$this ->request->getPost('akhir');
        $data['okta']=$model ->filter2('pembayaran',$awal,$akhir);
        $img = file_get_contents(
           'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
         echo view ('c_p',$data);
         }else{
        return redirect()->to('home/login');
    }
    }
    public function pdf_pembayaran()
    {
    $level=session()->get('level');
    if ($level == 3) {
        $model = new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['okta']=$model->filter2('pembayaran',$awal,$akhir);
        $img = file_get_contents(
        'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
        $data['foto'] = base64_encode($img);
        $dompdf = new\Dompdf\Dompdf();
        // $dompdf->set_option('isRemoteEnabled',TRUE);
        $dompdf->loadHtml(view('c_p',$data));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));
     }else{
    return redirect()->to('home/login');
}

    }

    public function excel_pembayaran()
    {
        $level=session()->get('level');
        if ($level == 3) {}

    $model=new M_model();
    $awal= $this->request->getPost('awal');
    $akhir= $this->request->getPost('akhir');
    $data=$model->filter2('pembayaran',$awal,$akhir);

    $spreadsheet=new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Nama Pasien')
    ->setCellValue('B1', 'Tanggal Bayar')
    ->setCellValue('C1', 'Jumlah Bayar');    
    // ->setCellValue('C1', 'Jarak')
    // // ->setCellValue('D1', 'Due Date')
    // ->setCellValue('D1', 'Suhu')
    // ->setCellValue('E1', 'Tanggal Perjalanan');

    $column=2;

    foreach($data as $data){

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'. $column, $data->kode_psn)
        ->setCellValue('B'. $column, $data->tanggal_byr)
        ->setCellValue('C'. $column, $data->jumlah_byr);        
        // ->setCellValue('C'. $column, $data->jarak)
        // // ->setCellValue('D'. $column, $data->tgl_jatuh_tempo)
        // ->setCellValue('D'. $column, $data->suhu)
        // ->setCellValue('E'. $column, $data->tanggal_perjalanan);

        // $total += $data->jumlah_gaji;

        $column++;
    }
    $writer = new XLsx($spreadsheet);
    $fileName = 'Pembayaran';

    header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:attachment;filename='.$fileName.'.xls');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    //==================================================
public function lbarang ()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        // if (session()->get('id_user')>0){
        $model=new M_model();
        echo view('header');
        echo view('navbar');
        $data['kunci']='view_b';
        echo view('filter',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }

public function lcatat ()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        // if (session()->get('id_user')>0){
        $model=new M_model();
        echo view('header');
        echo view('navbar');
        $data['kunci']='view_catat';
        echo view('filter',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }


    public function lbm ()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        //if (session()->get('id_user')>0){
        $model=new M_model();
        echo view('header');
        echo view('navbar');
        $data['kunci']='view_bm';
        echo view('filter',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
public function lp ()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        //if (session()->get('id_user')>0){
        $model=new M_model();
        echo view('header');
        echo view('navbar');
        $data['kunci']='view_trans';
        echo view('filter',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }  
    public function lrombels ()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        // if (session()->get('id_user')>0){
        $model=new M_model();
        echo view('header');
        echo view('navbar');
        $data['kunci']='view_rombels';
        echo view('filter',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    //--------------------------------------------[ C A R I ]--------------------------------//
    public function cari_b ()
    {
        $level=session()->get('level');
if ($level == 1 || $level == 2) {
        //if (session()->get('id_user')>0){
        $model=new M_model();
        $awal=$this ->request->getPost('awal');
        $akhir=$this ->request->getPost('akhir');
        $kondisi=$this ->request->getPost('kondisi');
        $data['okta']=$model ->filter2('barang',$awal,$akhir);
        $img = file_get_contents(
           'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
         echo view ('cb',$data);
         }else{
        return redirect()->to('home/login');
    }
    }
        public function cari_c ()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        //if (session()->get('id_user')>0){
        $model=new M_model();
        $awal=$this ->request->getPost('awal');
        $akhir=$this ->request->getPost('akhir');
                $kondisi=$this ->request->getPost('kondisi');

        $data['okta']=$model ->filter2('pencatatan',$awal,$akhir);
        $img = file_get_contents(
            'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
         echo view ('cp',$data);
         }else{
        return redirect()->to('home/login');
    }
    }
    public function cari_bm ()
    {
        $level=session()->get('level');
if ($level == 1 || $level == 2) {
            //if (session()->get('id_user')>0){
        $model=new M_model();
        //$on=('cari_bm.id_barang=barang.id_barang');
        $awal=$this ->request->getPost('awal');
        $akhir=$this ->request->getPost('akhir');
                $kondisi=$this ->request->getPost('kondisi');

        $data['okta']=$model ->filter2('barang',$awal,$akhir);
        $img = file_get_contents(
            'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
        echo view('c_bm',$data);
        }else{
        return redirect()->to('home/login');
    }
    }
    public function cari_p ()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
                 //if (session()->get('id_user')>0){
        $model=new M_model();
        $awal=$this ->request->getPost('awal');
        $akhir=$this ->request->getPost('akhir');
        $kondisi=$this ->request->getPost('kondisi');

        $data['okta']=$model ->filter3('barang',$awal,$akhir);
        $img = file_get_contents(
            'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
        echo view('c_penj',$data);
}else{
        return redirect()->to('home/login');
    }
    }
        public function cari_rombels ()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
                 //if (session()->get('id_user')>0){
        $model=new M_model();
        $awal=$this ->request->getPost('awal');
        $akhir=$this ->request->getPost('akhir');
        $rombels=$this ->request->getPost('rombels');

        $data['okta']=$model ->filter3('rombels',$awal,$akhir);
        $img = file_get_contents(
            'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
        echo view('crombels',$data);
}else{
        return redirect()->to('home/login');
    }
    }
    // ---------------------------------------------------- [   Pdf File   ]

 public function pdf_p()
        {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
            $model = new M_model();
            $awal= $this->request->getPost('awal');
            $akhir= $this->request->getPost('akhir');
            $kondisi=$this ->request->getPost('kondisi');

            $data['okta']=$model->filter3('barang',$awal,$akhir);
            $img = file_get_contents(
            'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
            $dompdf = new\Dompdf\Dompdf();
            // $dompdf->set_option('isRemoteEnabled',TRUE);
            $dompdf->loadHtml(view('c_penj',$data));
            $dompdf->setPaper('A4','landscape');
            $dompdf->render();
            $dompdf->stream('my.pdf', array('Attachment'=>0));
         }else{
        return redirect()->to('home/login');
    }

        }
        
public function pdf_c()
        {
                    $level=session()->get('level');
                    if ($level == 1 || $level == 2) {
            $model = new M_model();
            $awal= $this->request->getPost('awal');
            $akhir= $this->request->getPost('akhir');
                    $kondisi=$this ->request->getPost('kondisi');

            $mentah=$model->filter3('pencatatan',$awal,$akhir);
            foreach($mentah as $bahan){
                if($bahan->keterangan == $kondisi){
                    $data['okta'][]= $bahan;
                }
            }
            // print_r($data['okta']);
            $img = file_get_contents(
            'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
            $dompdf = new\Dompdf\Dompdf();
            // $dompdf->set_option('isRemoteEnabled',TRUE);
            $dompdf->loadHtml(view('cp',$data));
            $dompdf->setPaper('A4','landscape');
            $dompdf->render();
            $dompdf->stream('my.pdf', array('Attachment'=>0));
         }else{
        return redirect()->to('home/login');
    }

        }

        public function pdf_b()
        {
                    $level=session()->get('level');
        if ($level == 1 || $level == 2) {
            $model = new M_model();
            $awal= $this->request->getPost('awal');
            $akhir= $this->request->getPost('akhir');
            $kondisi=$this ->request->getPost('kondisi');

            $data['okta']=$model->filter2('barang',$awal,$akhir);
            $img = file_get_contents(
            'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
            $dompdf = new\Dompdf\Dompdf();
            // $dompdf->set_option('isRemoteEnabled',TRUE);
            $dompdf->loadHtml(view('cb',$data));
            $dompdf->setPaper('A4','landscape');
            $dompdf->render();
            $dompdf->stream('my.pdf', array('Attachment'=>0));
         }else{
        return redirect()->to('home/login');
    }

        }
        public function pdf_bm()
        {
                    $level=session()->get('level');
        if ($level == 1 || $level == 2) {
            $model = new M_model();
            $awal= $this->request->getPost('awal');
            $akhir= $this->request->getPost('akhir');
                    $kondisi=$this ->request->getPost('kondisi');

            $data['okta']=$model->filter2('barang',$awal,$akhir);
            $img = file_get_contents(
            'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
            $dompdf = new\Dompdf\Dompdf();
            // $dompdf->set_option('isRemoteEnabled',TRUE);
            $dompdf->loadHtml(view('c_bm',$data));
            $dompdf->setPaper('A4','landscape');
            $dompdf->render();
            $dompdf->stream('my.pdf', array('Attachment'=>0));
         }else{
        return redirect()->to('home/login');
    }

        }
        public function pdf_rombels()
        {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
            $model = new M_model();
            $awal= $this->request->getPost('awal');
            $akhir= $this->request->getPost('akhir');
            $rombels=$this ->request->getPost('rombels');

            $data['okta']=$model->filter2('rombels',$awal,$akhir);
            $img = file_get_contents(
            'C:\xampp\htdocs\in\public\image\kop_surat_ph.jpg');
            $data['foto'] = base64_encode($img);
            $dompdf = new\Dompdf\Dompdf();
            // $dompdf->set_option('isRemoteEnabled',TRUE);
            $dompdf->loadHtml(view('crombels',$data));
            $dompdf->setPaper('A4','landscape');
            $dompdf->render();
            $dompdf->stream('my.pdf', array('Attachment'=>0));
         }else{
        return redirect()->to('home/login');
    }

        }

// ---------------------------------------------------- [   Excel File   ]
public function excel_barang()
{
            $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
                $kondisi=$this ->request->getPost('kondisi');

        $data=$model->filter2('barang',$awal,$akhir);
        

        $spreadsheet=new Spreadsheet();
        
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Nama Barang')
        ->setCellValue('B1', 'Kode Barang')
        ->setCellValue('C1', 'Kondisi')
        ->setCellValue('D1', 'Stok')
        ->setCellValue('E1', 'Tanggal');
        $column=2;
        
        foreach($data as $data){
            $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A'. $column, $data->nama_barang)
            ->setCellValue('B'. $column, $data->kode_barang)
            ->setCellValue('C'. $column, $data->kondisi)
            ->setCellValue('D'. $column, $data->stok)
            ->setCellValue('E'. $column, $data->tanggal);
            $column++;
        }

        $writer = new XLsx($spreadsheet);
        $fileName = 'Data Laporan Barang';

        
        header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition:attachment;filename='.$fileName.'.xls');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
         }else{
        return redirect()->to('home/login');
    }

}
public function excel_c()
{
            $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
                $kondisi=$this ->request->getPost('kondisi');

        $data=$model->filter2('pencatatan',$awal,$akhir);
        

        $spreadsheet=new Spreadsheet();
        
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Nama Barang')
        ->setCellValue('B1', 'Jumlah Rusak')
        ->setCellValue('C1', 'Jumlah Baik')
        ->setCellValue('D1', 'Keterangan')
        ->setCellValue('E1', 'Tanggal Pencatatan');
        $column=2;
        
        foreach($data as $data){
            $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A'. $column, $data->nama_barang)
            ->setCellValue('B'. $column, $data->jumlah_rusak)
            ->setCellValue('C'. $column, $data->jumlah_baik)
            ->setCellValue('D'. $column, $data->kondisi)
            ->setCellValue('E'. $column, $data->tanggal);
            $column++;
        }

        $writer = new XLsx($spreadsheet);
        $fileName = 'Data Laporan Pencatatan';

        
        header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition:attachment;filename='.$fileName.'.xls');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
         }else{
        return redirect()->to('home/login');
    }

}

public function excel_barangmasuk()
{
            $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
                $kondisi=$this ->request->getPost('kondisi');

        $data=$model->filter3('barangmasuk',$awal,$akhir);
        

        $spreadsheet=new Spreadsheet();
        
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Nama Barang')
        ->setCellValue('B1', 'Kondisi')
        ->setCellValue('C1', 'Stok Masuk')
        ->setCellValue('D1', 'Tanggal Masuk');

        $column=2;
        
        foreach($data as $data){
            $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A'. $column, $data->id_barang)
            ->setCellValue('B'. $column, $data->kondisi)
            ->setCellValue('C'. $column, $data->stokmasuk)
            ->setCellValue('D'. $column, $data->tanggal);
            $column++;
        }
        
        $writer = new XLsx($spreadsheet);
        $fileName = 'Data Laporan Barang Masuk';

        
        header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition:attachment;filename='.$fileName.'.xls');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
         }else{
        return redirect()->to('home/login');
    }

}
public function excel_p()
{
            $level=session()->get('level');
        if ($level == 1 || $level == 2) {
        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
                $kondisi=$this ->request->getPost('kondisi');


        $data=$model->filter4('barangkeluar',$awal,$akhir);
    

        $spreadsheet=new Spreadsheet();
        
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Nama Barang')
        ->setCellValue('B1', 'Kondisi')
        ->setCellValue('C1', 'Stok Keluar')
        ->setCellValue('D1', 'Tanggal Keluar');
        
        $column=2;
        
        foreach($data as $data){
            $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A'. $column, $data->id_barang)
            ->setCellValue('B'. $column, $data->kondisi)
            ->setCellValue('C'. $column, $data->stokkeluar)
            ->setCellValue('D'. $column, $data->tanggal);
            $column++;
        }
        
        $writer = new XLsx($spreadsheet);
        $fileName = 'Data Laporan Barang Keluar';
        header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition:attachment;filename='.$fileName.'.xls');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
         }else{
        return redirect()->to('home/login');
    }

}

}