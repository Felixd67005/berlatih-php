<?php

namespace App\Http\Controllers;
//namespace Carbon;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

// untuk menggunakan Model yg ada di App lakukan spt berikut
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index(){
        //$asks = DB::table('pertanyaan')->get();

        // jika menggunakan eloquent
        $asks = Pertanyaan::all();
        return view('tugas_16.index', compact('asks'));
    }

    public function show($id){
        //$ask = DB::table('pertanyaan')->where('id', $id) -> first();

        // jika menggunakan eloquent
        $ask = Pertanyaan::find($id);
        return view('tugas_16.show', compact('ask'));
    }

    public function edit($id){
        //$ask = DB::table('pertanyaan')->where('id', $id) -> first();
        
        // jika menggunakan eloquent
        $ask = Pertanyaan::find($id);
        return view('tugas_16.edit', compact('ask'));
    }

    public function create(){
        return view('tugas_16.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'judul' => 'required|max:100',
            'isi' => 'required|max:255'
        ]);

        $current_date_time = date('Y-m-d H:i:s');
        $tepat = 0;
        // $query = DB::table('pertanyaan')->insert([
        //     "judul" => $request["judul"],
        //     "isi" => $request["isi"],
        //     "tanggal_dibuat" => $current_date_time,
        //     "tanggal_diperbaharui" => $current_date_time,
        //     "jawaban_tepat_id" => 0,
        //     "profil_id" => 0
        // ]);

        // jika menggunakan eloquent
        $ask = new Pertanyaan();
        $ask->judul = $request["judul"];
        $ask->isi = $request["isi"];    
        $ask->tanggal_dibuat = $current_date_time;
        $ask->tanggal_diperbaharui = $current_date_time;
        $ask->jawaban_tepat_id = $tepat;
        $ask->profil_id = $tepat;
        $ask->save();

        return redirect('/pertanyaan') -> with('success', 'Berhasil menambah pertanyaan baru');
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'judul' => 'required|max:100',
            'isi' => 'required|max:255'
        ]);

        $current_date_time = date('Y-m-d H:i:s');
        // $ask = DB::table('pertanyaan')->where('id', $id) ->update([
        //     "judul" => $request["judul"],
        //     "isi" => $request["isi"],
        //     "tanggal_diperbaharui" => $current_date_time
        // ]);
        
        // jika menggunakan eloquent
        $update = Pertanyaan::where('id', $id) -> update([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_diperbaharui" => $current_date_time
        ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil merubah data pertanyaan');
    }

    public function destroy($id){
        //$ask = DB::table('pertanyaan')->where('id', $id) ->delete();

        // jika menggunakan eloquent
        Pertanyaan::destroy($id);
        return redirect('/pertanyaan')->with('success', 'Berhasil menghapus data pertanyaan');
    }
}
