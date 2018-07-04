@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    <form class="" action="{{ route('transaksi.update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
    @foreach($transaksis as $transaksi)
        <div class="col-sm-3"> @if($transaksi->id_pemilik == Auth::user()->id)
			<div class="card text-center" style="width:250px;height:350px;">
               
                <div class="card-body">
                    
                    @if($transaksi->status == '2')
                    
                   
                    <h3 class="card-title"><strong>{{ "Request Meminjam"}}</strong></h3>
                    
                    <h5>Peminjam:<h5>
                    <label name="id_pemilik" id="" class="form-control" readonly=read-only>
                    @foreach ($users as $user)
                    
                        @if($user->id == $transaksi->id_peminjam)
                        <option value="{{ $user->id}}">{{$user->username}}</option>
                        @endif
                    @endforeach
                    </label>
                    
                    <h5>Nama Barang:</h5>
                    @foreach ($posts as $post)
                        @if($post->id == $transaksi->id_barang)
                        <label name="" id="" class="form-control" readonly=read-only>
                        <option value="{{ $post->id}}">{{$post->nbarang}}</option>
                        @endif
                    @endforeach                   

                    <select name="status" id="" class="form-control">
                        <option value="{{ "1" }}">{{ "Reject" }}</option>
                        <option value="{{ "3" }}">{{ "Accept" }}</option>
                    </select>
                    <button type="submit"  class="btn btn-outline-success" value="save">Submit</button>
                   
                @endif
                
                </div>
			</div>@endif
        </div>
        @endforeach
    </div>
</div>
@endsection