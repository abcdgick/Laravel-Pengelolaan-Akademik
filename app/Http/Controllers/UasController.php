<?php

namespace App\Http\Controllers;
use App;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Matkul;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UasController extends Controller
{
    public function beranda($locale=
    'id'){
        return view('beranda');
    }

    public function jurusan($locale='id'){
        App::setLocale($locale);
        $data_jurusan = Jurusan::all();
        return view('jurusan', compact('data_jurusan'));
    }

    public function createjurusan($locale='id'){
        App::setLocale($locale);
        return view('createjurusan', ["locale" => $locale]);
    }

    public function savejurusan(Request $req){
        $this->validate($req, [
            'nama' => 'required|string',
            'ket' => 'required|string'
        ]);
        $jurusan = new Jurusan;
        $jurusan->nama = $req->nama;
        $jurusan->ket = $req->ket;
        $jurusan->save();
        return redirect('/jurusan')->with('pesan', 'Data jurusan berhasil disimpan');
    }

    public function editjurusan($id, $locale='id'){
        App::setLocale($locale);
        $jurusan = Jurusan::find($id);
        return view('editjurusan', compact('jurusan'), ["locale" => $locale]);
    }

    public function updatejurusan(Request $req, $id){
        $this->validate($req, [
            'nama' => 'required|string',
            'ket' => 'required|string'
        ]);
        $jurusan = Jurusan::find($id);
        $jurusan->nama = $req->nama;
        $jurusan->ket = $req->ket;
        $jurusan->update();
        return redirect('/jurusan')->with('pesan', 'Data jurusan berhasil diubah');
    }

    public function deljurusan($id){
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        return redirect('/jurusan')->with('pesan', 'Data jurusan berhasil dihapus');
    }

    public function mahasiswa($locale='id'){
        App::setLocale($locale);
        $data_mahasiswa = DB::select(
            'SELECT M.id idmaha, J.nama namajur, M.npm npm, M.nama namamaha, M.kodegender kodegender
            FROM table_mahasiswa M
            JOIN table_jurusan J ON (substr(M.npm, 6, 1) = J.id)'
        );
        return view('mahasiswa', compact('data_mahasiswa'));
    }

    public function createmahasiswa($locale='id'){
        App::setLocale($locale);
        return view('createmahasiswa', ["locale" => $locale]);
    }

    public function savemahasiswa(Request $req){
        $this->validate($req, [
            'npm' => 'required|string|size:10',
            'nama' => 'required|string'
        ]);
        $mahasiswa = new Mahasiswa;
        $mahasiswa->npm = $req->npm;
        $mahasiswa->nama = $req->nama;
        $mahasiswa->kodegender = $req->kodegender;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('pesan', 'Data mahasiswa berhasil disimpan');
    }

    public function editmahasiswa($id, $locale='id'){
        App::setLocale($locale);
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa', compact('mahasiswa'), ["locale" => $locale]);
    }

    public function updatemahasiswa(Request $req, $id){
        $this->validate($req, [
            'npm' => 'required|string|size:10',
            'nama' => 'required|string'
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->npm = $req->npm;
        $mahasiswa->nama = $req->nama;
        $mahasiswa->kodegender = $req->kodegender;
        $mahasiswa->update();
        return redirect('/mahasiswa')->with('pesan', 'Data mahasiswa berhasil diubah');
    }

    public function delmahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('pesan', 'Data mahasiswa berhasil dihapus');
    }

    public function dosen($locale='id'){
        App::setLocale($locale);
        $data_dosen = Dosen::all();
        return view('dosen', compact('data_dosen'));
    }

    public function createdosen($locale='id'){
        App::setLocale($locale);
        return view('createdosen', ["locale" => $locale]);
    }

    public function savedosen(Request $req){
        $this->validate($req, [
            'nip' => 'required|string|size:4',
            'nama' => 'required|string'
        ]);
        $dosen = new Dosen;
        $dosen->nip = $req->nip;
        $dosen->nama = $req->nama;
        $dosen->save();
        return redirect('/dosen')->with('pesan', 'Data dosen berhasil disimpan');
    }

    public function editdosen($id, $locale='id'){
        App::setLocale($locale);
        $dosen = Dosen::find($id);
        return view('editdosen', compact('dosen'), ["locale" => $locale]);
    }

    public function updatedosen(Request $req, $id){
        $this->validate($req, [
            'nip' => 'required|string|size:4',
            'nama' => 'required|string'
        ]);
        $dosen = Dosen::find($id);
        $dosen->nip = $req->nip;
        $dosen->nama = $req->nama;
        $dosen->update();
        return redirect('/dosen')->with('pesan', 'Data dosen berhasil diubah');
    }

    public function deldosen($id){
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/dosen')->with('pesan', 'Data dosen berhasil dihapus');
    }

    public function matkul($locale='id'){
        App::setLocale($locale);
        $data_matkul = DB::select(
            'SELECT I.id id, I.prasyarat pra, A.nama namapra, I.kode kode, I.nama nama, I.sks sks  
            FROM table_matkul I
            JOIN table_matkul A ON (I.prasyarat = A.id)'
        );
        return view('matkul', compact('data_matkul'));
    }

    public function creatematkul($locale='id'){
        App::setLocale($locale);
        $data_prasyarat = DB::select(
            'SELECT id, nama FROM table_matkul WHERE id <> 0 '
        );
        return view('creatematkul', ["locale" => $locale], compact('data_prasyarat'));
    }

    public function savematkul(Request $req){
        $this->validate($req, [
            'prasyarat' => 'required',
            'kode' => 'required|string',
            'nama' => 'required|string',
            'sks' => 'required|string|between:1,10'
        ]);
        $matkul = new Matkul;
        $matkul->prasyarat = $req->prasyarat;
        $matkul->kode = $req->kode;
        $matkul->nama = $req->nama;
        $matkul->sks = $req->sks;
        $matkul->save();
        return redirect('/matkul')->with('pesan', 'Data matkul berhasil disimpan');
    }

    public function editmatkul($id, $locale='id'){
        App::setLocale($locale);
        $matkul = Matkul::find($id);
        $data_prasyarat = DB::select(
            'SELECT id, nama FROM table_matkul WHERE id <> 0'
        );
        return view('editmatkul', compact('matkul', 'data_prasyarat'), ["locale" => $locale]);
    }

    public function updatematkul(Request $req, $id){
        $this->validate($req, [
            'prasyarat' => 'required',
            'kode' => 'required|string',
            'nama' => 'required|string',
            'sks' => 'required|string|between:1,10'
        ]);
        $matkul = Matkul::find($id);
        $matkul->prasyarat = $req->prasyarat;
        $matkul->kode = $req->kode;
        $matkul->nama = $req->nama;
        $matkul->sks = $req->sks;
        $matkul->update();
        return redirect('/matkul')->with('pesan', 'Data matkul berhasil diubah');
    }

    public function delmatkul($id){
        $matkul = Matkul::find($id);
        $matkul->delete();
        return redirect('/matkul')->with('pesan', 'Data matkul berhasil dihapus');
    }

    public function lapnilai($locale='id'){
        App::setLocale($locale);
        $data_nilai = DB::select('SELECT N.id, MA.npm npm, MA.nama namamaha, D.nama namadosen, ML.nama namamatkul, tugas, uts, uas
        FROM table_nilai N
        JOIN table_mahasiswa MA ON (N.id_mahasiswa = MA.id)
        JOIN table_kelas K ON (N.id_kelas = K.id)
        JOIN table_dosen D ON (K.id_dosen = D.id)
        JOIN table_matkul ML ON (K.id_matkul = ML.id)');

        return view('lapnilai', compact('data_nilai'));
    }

    public function lapkelas($locale='id'){
        App::setLocale($locale);
        $data_kelas = DB::select('SELECT K.id, D.nama namadosen, ML.nama namamatkul, K.hari hari, K.jam_mulai mulai, K.jam_selesai selesai, K.ruangan ruangan 
        FROM table_kelas K
        JOIN table_dosen D ON (K.id_dosen = D.id)
        JOIN table_matkul ML ON (K.id_matkul = ML.id)');

        return view('lapkelas', compact('data_kelas'));
    }

    public function rekap1($locale='id'){
        App::setLocale($locale);
        $data_rekap1 = DB::select('SELECT D.nama namadosen, count(*) AS jumlah
        FROM table_kelas K
        JOIN table_dosen D ON (K.id_dosen = D.id) GROUP BY D.nama');

        return view('rekap1', compact('data_rekap1'));
    }

    public function rekap2($locale='id'){
        App::setLocale($locale);
        $data_rekap2 = DB::select(
        'SELECT D.nama namadosen, ML.nama namamatkul, COUNT(*) AS jumlah
        FROM table_nilai N1
        JOIN table_kelas K1 ON (N1.id_kelas = K1.id)
        JOIN table_dosen D ON (K1.id_dosen = D.id)
        JOIN table_matkul ML ON (K1.id_matkul = ML.id) 
        WHERE (0.2 * tugas + 0.3 * uts + 0.5 * uas) > (
		  		SELECT AVG(0.2 * tugas + 0.3 * uts + 0.5 * uas) AS na
				  FROM table_nilai N2
				  JOIN table_kelas K2 ON (N2.id_kelas = K2.id)
				  GROUP BY k2.id HAVING K1.id = K2.id
			) * 0.8
        GROUP BY D.nama, ML.nama');
		
		$data_rata = DB::select('SELECT AVG(0.2 * tugas + 0.3 * uts + 0.5 * uas) AS rata
				  FROM table_nilai N2
				  JOIN table_kelas K2 ON (N2.id_kelas = K2.id)
				  GROUP BY k2.id');

        return view('rekap2', compact('data_rekap2', 'data_rata'));
    }

    public function rekap3($locale='id'){
        App::setLocale($locale);
        $data_rekap3 = DB::select('SELECT J.nama AS jurusan, count(*) AS jumlah
        FROM table_mahasiswa M
        JOIN table_jurusan J ON (substr(M.npm, 6, 1) = J.id)
        GROUP BY J.id');

        return view('rekap3', compact('data_rekap3'));
    }

    public function rekap4($locale='id'){
        App::setLocale($locale);
        $data_rekap4 = DB::select('SELECT MA.nama AS nama, sum(sks) AS jumlah
        FROM table_mahasiswa MA 
        JOIN table_nilai N ON (N.id_mahasiswa = MA.id)
        JOIN table_kelas K ON (N.id_kelas = K.id)
        JOIN table_matkul ML ON (K.id_matkul = ML.id)
        GROUP BY MA.id');

        return view('rekap4', compact('data_rekap4'));
    }
}
