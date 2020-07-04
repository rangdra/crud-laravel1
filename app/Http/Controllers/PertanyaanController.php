<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        // dd($pertanyaan);
        return view('larahub.pertanyaan', compact('pertanyaan'));
    }

    public function create(){
        // dd('test');
        return view('larahub.form_pertanyaan');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        PertanyaanModel::save($data);
        return redirect('/pertanyaan');
    }

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawabans = JawabanModel::find_by_pertanyaan_id($id);
        // dd($jawabans);
        return view('larahub.detail_jawaban', compact('pertanyaan','jawabans'));
    }

    public function edit($id, Request $request){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        
        return view('larahub.edit_pertanyaan' , compact('pertanyaan', 'id'));
    }

    public function update(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);
        $pertanyaan = PertanyaanModel::update($data);
        // dd($data);
        return redirect('/pertanyaan');
    }

    public function delete($id){
        PertanyaanModel::delete($id);
        return redirect('/pertanyaan');
    }

}
