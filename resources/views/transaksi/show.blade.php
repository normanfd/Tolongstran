@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach($transaksis as $transaksi)
                @if($transaksi->status == '2')
                <div class="col-sm-3">
                    <div class="card text-center" style="width:250px;height:350px;">
                        <div class="card-body">
                    @if($transaksi->id_pemilik == Auth::user()->id)
                            <h3 class="card-title"><strong>Request Meminjam</strong></h3>
                            <h5 class="card-title">Peminjam:</h5>
                            <label name="id_pemilik" id="" class="form-control" readonly=read-only>
                            @foreach ($users as $user)
                                @if($user->id == $transaksi->id_peminjam)
                                <option value="{{ $user->id}}">{{$user->username}}</option>
                                @endif
                            @endforeach
                            </label>
                            
                            <h5>Nama Barang2:</h5>
                    <div>        
                    @foreach ($posts as $post)
                        @if($post->id == $transaksi->id_barang)
                        <label name="" id="" class="form-control" readonly=read-only>
                        <option value="{{ $post->id}}">{{$post->nbarang}}</option>
                        @endif
                    @endforeach  
                    </div>
                        <form class="" action="{{ route('transaksi.update') }}" method="post" enctype="multipart/form-data">
					        {{ csrf_field() }} 
						    <button type="submit"  class="btn btn-outline-success" value="save">Accept</button>
					    </form> 
                    <div>    
                        <form class="" action="{{ route('transaksi.destroy') }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }} 
                            <button type="submit" class="btn btn-outline-danger">Reject</button>   
                        </form>   
                    </div>
                    @endif
                        </div>
                    </div>
                </div>
                @endif    
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection