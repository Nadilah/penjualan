<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pesan; 
use App\Models\Barang;



class PesanController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(){
        $list = Barang::all();
        return view('create', compact('list'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'namadepan'=> 'required',
            'namabel'=> 'required',
            'alamat'=> 'required',
            'email'=> 'required',
            'nohp'=> 'required'
        ]);

        $pesan = new Pesan;
        $pesan->nama_depan = $request->namadepan;
        $pesan->nama_belakang = $request->namabel;
        $pesan->alamat = $request->alamat;
        $pesan->email = $request->email;
        $pesan->nohp = $request->nohp;
        $pesan->barang_id = $request->barang_id;
        $pesan->save();
        return redirect(route('thanks'))->with('successMsg','Pesanan telah ditambah');
    }
    
    public function thanks(){
        return view('thanks');
    } 

    public function show(){
        $pesans= Pesan::all();
        return view('admin.adm-tampil',compact('pesans'));
    }

    public function edit($id){
        $x=Pesan::findorfail($id);
        return view('admin.edit',compact('x'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'namadepan'=> 'required',
            'namabel'=> 'required',
            'pesan'=> 'required',
            'email'=> 'required',
            'nohp'=> 'required'
        ]);

        $pesan = Pesan::findorfail($id);
        $pesan->nama_depan = $request->namadepan;
        $pesan->nama_belakang = $request->namabel;
        $pesan->pesan = $request->pesan;
        $pesan->email = $request->email;
        $pesan->nohp = $request->nohp;
        $pesan->save();
        return redirect(route('tampil'))->with('successMsg','Pesananan telah di UPDATE');
    }

    public function delete($id){
        Pesan::findorfail($id)->delete();
        return redirect(route('tampil'))->with('successMsg','The order have been deleted');
    }
   
}
 
