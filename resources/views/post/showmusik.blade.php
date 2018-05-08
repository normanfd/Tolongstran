@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row">
           <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">
                
			        <div class="card" style="width:1100px;height:500px;">
                    <div class="card-body">
                    <img src="../storage/{{$post->gambar}}" alt="Gambar" height="128">
                    <h6 class="card-title">{{$post->nbarang}}</h6>
                    <h6 class="card-title">Tersedia: {{$post->jbarang}} item</h6>
                    <h6 class="card-title">Rp.{{$post->hbarang}} /hari</h6>
                    <h6 class="card-title">Deskripsi Produk :</h6>
                    <p>{{$post->deskripsi}}</p>
                    
                    
                </div>
			</div>
        </div>
               
            </div>
        
           </div>
       </div>
    </div>
@endsection