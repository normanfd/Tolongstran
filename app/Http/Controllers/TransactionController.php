<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\post;
use App\User;
use Auth;

class TransactionController extends Controller
{   
    public function show () {
        $users = User::all();
        $posts = post::all();
        $transaksis = transaksi::all();
        return view('transaksi.show', compact('transaksis','users','posts')); }

    public function create (Post $post) {
        $users = User::where('id',$post->user_id)->get();
        
        return view('transaksi.create',compact('post','id','users')); }
    
        public function store(Request $request)
        {
            $this->validate(request(),[
                
                'jbarang'=>'required|numeric',
                
            ]);
                
            transaksi::create([
                
                'jbarang'=>request('jbarang'),
                'id_pemilik'=>request('id_pemilik'),
                'id_peminjam'=>request('id_peminjam'),
                'status'=>request('status'),
                'id_barang'=>request('id_barang')
            ]);
                
            return redirect('/home')->with('success','Request Berhasil Ditambahkan');
        }
        
    public function update(){
       $posts = Transaksi::where('status','2')->first();
       $posts->status = 3;
       $posts->save();
       return redirect('/home')->with('success','Request Telah di Accept');
    }

    public function destroy(){
        $posts = Transaksi::where('status','2')->first();
        $posts->delete();
        return redirect('/home')->with('success','Request Telah di Reject');
     }
}
