<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class Controller1 extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('create');
    }

    public function update($nim)
    {
        if($data=mahasiswa::find($nim)){
            return view('update', ['data'=>$data]);
        }else return redirect('/read');
    }

    public function edit(Request $request){
        if($data=mahasiswa::find($request->nim)){
            $data->nama=@$request->nama;
            $data->alamat=@$request->alamat;
            $data->updated_at=date('Y-m-d H:i:s');
            $data->save();
            return redirect('/read')->with('pesan','data dengan NIM: '.$request->nim.'berhasil diupdate');
        }else{
            return redirect('/read')->with('pesan','data tidak ditemukan/gagal diupdate');
        }
    }

    public function save(Request $request){
        $validatedData = $request->validate([
            'nim'=> 'required|regex:/^G\d{3}.\d{2}.\d{4}$/|unique:mahasiswa,nim',
            'nama'=> 'required|string|max:25',
            'umur'=> 'required|integer|between:1,100',
            'alamat'=> 'required|min:6',
            'email'=> 'required|email'
        ]);

        $model = new mahasiswa();
        $model::insert(['nim'=>@$request->nim,'nama'=>@$request->nama,
        'alamat'=>@$request->alamat,
        'umur'=>@$request->umur,
        'email'=>@$request->email,
        'created_at'=>date('Y-m-d H:i:s')]);
        return view('view',['data'=>$request->all()]);
    }

    public function read(){
        $model = new mahasiswa();
        $dataAll=$model->all();
        return view('read',['dataAll'=>$dataAll]);
    }

    public function delete($nim){
        if($data = mahasiswa::find($nim))
        {
            $data->delete();
        }else{
            return redirect('/read')->with('pesan','Data NIM: '.@$nim.' tidak ditemukan');
        }
        return redirect('/read')->with('pesan','Data NIM: '.@$nim. ' Berhasil dihapus');
    }

    public function tampilkan(Request $request){
        $model = new mahasiswa();
        $model::insert(['nim'=>@$request->nim,'nama'=>@$request->nama,'alamat'=>@$request->alamat,'created_at'=>date('Y-m-d H:i:s')]);

        $dataAll=$model->all();
        return view('tampil2',['data'=>$request->all(),'dataAll'=>@$dataAll]);
    }

    public function logout(){
        return view('logout');
    }
    
}
?>