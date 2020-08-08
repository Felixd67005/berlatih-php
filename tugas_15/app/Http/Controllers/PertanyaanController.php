<?php

namespace App\Http\Controllers;
//namespace Carbon;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class PertanyaanController extends Controller
{
    public function index(){
        $asks = DB::table('pertanyaan')->get();
        //dd($pertanyaan);
        return view('tugas_15.index', compact('asks'));
    }

    public function show($id){
        $ask = DB::table('pertanyaan')->where('id', $id) -> first();
        return view('tugas_15.show', compact('ask'));
    }

    public function edit($id){
        $ask = DB::table('pertanyaan')->where('id', $id) -> first();

        return view('tugas_15.edit', compact('ask'));
    }

    public function create(){
        return view('tugas_15.create');
    }

    public function store(Request $request){
        //dd($request->all());
        //$dateInput = $request["tgl_buat"];
        //$dateLocale = Carbon::parse($dateInput)->format('Y-m-s');
        //echo $dateLocale;
        $this->validate($request, [
            'judul' => 'required|max:100',
            'isi' => 'required|max:255'
        ]);


        $current_date_time = date('Y-m-d H:i:s');
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_dibuat" => $current_date_time,
            "tanggal_diperbaharui" => $current_date_time,
            "jawaban_tepat_id" => 0,
            "profil_id" => 0
        ]);
        return redirect('/pertanyaan/create');
    }

    public function update($id, Request $request){
        dd($request->all());
        $this->validate($request, [
            'judul' => 'required|max:100',
            'isi' => 'required|max:255'
        ]);

        $current_date_time = date('Y-m-d H:i:s');
        $ask = DB::table('pertanyaan')->where('id', $id) ->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_diperbaharui" => $current_date_time
        ]);
        //return redirect('/pertanyaan')->with('success', 'Berhasil merubah data pertanyaan')

    }

    public function destroy(){
        
    }
}
